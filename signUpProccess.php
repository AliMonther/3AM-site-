<?php
//session_start();
if(isset($_POST['signUpBtn']))
{
    $servername = "localhost";
    $username = "root";
    $password = "123456";
    $dbname = "myshop";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql="SELECT username FROM users WHERE username='" . $_POST['username'] . "' ";
    $result = $conn->query($sql);
    $conn->close();
    if ($result->num_rows > 0) 
    { 
        
        sleep(3);
        header("Location:" . 'index.html');  
    }
    else if ($result->num_rows == 0) 
    {
       /*add new user to the database */
       $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "INSERT INTO users (username, password, email,phoneNumber,address,status)
                VALUES ('".$_POST['username']."', '".$_POST['password']."', '".$_POST['email']."',
                        '".$_POST['phoneNumber']."','".$_POST['address']."','user')";
        if ($conn->query($sql) === TRUE) {
            $name = $row['username'];
            header("Location:".'main.php?username='.$name);

        } 
        else {
                echo "Error: " . $sql . "<br>" . $conn->error;
             }
        $conn->close();
    }
}
?>  