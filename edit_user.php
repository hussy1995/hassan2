<?php
include 'connection.php';
$uid = $_REQUEST['uid'];
$uname = $_REQUEST['uname'];
$query = "update user set uname='$uname'";
$result = mysqli_query($link, $query);
if($result)
{
    header("location:home.php?pg=disu");
}
else
{
     header("location:home.php?pg=disu");
}
?>