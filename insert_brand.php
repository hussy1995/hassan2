<?php
include 'connection.php';
$bname=$_REQUEST['bname'];
$local=$_REQUEST['local'];
$query ="insert into brand (bname,local) values('$bname','$local')";
$result = mysqli_query($link, $query);
if($result)
{
   header("location:home.php?pg=disb");
}
 else {
    header("location:home.php?pg=disb");  
}
?>