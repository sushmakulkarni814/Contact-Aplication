<?php 
session_start();

header('location:info.php');

$username ='root';
$password ="";
$server ='localhost';
$database = 'signup';

$con = mysqli_connect($server, $username);
mysqli_select_db($con,$database);
    
      $name = $_POST['E_Name'];
      $phone = $_POST['E_Phone'];
      $email = $_POST['Email'];

      $q = (" SELECT  `Name`, `Phone_Number`, `Email` FROM `info` WHERE  Name='$name' && Phone_Number='$Phone' && Email='$email' ");

      $res = mysqli_query($con,$q);
        if( mysqli_num_rows($res) == TRUE)
      {
        echo "duplicate data";
      }
      else{
        $qy = (" INSERT INTO `info`( `Name`, `Phone_Number`, `Email`) VALUES ( '$name', '$phone', '$email')");
        mysqli_query($con,$qy);
      }
    
    



 ?>