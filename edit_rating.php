<?php
include 'connection.php';
$rid = $_REQUEST['rid'];
$rdate = $_REQUEST['rdate'];
$rating = $_REQUEST['rating'];
$uid = $_REQUEST['user'];
$pbid = $_REQUEST['productbrand'];

$query = "update rating set rdate='$rdate',rating='$rating',uid='$uid',pbid='$pbid'";
$result = mysqli_query($link, $query);
if($result)
{
   header("location:home.php?pg=disrat");
}
else
{
header("location:home.php?pg=disrat");

}
?>