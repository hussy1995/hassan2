<?php
include 'connection.php';
$rid = $_REQUEST['a'];
$query = "delete from rating where rid =$rid";
$result = mysqli_query($link, $query);
if($result)
{
   header("location:home.php?pg=disrat");
}
 else {
   header("location:home.php?pg=disrat");    
}
?>