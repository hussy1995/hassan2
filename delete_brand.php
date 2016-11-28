<?php
include 'connection.php';
$bid = $_REQUEST['a'];
$query = "delete from brand where bid =$bid";
$result = mysqli_query($link, $query);
if($result)
{
    header("location:home.php?pg=disb");
}
 else {
    header("location:home.php?pg=disb");    
}
?>