<?php header('Access-Control-Allow-Origin: http://localhost:8000');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, PATCH, OPTIONS');
header('Access-Control-Allow-Headers: X-Requested-With, content-type, Authorization');?>

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "stats";
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$ip = $_REQUEST['ip_address'];
$city = $_REQUEST['city'];
$platform = $_REQUEST['platform'];

$sql = "INSERT INTO mystats (ip, city, platform)
VALUES ('$ip', '$city', '$platform')";

if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully";
} else {
    echo "Error inserting database: " . $conn->error;
}

$conn->close();
?>