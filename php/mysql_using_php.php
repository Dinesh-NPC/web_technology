<?php

$servername = "localhost";
$username = "root";
$password = "dinesh";
$dbname = "dinesh";


$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";


$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}

$conn->select_db($dbname);

$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

$sql = "ALTER TABLE users ADD gender VARCHAR(10)";
if ($conn->query($sql) === TRUE) {
    echo "Table altered successfully<br>";
} else {
    echo "Error altering table: " . $conn->error . "<br>";
}

$sql = "DROP TABLE IF EXISTS users";
if ($conn->query($sql) === TRUE) {
    echo "Table dropped successfully<br>";
} else {
    echo "Error dropping table: " . $conn->error . "<br>";
}

$conn->close();
?>