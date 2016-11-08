<?php
// Requires
require("Database.php");

// Create a new Database() instance
$db = new Database();

// Create a randomly generated salt of 255 characters
$salt = openssl_random_pseudo_bytes(255);

// Configure the username and password
$username = "test";
$password = "test";

// Configure the bcrypt options
$options = 
[
	'cost' => 15,
	'salt' => $salt,
];

// Hash the password using bcrypt
$hash = password_hash($password, PASSWORD_BCRYPT, $options);

// INSERT INTO users table
$sql = 'INSERT INTO `users` (`username`, `password`, `salt`) VALUES (:username, :password, :salt)';
$db->prepare($sql);
$db->bind(':username', $username);
$db->bind(':password', $hash);
$db->bind(':salt', $salt);
$db->execute();
?>