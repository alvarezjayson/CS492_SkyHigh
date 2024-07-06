<?php
//setting variables from the html to use here
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  //database connection, uncomment after you read this. These are variables
  //you will need to replace the strings with the appropriate information in order to connect with the database
//$servername = "PLACE THE SERVER NAME HERE THIS";
//$username = "DATABASE NAME HERE";
//$password_db = "DATABASE PASSWORD HERE";
//$dbname = "DATABASE NAME HERE";

// create connection
$conn = new mysqli($servername, $username, $password_db, $dbname);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $password);

// execute the statement
if ($stmt->execute()) {
    echo "SUCCESS, Recorded";
} else {
    echo "Error: " . $stmt->error;
}

// close the statement and connection
$stmt->close();
$conn->close();
?>
?>
