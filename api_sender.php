<?php
// This file will be on the external website and will send data to your API

// Your API endpoint URL
$apiUrl = "https://blessedmedicalcenter.com/api.php"; // Replace with your actual API URL

// Data to be sent (you can modify this based on your requirements)
$data = [
    'message' => 'This is a test message from the external website.' // Replace with actual dynamic data
];

// Use CURL to send the data via a POST request
$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json'
]);

// Execute the CURL request
$response = curl_exec($ch);

// Check for errors
if (curl_errno($ch)) {
    echo 'Error: ' . curl_error($ch);
} else {
    echo 'Data sent successfully!';
    echo $apiUrl;
}

// Close the CURL session
curl_close($ch);
?>