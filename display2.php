<?/*php include './config/inc.php'; ?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">


    <title>Crud Operation</title>
</head>

<body>

<?php 
$sql = 'SELECT * FROM crud';
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

    <div class="container">
        <button class="btn btn-primary my-5">
            <a href="user.php" class="text-light">Add User</a>
        </button>
        <table class="table table-striped">
        <thead>
                <tr>
                    <th scope="col">S/N</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>


  <tbody>
  <?php foreach($row as $item): ?>
    <tr>
      <th scope="row"> <?php echo $item['id']; ?></th>
      <td> <?php echo $item['name']; ?></td>
      <td> <?php echo $item['email']; ?></td>
      <td> <?php echo $item['mobile']; ?></td>
     <td> <?php echo $item['password']; ?></td>
     <td> 
     <button class="btn btn-primary"><a href="update.php" 
     class="text-light"></a>Update</button>
    <button class="btn btn-danger"><a href="delete.php? delteteid='.$id.'" 
    class="text-light">Delete</a></button>  
    </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</body>
</html>
