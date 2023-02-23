<?php 
include './config/inc.php';

if(isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM crud WHERE id=$id";
    $result = mysqli_query($con, $sql);
    if($result){
        header('Location: display.php');
    }else{
        die('Connect_Error:'.($con -> connect_error));
    }
}


?>