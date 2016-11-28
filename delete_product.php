<?php
include 'connection.php';
$pid = $_REQUEST['a'];
$query = "delete from products where pid =$pid";
$result = mysqli_query($link, $query);
if($result)
{
   header("location:home.php?pg=dispro");
}
 else {
   header("location:home.php?pg=dispro");
}
?>