<?php

session_start();

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
                    $_SESSION['username'] =  $gmail;
                    header('location:info.php');
                 }else{
                    header('location:signin.php');

                }
                        
                    }
            
              

             


?>