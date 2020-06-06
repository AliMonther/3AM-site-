<?php
if(isset($_POST['productName']))
{
    $servername = "localhost";
    $username = "root";
    $password = "123456";
    $dbname = "myshop";
    $productName=$_POST['productName'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM products WHERE productName='$productName'";

if ($conn->query($sql) === TRUE) {
    echo "1";
} else {
    echo "0 " . $conn->error;
}

$conn->close();
}

?>