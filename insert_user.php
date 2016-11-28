<?php
include 'connection.php';
$uname=$_REQUEST['uname'];
$query ="insert into user (uname) values('$uname')";
$result = mysqli_query($link, $query);
if($result)
{
     header("location:home.php?pg=disu");
}
 else {
     header("location:home.php?pg=disu");    
}
?>