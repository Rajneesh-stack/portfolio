<?php
//// data base connection
$conn=mysqli_connect('localhost','root','','portfolio');
if($conn){
    echo "";
}
else{
    echo "something wemt wrong";
}
?>