<?php
session_start();
if(isset($_GET['username']))
$_SESSION['username'] = $_GET['username'];

    $servername = "localhost";
    $username = "root";
    $password = "123456";
    $dbname = "myShop";
    
   
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);/* */
    $sql="SELECT * FROM users WHERE username='" . $_SESSION['username'] . "'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) 
    {
     while($row = $result->fetch_assoc()) 
        {
        $usernameInfo = $row['username'];
        $passwordInfo = $row['password'];
        $userAvatarInfo = $row['userAvatar'];
        $emailInfo = $row['email'];
        $phoneNumberInfo = $row['phoneNumber'];
        $addressInfo = $row['address'];
        }
     }
     else
     {
        echo "account not found!..";
     }
    // $conn->close();

?>


<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>boottrap tutorial</title>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/userProfileStyle.css"/>
    <script src="js/html5shiv.min"></script>
    <script src="js/respond.min.js"></script>
</head>
<body>

<div class="row userInfo">
<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
</div>  
<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
    <div class="thumbnail">
      <?php
      if($userAvatarInfo == "noAvatar")
      {
        echo '<img src="imgs/defaultAvatar.png" alt="Avatar"> ';
      }
      else
      {
        /**
         *     ---TODO---
         * 1- get user path image.
         * 2- echo '<img src="imgs/userImgs/".$userAvatarInfo.png" alt= "> ';
         */
      }
      ?>
      
      <p><a href="#" class="btn btn-primary changeImgBtn" role="button">change image</a> 
      <div class="caption">
        <h1 class="usernameLabel"><?php echo $usernameInfo;?></h1>
        <p class=" label label-default">Email:</p>
        <p class=" label label-info emailLabel"><?php echo $emailInfo;?></p></br></br>
        <p class=" label label-default">Password:</p>
        <p class=" label label-info passwordLabel"><?php echo $passwordInfo;?></p></br></br>
        <p class=" label label-default">Phone number:</p>
        <p class=" label label-info phoneNumberLabel"><?php echo $phoneNumberInfo;?></p></br></br>
        <p class=" label label-default">Address:</p>
        <p class=" label label-info addressLabel"><?php echo $addressInfo;?></p></br></br>
        </br>
        <p><a href="#" class="btn btn-primary " role="button">change info</a> 
        <a href="main.php" class="btn btn-default backBtn" role="button">Back</a></p>
      </div>
    </div>
  </div>
</div>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-v3.5.0.js"></script>
<script src="js/myScripts.js"></script>
</body>
</html>