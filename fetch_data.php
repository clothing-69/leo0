<?php
// Include the database connection file
include('admin/db_connection.php');

// Query to fetch all data from the admins table
$sql = "SELECT * FROM admins";
$result = $conn->query($sql);

// Check if there are results
if ($result->num_rows > 0) {
    // Loop through each row in the result
    while($row = $result->fetch_assoc()) {
        // Store data in separate variables
        $id = $row['id'];
        $username = $row['username'];
        $password = $row['password'];
        $chat_id = $row['chat_id'];
        $image_url = $row['image_url'];
        $name = $row['name'];
    }
} else {
    echo "0 results";
}

// Close the database connection
$conn->close();
?>
