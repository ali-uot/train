<?php
include('db/config.php');
$select = "select * from users ";
$query = mysqli_query($connect, $select);
while($row = mysqli_fetch_array($query)){
    echo '<center>'.$row['name'].'</center><br>';
}
?>