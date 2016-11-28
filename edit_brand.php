<?php
include 'connection.php';
$bid = $_REQUEST['bid'];
$bname = $_REQUEST['bname'];
$local = $_REQUEST['local'];
$query = "update brand set bname='$bname',local = '$local'";
$result = mysqli_query($link, $query);
if($result)
{
    header("location:home.php?pg=disb");
}
else
{
    header("location:home.php?pg=disb");
}
?>