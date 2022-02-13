<?php 
include("./config/database.php");
include("./config/header.php");
if(isset($_POST["adminlogin"])){
    $adem = $_POST["adminemail"];
    $adpa = $_POST["adminpass"];
    $compare = "SELECT * FROM admin WHERE email= '$adem' and pass = '$adpa' ";
    $result = mysqli_query($connect , $compare);
    $row = mysqli_fetch_row($result);
if ($row>0){
    header('location: dashboard.php ');
}
else{
    echo'user not found ';
}}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> 

    <title>Admin log in</title>
</head>
<body style="background-color:white;" >
<br><br><br>
<div class="container">
    <div class="row">
      <div class="col-lg-3"></div>
<div id="login-row" class="block col-lg-6 bg-black mt-3">
<h1  style="font-size:50px" class="text-center text-secondary pt-5">Admin Log In </h1>
        
                    <form action="" method="POST">
   


<div class="form-group">
<label style="font-size:20px" for="" class="text-center text-secondary pt-5">E-mail </label>   
<input type="email" name="adminemail" class="form-control"><br><br>
</div>
<div class="form-group">
<label for="" style="font-size:20px" class="text-center text-secondary pt-5">  Password </label>
<input type="password" name = "adminpass" class="form-control"><br><br>
</div>
<div class="form-group">
<input type="submit" style="font-size:20px" class="btn btn-warning" name="adminlogin"> <br>
<br><br>
</div>
</form>
</div>    
<br>

</form>

    </div>
    <div class="col-sm">
      
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>
</html>