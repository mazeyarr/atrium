<?php
// Get the information from the database
$sql = 'SELECT `username`, `salt`, `password` FROM users WHERE `username` = :username';
$db->prepare($sql);
$db->bind(':username', ($_POST['username']));
$db->execute();
$rows = $db->fetch();

// Check the result
if (!$rows)
{
	// Username cannot be found, display an error to try again
	$errorMsg = "Invalid username or password.";
}
else
{
	// Retrieve the user's salt and hashed password
	$salt = $rows['salt'];
	$password = $rows['password'];

	// Configure the bcrypt options
	$options =
	[
		'cost' => 15,
		'salt' => $salt,
	];

	// hash the password which the user has entered with the salt corresponding to the provided username
	$hash = password_hash(($_POST['password']), PASSWORD_BCRYPT, $options);

	// Check if the provided password matches the hash which was retrieved from the database
	if ($password == $hash)
	{
		// Credentials are correct, user gets signed in and is then sent to the dashboard
		$_SESSION['isSignedIn'] = TRUE;
		$_SESSION['username'] = ($_POST['username']);
		header("location:dashboard.php");
	}
	else
	{
		// Credentials are incorrect, display an error to try again
		$errorMsg = "Invalid username or password.";
	}
}
?>