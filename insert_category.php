<?php
include 'connection.php';
$catname=$_REQUEST['catname'];
$query ="insert into category (catname) values('$catname')";
$result = mysqli_query($link, $query);
if($result)
{
   header("location:home.php?pg=discat");
}
 else {
    header("location:home.php?pg=discat");   
}
?>