<?php
include 'connection.php';
$uid = $_REQUEST['a'];
$query = "delete from user where uid =$uid";
$result = mysqli_query($link, $query);
if($result)
{
   header("location:home.php?pg=disu");
}
 else {
   header("location:home.php?pg=disu");    
}
?>