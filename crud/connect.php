<?php

$connection = mysqli_connect("localhost", "root","","user_data");

if($connection){
    echo"connected";}
    else{ 
  die("connection error");
    }



?>