<?php
include 'connection.php';
$catid = $_REQUEST['a'];
$query = "delete from category where catid =$catid";
$result = mysqli_query($link, $query);
if($result)
{
   header("location:home.php?pg=discat");
}
 else {
    header("location:home.php?pg=discat");
}
?>