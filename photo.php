<?php
include("./config/database.php");
include("./config/header.php");

if (isset($_POST["upload"])){
     
    // create desination folder to store all images in form 
    $destination = "photo/".basename($_FILES["image"]["name"]);

    $image= $_FILES["image"]["name"];
    $text = $_POST["text"];

    $insert = "INSERT INTO img (name, descrip) VALUES ('$image','$text')";
    $result = mysqli_query($connect , $insert);
    

    // store images to my folder 
    if (@move_uploaded_file($_FILES["image"]["tmp_name"] , $destination)){
      echo "uploaded";
     }  
    else {
         echo "not uploaded";
        }
         }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Photo</title>
</head>
<body style="background-color:white; ">
<br>


<div class="container">
<br><br><br><br>
  <div class="row">
    
    <div class="col-lg-3"></div>
    <div class="block col-lg-6 bg-black mt-3">
   

          <br >
    <form action="" method="POST" enctype="multipart/form-data">
    <h1  class = "text-secondary" style="font-size:50px">Upload Image</h1>
    <hr style=" border-width:3; color:yellow; background-color:warning">
    <br>
         <input type="file" name="image"><br>
<br>
         <textarea name="text" id="" cols="60" rows="4"  style="font-size:20px" placeholder="Description about this image"></textarea><br>
         <br>
         <input type="submit" style="font-size:20px" name="upload" class="btn btn-warning" value = "upload">
         <br><br>
    </form>
    </div>
    <div class="col-sm">
    <br><br><br>
<?php
    echo "<img src=".$destination." height=200 width=300 />"; ?>
      </div>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
