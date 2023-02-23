<?php include './config/inc.php'; ?>
<?php
 /* if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

   $sql = "insert into 'crud' (name, email, mobile, password) values('$name',
    '$email', '$mobile', '$password')";

    if(mysqli_query($con, $sql)){
        echo "data uploaded succesfully";
    }
}else{
    die(mysqli_error($con));
} */ ?>

<?php
$name = $email = $mobile = $password = "";
$nameErr = $emailErr = $mobileErr = $passwordErr ="";

if(isset($_POST['submit'])){

  if(empty($_POST['name'])){
    $nameErr = "Name is required";
  }else{
    $name = filter_input(INPUT_POST, 'name', 
    FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  }

  if(empty($_POST['email'])){
    $emailErr = "Email is required";
  }else{
    $email = filter_input(INPUT_POST, 'email', 
    FILTER_SANITIZE_EMAIL);
  }

  if(empty($_POST['mobile'])){
    $mobileErr = "mobile number is required";
  }else{
    $mobile = filter_input(INPUT_POST, 'mobile', 
    FILTER_SANITIZE_NUMBER_INT);
  }

  if(empty($_POST['password'])){
    $passwordErr = "password is required";
  }else{
    $password = filter_input(INPUT_POST, 'password', 
    FILTER_SANITIZE_ENCODED);
  }


  if(empty($nameErr) && empty($emailErr) && empty($mobileErr) && empty($passwordErr)){
    $sql = "INSERT INTO crud (name, email, mobile, password) VALUES 
    ('$name', '$email', '$mobile', '$password')"; 

       if(mysqli_query($con, $sql)) {
      header('Location: display.php');
    }else{
      echo "Error:".mysqli_error($con);
    }
  }
}

?>


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


    <div class="div container my-5">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control <?php echo $nameErr ? 'is-invalid' : null; ?>" 
                 placeholder="Enter your name" name="name"
                  autocomplete="off">
                  <div class="invalid-feedback">
                    <?php echo $nameErr; ?>
                  </div>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email"   class="form-control <?php echo $emailErr ? 'is-invalid' : null; ?>"
                 placeholder="Enter your email" name="email" 
                autocomplete="off">
                <div class="invalid-feedback">
                    <?php echo $emailErr; ?>
                  </div>
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="mobile" class="form-control <?php echo $mobileErr ? 'is-invalid' : null; ?>"
                 placeholder="Enter your mobile number" name="mobile"
                  autocomplete="off">
                  <div class="invalid-feedback">
                    <?php echo $mobileErr; ?>
                  </div>
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control <?php echo $passwordErr ? 'is-invalid' : null; ?>"
                 placeholder="Enter your password"  name="password"
                  autocomplete="off">
                  <div class="invalid-feedback">
                    <?php echo $passwordErr; ?>
                  </div>
            </div>
            <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
        </form>
    </div>

</body>

</html> 