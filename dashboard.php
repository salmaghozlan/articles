<?php
include("./config/database.php");
$select = "SELECT * FROM users ";
$result = mysqli_query($connect,$select);

//admin can add items/users:  
if (isset($_POST["adduser"])){
    $id = $_POST["idinput"];
    $username=$_POST["userinput"];
    $email = $_POST["emailinput"];
    $pass = $_POST["passinput"];

    $select = "INSERT INTO users (id, username, email ,pass) VALUES ('$id','$username', '$email','$pass')";
    $result1 = mysqli_query($connect , $select);
}
// admin can delete user/item :
if(isset($_POST["idinput"])){
    $id = $_POST["idinput"];
}
if(isset($_POST["userinput"])){
    $user = $_POST["userinput"];
}
if(isset($_POST["emailinput"])){
    $email = $_POST["emailinput"];
}
if(isset($_POST["passinput"])){
    $pass = $_POST["passinput"];
}
$delete = " ";
if (isset($_POST["delete"])){
    $delete = "DELETE FROM users WHERE id = '$id' ";
    $result2 = mysqli_query($connect , $delete); 
}

//admin can edit user data : 
if(isset($_POST["modify"])){
    $modify = "UPDATE users SET username ='$user' , email = '$email' , pass = '$pass' WHERE id = '$id' " ; 
    $result3 = mysqli_query($connect , $modify);
}


//admin can search for user : 
if (isset($_GET["btnsearch"])){
    $filter = $_GET['search'];    
    $filterselect = "SELECT * FROM users WHERE CONCAT (id ,username , email ,pass) LIKE '%$filter%'";
    $res = mysqli_query($connect , $filterselect);
        
     if(mysqli_num_rows($res)>0 ){
         foreach ($res as $items) {  ?>
    <table border="2" class="table table-dark table-striped" >

        <th>id</th>
        <th>username</th>
        <th>email</th>
        <th>password</th>
<tr>
        <td>   <p><?php    echo $items['id'];?></p></td> 
        <td>   <p><?php    echo $items['username'];?></p>  </td> 
        <td>   <p><?php    echo $items['email'];?></p> </td> 
        <td>  <p><?php    echo $items['pass'];?></p> </td> 
          
        </tr>
        </table>  
<?Php
    } } else { echo "not found"; } }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> 

    <title>Dashboard</title>
</head>
<body  style="background-color:white;" >
<div class="container">
    <div class="row">
      <div class="col-lg-2"></div>
<div id="login-row" class="block col-lg-8 bg-black mt-2bbc">
<h1 class = "text-center text-secondary">welcome you in dashboard page</h1>

<form action="" method="get">
</br>
<button type="submit" class="btn btn-warning" name="btnsearch">search</button>


<input type="text"   name ="search" value="<?php if(isset($_GET['search'])){ echo $_GET['search'];}?>">

</form>
<br>
<form action="" method="POST">
<input type="submit" value= "add-users"   class="btn btn-warning"  name="adduser">
<input type="submit" value="delete-users" class="btn btn-warning"  name ="delete">
<input type="submit" value ="modify-users"class="btn btn-warning" name = "modify">
<br><br>


<label for="" class = "text-center text-secondary">ID:</label><br>
<input type="number" id = "id" name="idinput" class="form-control" ><br>
<label for="" class = "text-center text-secondary">User name:</label><br>
<input type="text " id ="usernameid" name="userinput" class="form-control"><br>
<label for=""class = "text-center text-secondary">E-mail:</label><br>
<input type="email" id = "emailid" name= "emailinput" class="form-control"><br>
<label for="" class = "text-center text-secondary">Password</label><br>
<input type="password" id ="pass"  name="passinput" class="form-control"><br>
<br><br>


<table border = "2" id = "tableid" class="table table-dark table-striped">
<tr >
    <th>id</th>
    <th>username</th>
    <th>email</th>
    <th>password</th>
</tr>

<?php 
include("./config/database.php");

while(@$row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>"  .$row["id"]."</td>";
    echo "<td>"  .$row["username"]."</td>";
    echo "<td>"  .$row["email"]."</td>";
    echo "<td>"  .$row["pass"]."</td>";
    echo "</tr>";
} 
 ?>

</table>
</form>
<script>
var test = document.getElementById("tableid");
for (var x = 1 ; x < test.rows.length ;x++){
    test.rows[x].onclick = function(){
    document.getElementById("id").value= this.cells[0].innerHTML;
    document.getElementById("usernameid").value=this.cells[1].innerHTML;
    document.getElementById("emailid").value=this.cells[2].innerHTML;
    document.getElementById("pass").value=this.cells[3].innerHTML;
}}
</script>




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