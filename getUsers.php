<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "myShop";

// Create connection
$conn =  mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = " SELECT * FROM users order by username ";
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
/**
 * get custome user 
 */
if(isset($_POST['username']))
{
	$name=$_POST['username'];

		// Create connection
	$connect =  mysqli_connect($servername, $username, $password, $dbname);
	$query = " SELECT username  FROM users where username= '$name'";
	$result = mysqli_fetch_array($result);
	while($row = mysqli_fetch_array($result)) {
				$data["username"]=$row["username"];
			}
		echo json_encode($data);
}
?>