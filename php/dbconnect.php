<?php
$servername = "localhost";
$username   = "amonguss_shareloving1admin";
$password   = "TjXcQFTiAu9j";
$dbname     = "amonguss_shareloving1";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
?>
