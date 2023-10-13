<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tradingdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$timestamp = $_POST['timestamp'];
$script = $_POST['name'];
$market_type = $_POST['market_type'];
$order_type = $_POST['order_type'];
$entry_price = $_POST['entry_price'];
$entry_image = $_POST['entry_image'];
$Quantity = $_POST['Quantity'];
$exit_price = $_POST['exit_price'];
$exit_image = $_POST['exit_image'];
$capital = $_POST['capital'];
$returnn = $_POST['returnn'];
$logic = $_POST['logic'];
$mistake = $_POST['mistake'];


echo "Connected successfully";
?>
