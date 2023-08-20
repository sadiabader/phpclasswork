<?php
include('connect.php');

//print_r($_POST)


$ID = $_POST['id'];
$Name= $_POST['name'];
$Age = $_POST['age'];
$Gender = $_POST['gender'];

$subdataquery = "update `users` set name = '$Name', age = '$Age', gender = '$Gender' where id = '$ID'";
$result = mysqli_query($connection, $subdataquery);

if(!$result){
    die("query failed");
}

header('Location:http://localhost:82/classwork_php/crud/userdata.php')
?>