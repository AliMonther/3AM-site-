<?php
//session_start();
if(isset($_POST['loginBtn']))
{
   
    $servername = "localhost";
    $username = "root";
    $password = "123456";
    $dbname = "myShop";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql="SELECT * FROM users WHERE email='" . $_POST['email'] . "' AND password = '". $_POST['password']."'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
     while($row = $result->fetch_assoc()) 
        {
        if(!empty($row['email']) AND !empty($row['password']))
            {
               if($row['status'] == 'admin' )
               {
                $admin = $row['username'];
                header("location:".' adminPanel.php?username='.$admin);
               }
               else
               {
                $name = $row['username'];
                header("location:".' main.php?username='.$name);
               }
              
            }
        }
    }
    else
    {
        sleep(3);
        header("Location:" . 'index.html');  

    }
}

?>