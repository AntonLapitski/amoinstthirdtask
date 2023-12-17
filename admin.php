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

$sql = "SELECT * FROM mystats";


if ($_REQUEST['name'] === 'anton' && $_REQUEST['password'] = 'test') {

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "ip: " . $row["ip"]. " - City: " . $row["city"]. " " . $row["platform"]. "<br>";
        }
    } else {
        echo "0 results";
    }

} else {
    echo 'Wrong password and name';
}

$conn->close();