<?php

session_start();
header('location:signin.php');

$username = 'root';
$password = "";
$server = 'localhost';
$database = 'signup';

 $con = mysqli_connect($server, $username);
 mysqli_select_db($con, $database);

            $gmail = $_POST['mail'];
            $pd = $_POST['pwd'];

            $q = (" SELECT * FROM `signin` WHERE email =  '$gmail' && password = '$pd' ");

            $res = mysqli_query($con, $q);
            if($res == TRUE){
                $num = mysqli_num_rows($res);
                if($num == TRUE){
                echo"duplicate data";
                 }else{
              $qy = (" INSERT INTO `signin`(`email`, `password`) VALUES ('$gmail' ,'$pd') ");
                mysqli_query($con, $qy);
           
            }
        }
            
              

             


?>