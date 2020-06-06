<?php
    
    if(isset($_GET['productName']) && isset($_GET['description']) &&
       isset($_GET['category'])&& isset($_GET['price']))
    {
        $servername = "localhost";
        $username = "root";
        $password = "123456";
        $dbname = "myshop";
        $productName=$_GET['productName'];
        $description=$_GET['description'];
        $category=$_GET['category'];
        $price=$_GET['price'];

        // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    $sql = "INSERT INTO products (productName , description , category , price)
     VALUES ('$productName','$description','$category',$price)";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    }   

?>