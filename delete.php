<?php
////delete data from database
include "connection.php";
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="delete from formdata where id=$id";
    if(mysqli_query($conn,$sql)){
        echo '<script>
        window.alert(" data deleted successfully ");
        window.location.href="read.php";
        </script>';
    }
    else{
        header('Location:read.php');
    }
}
?>