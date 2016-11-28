<?php
include 'connection.php';
$result = mysqli_query($link, $query);
if($result)
{
    header("location:home.php?pg=disprob");
    header("location:home.php");
}
 else {
    return 0;
 }
?>