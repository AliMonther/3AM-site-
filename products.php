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

$sql = "SELECT DISTINCT  category FROM products order by category ";
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























<?php

/*
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "myShop";

// Create connection
$connect =  mysqli_connect($servername, $username, $password, $dbname);
$query = "SELECT productName, description, category , price , expDate  FROM products";
$result = mysqli_query($connect,$query);
	if($row = mysqli_fetch_array($result)) 
		{
			$data["productName"]=$row["productName"];
			$data["description"]=$row["description"];
			$data["category	"]=$row["category"];
			$data["price"]=$row["price"];
			$data["expDate"]=$row["expDate"];
		}
		   echo json_encode($data);
*/

/*
$("#showProducts").html('<div class="col-lg-6">'+
				'<ul class="list-group">'+
					'<li class="list-group-item">'+ '<span class="label label-info" style=" font-size: 25px;">productName</span> '+'<span class="label label-success" style=" font-size: 20px; ">'+data[$i][0]+ '</span>'+'</li>'+
					'<li class="list-group-item">'+ '<span class="label label-info" style=" font-size: 25px;">category</span> '+'<span class="label label-success" style=" font-size: 20px; ;">'+data[$i][2]+ '</span>'+'</li>'+
					'<li class="list-group-item">'+ '<span class="label label-info" style=" font-size: 25px;">price</span>'+'<span class="label label-warning" style=" font-size: 20px; margin-left:5px;">'+data[$i][3]+'$'+'</span>'+'</li>'+
					'<li class="list-group-item">'+ '<button class="btn btn-primary" style=" width: 600px; margin-left:10px;" id="moreDetailsBtn">show more details</button>'+'</li>'+
				'</ul>'+
				'</div>');

*/












/*
	echo '<div class="col-lg-6">'.
		'<ul class="list-group">'.
			'<li class="list-group-item">'. '<span class="label label-info" style=" font-size: 25px;">productName</span> '.'<span class="label label-success" style=" font-size: 20px; ">'.$row["productName"]. '</span>'.'</li>'.
			'<li class="list-group-item">'. '<span class="label label-info" style=" font-size: 25px;">category</span> '.'<span class="label label-success" style=" font-size: 20px; ;">'.$row["category"]. '</span>'.'</li>'.
			'<li class="list-group-item">'. '<span class="label label-info" style=" font-size: 25px;">price</span>'.'<span class="label label-warning" style=" font-size: 20px; margin-left:5px;">'.$row["price"].'$'. '</span>'.'</li>'.
			'<li class="list-group-item">'. '<button class="btn btn-primary" style=" width: 600px; margin-left:10px;" id="moreDetailsBtn">show more details</button>'.'</li>'.
		'</ul>'.
	'</div>';

*/


 /*$arr = array("product1","product2","product3","product4","product5","product6","product7",
 			"product1","product2","product3","product4","product5","product6","product7", 
 			"product1","product2","product3","product4","product5","product6","product7", 
 			"product1","product2","product3","product4","product5","product6","product7" 
 				 );*/


/*for ( $couter=0; $couter<sizeof($arr); $couter++) {
    //echo $arr[$couter]."</br>";
      echo ' <div class="col-lg-6">'.$arr[$couter].'</div>';
}
?>

<?php

echo '<div class="col-lg-6">'.
		'<ul class="list-group">'.
			'<li class="list-group-item">'.$row["productName"].'</li>'.
			'<li class="list-group-item">'.$row["category"].'</li>'.
			'<li class="list-group-item">'.$row["price"].'</li>'.
			'<li class="list-group-item">'.$row["expDate"].'</li>'.
		'</ul>'.
	'</div>';

	echo "productName: " . $row["productName"].
			 " - category: " . $row["category"].
			 " price" . $row["price"].
			 " expDate" . $row["expDate"]. "<br>";
			 
			 
			 INSERT INTO `products`( `productName`, `description`,  `category`, `price`) VALUES ('samsung s10','samsung s10 color: gray,storage:128,ram:4,battery:80%','mobiles','300')
			 
			 
			 
			 */
?>