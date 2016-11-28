<?php
include 'connection.php';
$pid = $_REQUEST['pid'];
$pname = $_REQUEST['pname'];
$catid = $_REQUEST['category'];
$query = "update products set pname='$pname',catid='$catid'";
$result = mysqli_query($link, $query);
if($result)
{
   header("location:home.php?pg=dispro");
}
else
{
    header("location:home.php?pg=dispro");
}
?>