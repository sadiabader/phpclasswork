
<?php
include('connect.php');


$sql = "select * from `users`";
$fetch = mysqli_query($connection, $sql);
//print_r($data);
//print_r($data['id']);
//print_r($data['name']);
//print_r($data['age']);
//print_r($data['gender']);

?>
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
    
<table class="table table-borderd text-center">
<thead class="table table-dark">
    <tr>

<th>Id</th>
<th>Name</th>
<th>Age</th>
<th>Gender</th>
<th>update</th>
<th>Delete</th>

    </tr>
</thead>
   <tbody>
<?php
while($data = mysqli_fetch_assoc($fetch)){
    ?>
    <tr>
<td><?php echo $data['id']; ?></td>
<td><?php echo $data['name']; ?></td>
<td><?php echo $data['age']; ?></td>
<td><?php echo $data['gender']; ?></td>
<td> <a href="update.php?id=<?php echo $data['id'];?>"class="btn btn-warning"> Update </a></td>
<td> <a href="delete.php?id=<?php echo $data['id'];?>"class="btn btn-warning"> Delete </a></td>
    </tr>
    <?php
}
?>
   </tbody>

</table>
</body>
</html>