<?php
include("./config/database.php");
include("./config/header.php");

if (isset($_GET["btnsearch"])){
    $filter = $_GET['search'];
    $filterselect = "SELECT * FROM posts WHERE CONCAT (title,content) LIKE '%$filter%' ";
    $res = mysqli_query($connect , $filterselect);
    
    if(mysqli_num_rows($res)>0 ){
        foreach ($res as $items) {  ?>
        <div class="container">
 <br><br><br>
    <div class="row">
      <div class="col-lg-4"></div>

      <div  class="block col-lg-12 mt-4">

<form action="">
        <h1 class="text-center text-black pt-5"><?php   echo $items['title'];?></h1>
        <p class="text-center text-black pt-5"> <?php   echo $items['content'];?></p>
        </form>   
<?Php
                                 }
    }
    else {
        echo "not found";
    }

}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Search</title>
</head>
<body style="background-color:white;">

<div class="container">
   
    <div class="row">
      <div class="col-lg-4"></div>
<div id="login-row" class="block col-lg-12  mt-4">
<h1 class=" text-black pt-5" style="font-size:50px">Search</h1>
<br>
<form action="" method="GET">
<label for="exampleFormControlInput1" class = " text-black" style="font-size:20px">what are you looking for ? </label>
<br> <br>
<input type="text"  id="exampleFormControlInput1"  name ="search" value="<?php if(isset($_GET['search'])){ echo $_GET['search'];}?>">
               
<button type="submit" class="btn btn-warning" name="btnsearch" style="font-size:20px">search</button>
              
                </div>    
<br>

</form>

    </div>
    <div class="col-sm">
      
    </div>
  </div>
</div> 
<br><br>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
