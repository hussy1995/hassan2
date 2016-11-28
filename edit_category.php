<?php
include 'connection.php';
$catid = $_REQUEST['catid'];
$catname = $_REQUEST['catname'];
$query = "update category set catname='$catname'";
$result = mysqli_query($link, $query);
if($result)
{
   header("location:home.php?pg=discat");
}
else
{
   header("location:home.php?pg=discat");
}
?>