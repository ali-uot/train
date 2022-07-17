<?php
include('db/config.php');
$id = $_GET['id'];
$select = "select * from users where id='$id'";
$query = mysqli_query($connect, $select);
while($row = mysqli_fetch_array($query)){
    echo '<center>'.$row['name'].'</center><br>';
}
?>