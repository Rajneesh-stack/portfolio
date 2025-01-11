<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/portfolio.css">
    <link rel="stylesheet" href="./css/responsiv.css">
    <link href="./css/aos.css" rel="stylesheet">
    
    <link rel="stylesheet" href="./css/font-awesome.min.css">
</head>
<body>
    <!-- Navbar section start -->
    <?php
            include "navbar.php"
            ?>

 <!-- Navbar section start -->

  <!-- <form > -->

  <?php

  /////form validation in php
  include "connection.php";
     if($_SERVER['REQUEST_METHOD']=='POST'){
        if(isset($_POST['submit'])){
            if(empty($_POST['name'])){
                echo "<script>
                window.alert ('Name field is required');
                </script>";
            }
            elseif(empty($_POST['fname'])){
                echo "<script>
                window.alert (' father Name field is required');
                </script>"; 
            }
            elseif(empty($_POST['mobile'])){
                echo "<script>
                window.alert ('mobile no  is required');
                </script>"; 
            }
            elseif(empty($_POST['email'])){
                echo "<script>
                window.alert ('email is required');
                </script>"; 
            }
            elseif(empty($_POST['address'])){
                echo "<script>
                window.alert ('address is required');
                </script>";
            }
            elseif(empty($_POST['description'])){
                echo "<script>
                window.alert ('desceription is required');
                </script>";
            }

            //// inserting data in database
            else{
                $name=$_POST['name'];
                $fname=$_POST['fname'];
                $mobile=$_POST['mobile'];
                $email=$_POST['email'];
                $address=$_POST['address'];
                $description=$_POST['description'];
                $sql="insert into formdata(name,fathername,mobile,email,address,description)values('$name','$fname','$mobile','$email','$address','$description')";
                if(mysqli_query($conn,$sql)){
                    echo "
                       <script>
                            alert('data inserted successful');
                            window.location.href='index.php';
                       </script>
                    ";
                }
                else{
                    echo "wrong";
                }

            }
           
        }
     }
  

   /////form validation in php
  ?>
    <div class="form-body">
        <form action="" class="form" method="post">
            <!-- <pre> -->
            <h2>Send me your details</h2>
            <label for="name">Name :</label><br>
            <input type="text"id="name" name="name" placeholder="Enter your name"><br>
            <label for="fname">Father Name:</label><br>
            <input type="text"id="fname" name="fname" placeholder="Enter your father name"><br>
            <label for="mob">Mob :</label><br>
            <input type="number"id="mob" name="mobile" placeholder="Enter your Mobile no."><br>
            <label for="email">Email:</label><br>
            <input type="mail"id="email" name="email" placeholder="Enter your email id"><br>
            <label for="add">Address :</label><br>
            <input type="text"id="add" name="address" placeholder="Enter your address"><br>
            <label for="dis"> Discription</label><br>
            <textarea name="description" id="dis" placeholder="Enter some message"></textarea><br>
            <input type="submit" class="inputtype" name='submit'>
            <!-- </pre> -->
        </form>
    </div>
 <!-- <form > -->

                <!-- footer section start -->
                <?php
               include "footer.php"
               ?>

                  <!-- footer section start -->
</body>
</html>
