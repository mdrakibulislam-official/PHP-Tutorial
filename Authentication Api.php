<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demodb";

$conn = new mysqli($servername, $username, $password, $dbname);

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$email = $_POST["email"];

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO app (firstName, lastName, email) VALUES ('$firstName','$lastName', '$email')";

if ($conn->query($sql)=== TRUE) {
	echo "Registration Successfully";
}else{
	echo "Error: ".$sql."<br>".$conn->error;
}


$conn->close();

?>
