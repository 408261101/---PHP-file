<?php
$servername = "localhost";
$username = "root";
$password = "10255121love";
$dbname ="testunity";

//variables submited by user
$loginUser = $_POST["loginUser"];
$loginPass = $_POST["loginPass"];


// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT password FROM users WHERE username = '" .$loginUser . "'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Tell user that name is already taken
  echo "Username is already taken.";
} else {
        echo "Creating user...";
        $sql2= "INSERT INTO users (username, password) VALUES ('" .$loginUser . "','" .$loginPass."')";
        if ($conn->query($sql2) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql2 . "<br>" . $conn->error;
          }
          
    }
$conn->close();

?>