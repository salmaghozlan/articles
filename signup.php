<?php
include("./config/database.php");
include("./config/header.php");

if(isset($_POST["register"])){}
$name  = @$_POST["username"];
$email = @$_POST["email"];
$pass = @$_POST["pass"];
$cipher = md5(md5(md5($pass)));
$insert = "INSERT INTO users (username,email,pass) VALUES ('$name','$email','$cipher')";
$result = mysqli_query($connect,$insert);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Sign up</title>
</head>
<body style="background-color:white;">
<div class="container">
    
    <div class="row">
      <div class="col-lg-3"></div>
<div id="login-row" class="block col-lg-6  mt-4">

<form action="" method="POST" >
<h1 class="text-center text-black pt-5" style="font-size:50px">Sign Up</h1>
<br>
    <div class="form-group">     
    <label for="" class = "text-black" style="font-size:20px">User name</label>
    <input type="text"name="username" class="form-control"></inpot>
    </div>
    <br>
    <div class="form-group">
    <label for=""class = "text-black" style="font-size:20px">E-mail</label>
    <input type="text"name="email" class="form-control"></inpot>
    </div>
    <br>
    <div class="form-group">
    <label for="" class = "text-black" style="font-size:20px">Password</label>
    <input type="password"name="pass" class="form-control"></inpot>
    </div><br>
    <div >
    <button type="submit"  style="font-size:20px" class="btn btn-warning"  name="register">Register</button>
    <br><br><br>
   <p class = "text-black" style="font-size:20px"> you already have an account:</p>
                    
<button type="submit" class="btn btn-warning"  style="font-size:20px" name="login"><a href="http://localhost//fullproject/startwriting.php" style="color: black; text-decoration: none;">Login</a></button>  
<br><br>
</div>
                            
</form>
                    
<div class = "dol/lg-3">

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