<?php
include 'db_connect.php';

$sql = "INSERT INTO Users (username, email, password) VALUES ('john_doe', 'john@example.com', 'securepassword')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
