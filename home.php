<?php

include("./config/database.php");
include("./config/header.php");


if (isset($_POST["btnsend"])){
$ti= $_POST["title"];
$cont = $_POST["content"];

$insert = "INSERT INTO posts (title,content) VALUES ('$ti' , '$cont')";
$result = mysqli_query($connect,$insert);





}


  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
        
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body style= background-image: url('desk-gfd9a0d871_1920.jpg');>





<div class="container">
  
  <div class="row">
    
    <div class="col-lg-3"></div>
    <div class="block col-lg-6  mt-3">
        <form action="" method="POST" >
        <div class="mb-3">
          <br >
<h1 style="font-size:50px"  class = "text-center text-black">Article</h1>
<p class = "text-center text-black" style="font-size:20px">to publish your essays </p>
      <hr style=" border-width:3; color:yellow; background-color:warning">
  <label for="exampleFormControlInput1" class="form-label text-black" style="font-size:20px">Title</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="enter the title here" name = "title">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label text-black"style="font-size:20px">Content</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content" ></textarea>
<br>



</div> 


    

    <button class="btn btn-warning" type="submit" name="btnsend" style="font-size:20px">post</button>
    
    <br><br> <br>
</form>

</div>

    
<div class = "dol/lg-3">
    </div>
    
  </div>
</div>


<br><br><br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>

