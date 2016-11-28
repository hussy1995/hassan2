<?php
include 'connection.php';
$pbid = $_REQUEST['pbid'];
$img = $_REQUEST['img'];
$price = $_REQUEST['price'];
$features = $_REQUEST['features'];
$pid = $_REQUEST['product'];
$bid = $_REQUEST['brand'];

$query = "update productbrand set img='$img',price='$price',features='$features',pid='$pid',bid='$bid'";
$result = mysqli_query($link, $query);
if($result)
{
    header("location:home.php?pg=disprob");
}
else
{
    header("location:home.php?pg=disprob");
}
?>