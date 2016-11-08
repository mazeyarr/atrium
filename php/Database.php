<?php
require 'Constants.php';
// Create and set the database variables
$dbhost		= db_host;
$dbname		= db_name;
$dbusername	= db_username;
$dbpassword	= db_password;
$dbcharset	= db_charset;
$dbport		= db_port;

// Define the variables to use them within the Database class
define("DB_HOST", "$dbhost");
define("DB_USER", "$dbusername");
define("DB_PASS", "$dbpassword");
define("DB_NAME", "$dbname");
define("DB_CHARSET", "$dbcharset");
define("DB_PORT", "$dbport");

class Database
{
	// Create and set the variables
	private $host		= DB_HOST;
	private $user		= DB_USER;
	private $pass		= DB_PASS;
	private $dbname 	= DB_NAME;
	private $charset	= DB_CHARSET;
	private $port		= DB_PORT;
	private $dbh;

	// __construct() runs every time a new instance of this class is created
	public function __construct()
	{
		// Create and set the Data Source Name string
		$dsn = "mysql:host=$this->host;port=$this->port;dbname=$this->dbname;charset=$this->charset";

		// Configure the options
		$options =
		[
			// Throw an exeption which can be caught when an error occurs, this way no (sensitive) data will be shown to the users (or potential hackers)
			PDO::ATTR_ERRMODE			 => PDO::ERRMODE_EXCEPTION,
			// Fetch an array by column name as defined in the database by default
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		];

		try
		{
			// Try to connect to the database
			$this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
		}
		catch (PDOException $e)
		{
			// If the connection fails, die and display an error
			header('Location: error-database.html');
		}
	}

	// Send the query to the db, this does NOT execute the query until excute() is called
	public function prepare($sql)
	{
		$this->stmt = $this->dbh->prepare($sql);
	}

	// Attach the inputs/variables to the placeholders as parameters
	public function bind($param, $value, $type = null)
	{
		if (is_null($type))
		{
			switch (true)
			{
				case is_int($value):
				$type = PDO::PARAM_INT;
				break;
				case is_bool($value):
				$type = PDO::PARAM_BOOL;
				break;
				case is_null($value):
				$type = PDO::PARAM_NULL;
				break;
				default:
				$type = PDO::PARAM_STR;
			}
		}
		else
		{
			echo "notnull";
		}
		$this->stmt->bindValue($param, $value, $type);
	}

	// Pass the parameters and execute the query
	public function execute()
	{
		return $this->stmt->execute();
	}

	// Pass the parameters, prepare and execute the query
	public function query($sql)
	{
		$this->stmt = $this->dbh->prepare($sql);
		return $this->stmt->execute();
	}

	// Get the next row that matches the query
	public function fetch()
	{
		return $this->stmt->fetch(PDO::FETCH_ASSOC);
	}

	// Get all rows mathing the query and put them in an array
	public function fetchAll()
	{
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	// Get the next value within the column
	public function fetchColumn()
	{
		return $this->stmt->fetchColumn();
	}
}
?>