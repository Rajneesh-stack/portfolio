<?php
include 'connection.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['submit'])){
        if(empty($_POST['name'])){
            echo "<script>
            window.alert ('Name field is required');
            </script>";
        }
        elseif(empty($_POST['fathername'])){
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
            $id=$_POST['id'];
            $name=$_POST['name'];
            $fname=$_POST['fathername'];
            $mobile=$_POST['mobile'];
            $email=$_POST['email'];
            $address=$_POST['address'];
            $description=$_POST['description'];
           $sql="update formdata set name='$name',fathername='$fname',mobile='$mobile',email='$email',address='$address',description='$description'where id='$id'";
            if(mysqli_query($conn,$sql)){
                echo "
                   <script>
                        alert('data updated successful');
                        window.location.href='read.php';

                   </script>
                ";
            }
            else{
                echo "wrong";
            }

        }
       
    }
 }


?>

<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="select * from formdata where id ='$id'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $data=mysqli_fetch_assoc($result);
        print_r($data);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update data</title>
    <link rel="stylesheet" href="../css/portfolio.css">
</head>
<body>
<div class="form-body">
        <form action="" class="form" method="post">
            <!-- <pre> -->
            <h2>Send me your details</h2>
            <label for="name">Name :</label>
            <input type="hidden" value="<?= $data['id']?>" name="id">
            <input type="text"id="name" name="name" placeholder="Enter your name" value="<?= $data['name']?>"><br>
            <label for="fname">Father Name:</label>
            <input type="text"id="fname" name="fathername" placeholder="Enter your father name" value="<?= $data['fathername']?>"><br>
            <label for="mob">Mob :</label>
            <input type="number"id="mob" name="mobile" placeholder="Enter your Mobile no." value="<?= $data['mobile']?>"><br>
            <label for="email">Email:</label>
            <input type="mail"id="email" name="email" placeholder="Enter your email id" value="<?= $data['email']?>"><br>
            <label for="add">Address :</label>
            <input type="text"id="add" name="address" placeholder="Enter your address" value="<?= $data['address']?>"><br>
            <label for="dis"> Discription</label>       
            <textarea name="description" id="dis" placeholder="Enter some message"><?= $data['description']?></textarea>
            <input type="submit" class="inputtype" name='submit'value="update data">
            <!-- </pre> -->
        </form>
    </div>
</body>
</html>