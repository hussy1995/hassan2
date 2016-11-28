<?php
include 'connection.php';
$rdate=$_REQUEST['rdate'];
$rating=$_REQUEST['rating'];
$uid=$_REQUEST['user'];
$pbid=$_REQUEST['productbrand'];

$query ="insert into rating (rdate,rating,uid,pbid) values('$rdate','$rating','$uid','$pbid')";
$result = mysqli_query($link, $query);
if($result)
{
header("location:home.php?pg=disrat");

}
 else {
header("location:home.php?pg=disrat");

 }
?>