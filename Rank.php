<?php
$servername = "localhost";
$username = "root";
$password = "10255121love";
$dbname ="testunity";

//variables submited by user


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users ORDER BY score DESC";

$conn->query($sql);
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $username = $row["username"];
        $userScore = $row["score"];
        
        // Output the data for each row
        echo "Username: " . $username . " - Score: " . $userScore . "<br>";
    }
} else {
    echo "Can not find record";
}
$conn->close();

?>