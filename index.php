<?php

include ("connect.php");
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];


    $sql = "INSERT INTO `crud`(name,email,mobile,password)
    VALUES ('$name','$email','$mobile','$password')";
    $result = mysqli_query($con,$sql);
    if($result){
        // echo "Data inserted success" ;
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CRUD PHP SYSTEM </title>
</head>
<body>
    <form action="index.php" method = "post">

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
  <div>
    <button>
        <input type="submit" name = "submit" placeholder = "Submit" >
    </button>
  </div>

   </div>

    </form>
</body>
</html>