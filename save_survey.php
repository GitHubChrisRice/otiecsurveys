<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "d6%cd.694c6e4f5$9687f046E7eB7d72";
$dbname = "sakila";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$company = $_POST['company'];
$q1Response = $_POST['q1'];
$q2Response = $_POST['q2'];

// Insert survey data into the database
$sql = "INSERT INTO survey_results (name, company, q1_response, q2_response)
        VALUES ('$name', '$company', '$q1Response', '$q2Response')";

if ($conn->query($sql) === TRUE) {
    echo "Survey results saved successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>