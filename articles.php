<?php
include("./config/database.php");
include("./config/header.php"); ?>
<br><br>

<h1 class="text-center text-black">Daily Essays </h1>

<?Php
$select = "SELECT * FROM posts ";
$result = mysqli_query($connect, $select); 
if (isset($result)){
    while($row = mysqli_fetch_array($result)){ 
        ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>articles</title>
    </head>
    <body style="background-color:white; ">
        <div class="container" >
           <div class="row">
               <div class="col-lg-3"></div>
               <div class="block col-lg-6 bg- white mt-3">
               <hr>
<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"width="24" height="24"viewBox="0 0 172 172"style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#f1c40f"><path d="M0,28.66667v100.33333h7.16667c56.68833,0 71.66667,9.38117 71.66667,14.33333h14.33333c0,-4.95217 14.97833,-14.33333 71.66667,-14.33333h7.16667v-100.33333h-7.16667c-41.54479,0 -67.29351,4.59801 -78.83333,14.20736c-11.53982,-9.60935 -37.28854,-14.20736 -78.83333,-14.20736zM14.33333,43.05599c50.79733,0.7525 64.5,9.53301 64.5,14.27734h14.33333c0,-4.74433 13.70267,-13.52484 64.5,-14.27734v71.66666c-37.3123,0.50261 -60.78451,5.07703 -71.66667,14.09538c-10.88215,-9.01835 -34.35437,-13.59277 -71.66667,-14.09538zM78.83333,71.66667v14.33333h14.33333v-14.33333zM78.83333,100.33333v14.33333h14.33333v-14.33333z"></path></g></g></svg>
   
   <h1 > <strong><?php   echo $row['title'];?></strong></h1>
   <p  style="font-size:20px" ><?php   echo $row['content'];?></p>
   <a href="readmore.php?id=<?php      echo $row['id']; ?>"><button style="font-size:20px" class="btn btn-warning">read more </button></a> 
   
   <br><br>
   
     
    </div>
    <div class="col-sm-3">
      
    </div>
  </div>
</div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
        </html>
    
    <?php 
    }


}

?>
<?php 
include("./config/footer.php");?>