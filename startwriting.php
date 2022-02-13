<?php
include("./config/database.php");
include("./config/header.php");

if(isset($_POST["login"])){

$email = @$_POST["email"];
$pass = @$_POST["pass"];
$decreption = md5(md5(md5($pass)));

$compare = "SELECT * FROM users WHERE email='$email' and pass = '$decreption' ";

$result = mysqli_query($connect,$compare);

$row = mysqli_fetch_row($result);

if ($row>0){
    header('location: home.php ');
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
    <meta name="viewport" content="width=, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> 
    <title>log in</title>
</head>
<body style="background-color:white;" >

<div class="container">

    <div class="row">
      <div class="col-lg-3"></div>
<div id="login-row" class="block col-lg-6  mt-4">
<h1 class="text-center text-black pt-5" style="font-size:50px">Log In</h1>
        
<form action="" method="POST">
<div class="form-group">
<label for="" class = "text-black"style="font-size:20px" >E-mail</label>
<input type="text"name="email" class="form-control"></inpot>
</div>
<br>
<div class="form-group">
<label for="" class = "text-black" style="font-size:20px">password</label>
<input type="password"name="pass" class="form-control"></inpot>
</div>
<br>
<div >
    <br>
<button type="submit" class="btn btn-warning" name="login" style="color: black; text-decoration: none; font-size:20px;">log in</button>
<br><br><br>
<p class = "text-black" style="font-size:20px">to create new account:</p>

<button type="submit" class="btn btn-warning"  style="font-size:20px" name="register"> <a href="http://localhost//fullproject/signup.php" style="color: black; text-decoration: none;"> Register </a></button>

</div>    
<br>

</form>

    </div>
    <div class="col-sm">
      
    </div>
  </div>
</div>

    

<br><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>
</html>
<?php 
include("./config/footer.php");?>