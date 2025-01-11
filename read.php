<table style="border: 1px solid red;" collspan="1" rowsapn="2">
   
    <tr>
        <th style="border: 1px solid black;">id</th>
        <th style="border: 1px solid black;">Name</th>
        <th style="border: 1px solid black;">Father name</th>
        <th style="border: 1px solid black;">mobile</th>
        <th style="border: 1px solid black;">email</th> 
        <th style="border: 1px solid black;">address</th>
        <th style="border: 1px solid black;">description</th>
        <th style="border: 1px solid black;"> Action </th>
        <th style="border: 1px solid black;">add new data</th>
        <th style="border: 1px solid black;">update data</th>
    </tr>

<?php
include "connection.php";
$sql= "select * from formdata";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($record=mysqli_fetch_assoc($result)){
        ?>
        <tr>
        <td style="border: 1px solid black;"><?= $record['id']?></td>
        <td style="border: 1px solid black;"><?= $record['name']?></td>
        <td style="border: 1px solid black;"><?= $record['fathername']?></td>
        <td style="border: 1px solid black;"><?= $record['mobile']?></td>
        <td style="border: 1px solid black;"><?= $record['email']?></td>
        <td style="border: 1px solid black;"><?= $record['address']?></td>
        <td style="border: 1px solid black;"><?= $record['description']?></td>
        <td style="border: 1px solid black;"> <a href="delete.php?id=<?= $record['id']?>">delete</a></td>
        <td style="border: 1px solid black;"><a href="contact.php">add new data</a></td>
        <td style="border: 1px solid black;"><a href="update.php?id=<?= $record['id']?>">update data</a></td>
        
<?php
    }
}
?>
</table>
