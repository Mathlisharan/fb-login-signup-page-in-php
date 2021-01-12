<?php
$servername = "localhost";
$username = "root";
$password = "";
$facebook='facebook';

// Create connection
$conn = mysqli_connect($servername, $username, $password,$facebook);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>