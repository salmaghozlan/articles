<?php
include("./config/database.php");
if(isset($_POST["login"])){

$email = @$_POST["email"];
$pass = @$_POST["pass"];
$decreption = md5(md5(md5($pass)));

$compare = "SELECT * FROM login WHERE email='$email' and pass = '$decreption' ";

$result = mysqli_query($connect,$compare);

$row = mysqli_fetch_row($result);

if ($row>0){
    header('location: welcomepage.php ');
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
<body >

<h1 class="text-center text-black pt-5">Log In</h1>
<div class="container">
<div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
    <form action="" class="form"method="POST">
   
    
<div class="form-group">
<label for="">E-mail</label>
<input type="text"name="email" class="form-control"></inpot>
</div>
<div class="form-group">
<label for="">password</label>
<input type="password"name="pass" class="form-control"></inpot>
</div>
<br>
<div class="col-md-12 text-center ">
<button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm" name="login" style="color: white; text-decoration: none;">log in</button>


</div>    
<br>
<p>to create new account:</p>
<button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm" name="register"> <a href="http://localhost//newproject/signup.php" style="color: white; text-decoration: none;"> Register</button>
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