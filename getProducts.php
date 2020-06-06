<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "myShop";
$cat = $_POST['productCat'];

// Create connection
$conn =  mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = " SELECT productName , description , category , price , expDate FROM products where category='$cat'  ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	// output data of each row
	$data = array($result->num_rows);
    while($row = $result->fetch_all()) {
		for($i = 0;$i<$result->num_rows ; $i++){
		    $data[$i]=$row[$i];
		}
	}
	echo json_encode($data);
} else {
    echo "0 results";
}
$conn->close();
?>