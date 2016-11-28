<?php
include 'connection.php';
$img=$_REQUEST['img'];
$price=$_REQUEST['price'];
$features=$_REQUEST['features'];
$pid=$_REQUEST['product'];
$bid=$_REQUEST['brand'];

$query ="insert into productbrand (img,price,features,pid,bid) values('$img','$price','$features','$pid','$bid')";
$result = mysqli_query($link, $query);
if($result)
{
   header("location:home.php?pg=disprob");
}
 else {
   header("location:home.php?pg=disprob");  
}
?>