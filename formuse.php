<?php
include('connection.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>form validation</title>
</head>
<body>
    <div class="container">

    <form action="" method="post" class="form-group">
<label for="name"> Name</label>
<input type="text" name="name" class="form-control">
<label for="name"> age</label>
<input type="number" name="age" class="form-control">
<label for="name"> gender</label>
<input type="text" name="gender" class="form-control">
<input type="submit" name="save" class="btn btn-primary">

</form>

<?php
if(isset($_POST['save'])){
    echo "welcome to class <br>";
echo($_POST['name']) . "<br>";
echo($_POST['age']) . "<br>";
echo($_POST['gender']) . "<br>";
}

?>
</div>

    
</body>
</html>