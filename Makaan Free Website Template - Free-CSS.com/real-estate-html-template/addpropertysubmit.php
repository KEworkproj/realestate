<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "abwachararentals"; // Use the actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$category = $_POST['category'];
$name = $_POST['name'];
$location = $_POST['location'];
$cost = $_POST['cost'];
$size = $_POST['size'];

// Handle uploaded photos (if any)
//if (!empty($_FILES['photos']['tmp_name'])) {
    // Process the uploaded files (e.g., move them to a specific directory)
    // You can access individual files using $_FILES['photos']['name'][0], $_FILES['photos']['name'][1], etc.
//}

// Insert data into the table
$sql = "INSERT INTO rentals (category, name, location, cost, size) 
        VALUES ('$category', '$name', '$location', '$cost', '$size')";

if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
