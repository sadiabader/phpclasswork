<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

<?php
include('connect.php');
?>

<div class="container">

<form action="index.php" method="post" class="form-group">
<label for="name"> id</label>
<input type="text" name="id" class="form-control">
<label for="name"> name</label>
<input type="text" name="name" class="form-control">
<label for="name"> age</label>
<input type="number" name="age" class="form-control">
<label for="name"> gender</label>
<input type="text" name="gender" class="form-control">
<input type="submit" name="save" class="btn btn-primary">

</form>
<?php

if(isset($_POST['save'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];

    $query = "INSERT INTO `users` (`id`, `name`, `age`, `gender`) VALUES ('$id', '$name', '$age', '$gender')";

    $result = mysqli_query($connection, $query);
    if(!$result){
        echo "query failed";
    }
    header('Location:http://localhost:82/classwork_php/crud/userdata.php');
}

?>
</div>
</body>
</html>