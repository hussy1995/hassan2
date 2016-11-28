<?php
include 'connection.php';
$pname=$_REQUEST['pname'];
$catid=$_REQUEST['category'];
$query ="insert into products (pname,catid) values('$pname','$catid')";
$result = mysqli_query($link, $query);
if($result)
{
   header("location:home.php?pg=dispro");
}
 else {
  header("location:home.php?pg=dispro");
}
?>