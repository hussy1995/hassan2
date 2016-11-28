<?php
include 'connection.php';
$database="brandmanagement";
$query="create database if not exists $database";
$result=  mysqli_query($link, $query);
if($result)
    echo 'The Database '.$database.' has been successfully created';
else {
    echo 'Error while creating '.$database.  mysqli_error($link);    
}
$link=  mysqli_connect($host, $user, $password, $database);
$table="category";
$query="create table if not exists $table(catid int(11) primary key not null auto_increment, catname varchar(100))";
$result=  mysqli_query($link, $query);
if($result)
    echo 'The table '.$table.' has been successfully created...';
else 
    echo 'Error while creating '.$table.  mysqli_error($link);

$table="brand";
$query="create table if not exists $table(bid int(11) primary key not null auto_increment, bname varchar(100), local varchar(100))";
$result=  mysqli_query($link, $query);
if($result)
    echo 'The table '.$table.' has been successfully created...';
else 
    echo 'Error while creating '.$table.  mysqli_error($link);
$table="user";
$query="create table if not exists $table(uid int(11) primary key not null auto_increment, uname varchar(100))";
$result=  mysqli_query($link, $query);
if($result)
    echo 'The table '.$table.' has been successfully created...';
else 
    echo 'Error while creating '.$table.  mysqli_error($link);

$table="products";
$query="create table if not exists $table(pid int(11) primary key not null auto_increment, pname varchar(100), catid int(11), FOREIGN KEY(catid) REFERENCES category(catid))";
$result=  mysqli_query($link, $query);
if($result)
    echo 'The table '.$table.' has been successfully created...';
else 
    echo 'Error while creating '.$table.  mysqli_error($link);

$table="productbrand";
$query="create table if not exists $table(pbid int(11) primary key not null auto_increment, img varchar(200), price varchar(100), features varchar(100), pid int(11), bid int(11), FOREIGN KEY(pid) REFERENCES products(pid), FOREIGN KEY(bid) REFERENCES brand(bid))";
$result=  mysqli_query($link, $query);
if($result)
    echo 'The table '.$table.' has been successfully created...';
else 
    echo 'Error while creating '.$table.  mysqli_error($link);

$table="rating";
$query="create table if not exists $table(rid int(11) primary key not null auto_increment, rdate date, rating varchar(100), uid int(11), pbid int(11), FOREIGN KEY(uid) REFERENCES user(uid), FOREIGN KEY(pbid) REFERENCES productbrand(pbid))";
$result=  mysqli_query($link, $query);
if($result)
    echo 'The table '.$table.' has been successfully created...';
else 
    echo 'Error while creating '.$table.  mysqli_error($link);
?>