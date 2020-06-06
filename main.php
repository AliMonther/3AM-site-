<?php
session_start();
if(isset($_GET['username']))
$_SESSION['username'] = $_GET['username'];
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>boottrap tutorial</title>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <script src="js/html5shiv.min"></script>
    <script src="js/respond.min.js"></script>
</head>


<body style="background: rgb(255, 255, 255);">

<nav class="navbar navbar-default  nav-fixed-top" style="  background-image: url('imgs/mainPageBack1.jpg');height: 300px;  ">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <p class="navbar-brand mainIcon">3AM CENTER<p>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="categoriesLink"><button class=" btn btn-default " id="mainLink">categories <span class="sr-only">(current)</span></button></li>

        </ul>
        
        <ul class="nav navbar-nav navbar-right">
          <li ><a href="#"><img src="imgs/pasket.png"style="width=100px;height:50px ;"> <span class="sr-only">(current)</span></a></li>
          <li class="active"><a href="userProfile.php?username=<?php echo $_SESSION["username"];?> "><?php echo $_SESSION["username"];?> <span class="sr-only">(current)</span></a></li>
          <li ><a href="main.php">main <span class="sr-only">(current)</span></a></li>
          <li ><a href="" >contact us <span class="sr-only">(current)</span></a></li>
          <li><a href="index.html">log out</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
        <div class="row">
         
          <div>
          
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 searchBox">
              <form class="navbar-form navbar-right ">
                <div class=" col-xs-9 form-group ">
                  <input type="text" class=" form-control" placeholder="search about products">
                </div>
                <button type="submit" class="btn btn-default">Search</button>
              </form>
              
            </div>
          
          
        </div>
    </div><!-- /.container-fluid -->
    
  </nav>
<!-- end  navbar-->
<div>

</div>

<!-- the div show products category -->
<div class="row" >
  <div class=" col-lg-9 col-xs-12 showProductsCatArea" id="showProducts" ></div>
  
  <div class="col-lg-3 col-xs-12 favorateArea">
   <div class="col-lg-12" style="color: rgba(253, 188, 8, 0.945); font-size: 39px;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;"><p>Best products</p></div>
  </div>
  <div class="col-lg-12 favorateAreaBody"></div>
</div>

<div>
  
</div>
<div>
  <!--footer-->
</div>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-v3.5.0.js"></script>
<script src="js/myScripts.js"></script>
<!-- Footer -->

</body>

</html>