<?php
$servername = "localhost";
$username = "root";
$password = "10255121love";
$dbname ="testunity";

//variables submited by user
$loginUser = $_POST["loginUser"];
$loginPass = $_POST["loginPass"];
$score = $_POST['score'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT score FROM users WHERE username = '" .$loginUser . "'";

$result = $conn->query($sql);
$row = $result->fetch_assoc();
$previousScore = $row['score'];

if ($result->num_rows > 0) {
  if($score>$previousScore){
    echo"New Record";
    $sql2 = "UPDATE `users` SET `score` = " . $score . " WHERE `username` = '" . $loginUser . "'";
    $conn->query($sql2);
  }
  else {
    echo"$loginUser,$score";
    }
} 
else {

    }
$conn->close();

?>