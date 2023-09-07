<?php
$servername = "localhost";
$username = "root";
$password = "10255121love";
$dbname ="testunity";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo"Connected successfully";

$sql = "SELECT id,username, password,id FROM users";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["username"]." - password: ". $row["password"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();

?>