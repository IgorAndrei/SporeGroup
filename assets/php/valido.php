<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['email'])) {
$error = " *Campo Vacio";
}
else
{
// Define $username and $password
$email=$_POST['email'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "sporegro", "Igorriquelme0911###");
// To protect MySQL injection for Security purpose
$username = stripslashes($email);
$username = mysql_real_escape_string($email);
// Selecting Database
$db = mysql_select_db("sporegro_SGA", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("INSERT INTO correos (mail)VALUES ('$email')", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1) {

$error = "Correctamente Registrado";

} else {
$error = "Error*";
}
mysql_close($connection); // Closing Connection
}
}
?>



