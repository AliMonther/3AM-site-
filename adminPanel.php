<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>boottrap tutorial</title>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/adminStyle.css"/>
    <script src="js/html5shiv.min"></script>
    <script src="js/respond.min.js"></script>
</head>


<body style="background: rgb(102, 104, 255);">

<div class="input-group">
    <form class="navbar-form navbar-left">
    <span class="input-group-btn">
      <input type="text" class="form-control" placeholder="Search">
      
        <button class="btn btn-info" type="button">Search!</button>
      </span>
</form>
</div>



<div class="row alert alert-warning" role="alert">
 
<div class="col-xs-4"><a class="alert-link"><h1>Admin Panel</h1></a></div>
<div class="col-xs-4 btn-group">
    <a class="btn btn-info" id="addProductBtn">add Product</a>
    <a class="btn btn-info">add Categort</a>
    <a class="btn btn-info">add User</a>
    <a class="btn btn-info" href="adminPanel.php">refreash</a>
</div>
</div>

    <div class="row">
     <div class="col-lg-3 col-xs-3 btn-group-vertical" id="cat"></div>
     <div class="col-lg-6 col-xs-4"id="showInfo"></div>
     <div class="col-lg-3 col-xs-3 btn-group-vertical"id="users"></div>
    </div>





<div class="row">
    <div class="col-xs-12">
        <a class="btn btn-danger" href="index.html">exit</a>
    </div>





<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-v3.5.0.js"></script>
<script src="js/adminScript.js"></script>

</body>

</html>