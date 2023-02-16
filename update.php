<?php

include ("connect.php");


if(isset($_GET['updateid'])){
    $id = $_GET['updateid'];
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    

    $sql = "UPDATE `crud` set id = $id ,name ='$name',email= '$email',mobile= '$mobile',password= '$password ' WHERE id=$id";
    $result = mysqli_query($con,$sql);
    if($result){
       header('location:display.php'); 
    }else{
        die(mysqli_error($con));
    }

}
}
else
{die(mysqli_error($con));}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> UPDATE </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>


    <form  method = "post">

   <div class="container">
   <div>
    <label >Name :</label>
    <input type="text" name = "name" placeholder ="Name"></div>
   <div>
    <label>email :</label>
    <input type="email" name = "email" placeholder ="Email"></div>
   <div>
     <label >mobile :</label>
    <input type="mobile" name ="mobile" placeholder = "Mobile"></div>
  <div> 
     <label >password :</label>
    <input type="password" name = "password" placeholder ="Password">
  </div>

    <button class = "btn btn-primary" name= "submit"> Update </button>

   </div>

    </form>


</body>


</html>