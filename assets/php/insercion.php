<?php

$servername = "localhost";
$username = "sporegro_ia";
$password = "Igorriquelme0911###";
$dbname = "sporegro_lista_info";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	
	echo "Datos Repetidos" ;
	die("Connection failed: " . $conn->connect_error);

} 



$mail = $_POST["email"];


$sql = "INSERT INTO mail (mail)VALUES ('$mail')";

if ($conn->query($sql) === TRUE) {
	

    header( 'Location: http://www.sporegroup.cl' );

	
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();






?>