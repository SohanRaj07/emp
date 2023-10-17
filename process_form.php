<?php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $employee_id = $_POST["employee-id"];
    $title = $_POST["title"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $aadhar_number = $_POST["aadhar-no"];

    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "employees";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into the database
    $sql = "INSERT INTO employee_info (name, employee_id, title, email, phone, aadhar_number) VALUES ('$name', '$employee_id', '$title', '$email', '$phone', '$aadhar_number')";

    if ($conn->query($sql) === TRUE) {
        $message = "Inserted Successfully.";
        echo "<script>alert('$message');</script>";
    } else {
        $message = "error.";
        echo "<script>alert('$message');</script>";
    }

    // Close connection
    $conn->close();
}
?>
