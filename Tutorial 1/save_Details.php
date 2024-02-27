<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tutorial1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $province = $_POST['province'];
    $city = $_POST['city'];

    // SQL query to insert data into the database
    $sql = "INSERT INTO users (username, password, email, telephone, province, city)
            VALUES ('$username', '$password', '$email', '$telephone', '$province', '$city')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
