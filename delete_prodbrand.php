<?php
include 'connection.php';
$pbid = $_REQUEST['a'];
$query = "delete from productbrand where pbid =$pbid";
$result = mysqli_query($link, $query);
if($result)
{
    header("location:home.php?pg=disprob");
}
 else {
    header("location:home.php?pg=disprob");   
}
?>