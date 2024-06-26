<!-- api_integration.php -->
<?php
$api_url = "http://api.weatherstack.com/current?access_key=YOUR_ACCESS_KEY&query=New York";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec($ch);
curl_close($ch);

$data = json_decode($response, true);

echo "Current temperature in New York: " . $data['current']['temperature'] . "°C";
?>
