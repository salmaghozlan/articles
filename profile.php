<?php 
include("./config/database.php");

include("./config/header.php");
include("./startwriting.php");
?>

<table border = "2" id = "tableid" class="table table-dark table-striped">
<tr >
    <th>id</th>
    <th>username</th>
    <th>email</th>
    <th>password</th>
</tr>
<?php
if(isset($_POST["login"])){

    $email = @$_POST["email"];
    $pass = @$_POST["pass"];
    $decreption = md5(md5(md5($pass)));
    
    $compare = "SELECT * FROM users WHERE email='$email' and pass = '$decreption' ";
    
    $result = mysqli_query($connect,$compare);
    
    $row = mysqli_fetch_row($result);
    
    if ($row>0){
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["email"]. "<br>";
    }
    else{
        echo'user not found ';
    }}

   
    
  
  
  
  
  
  ?>
 </table>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Profile</title>
    
</head>
<body>
    


<br><br><br>













<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>