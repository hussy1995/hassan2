<?php
include 'connection.php';
include 'bootstrap.php';
$uid = $_REQUEST['s'];
$query = "select * from user where uid = $uid";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result);
?>

<script src='scripts/jquery-1.7.2.min.js' type='text/javascript'></script>
<script src='scripts/sfm_validatorv7.js' type='text/javascript'></script>
<div id='editUser_errorloc' class='error_strings' style=''></div>
<style type='text/css'>
.sfm_float_error_box
{
    font-family:Verdana;
    font-size:12px;
    color:#eeeeee;
    background:none repeat scroll 0 0 #333333;
    border:0;
    border-radius:4px;
    -moz-border-radius:4px;
    -webkit-border-radius:4px;
    box-shadow:0 0 4px #333;
    border:none;
}
.sfm_close_box
{
    font-family:Verdana;
    font-size:12px;
    color:#eeeeee;
}
</style>
<h3 style="padding-left: 640px;">Edit User</h3>
<form name="editUser" method="post" action="edit_user.php">
    <input class="form-control" type="hidden" name="uid" value="<?php echo $row['uid']?>">
    <label style="padding-left: 640px;">User-Name:</label><input class="form-control" type="text" name="uname" value="<?php echo $row['uname']?>"><br>
    <input class="btn btn-info" type="submit" name="submit" value="Edit">
</form><script type='text/javascript'>
// <![CDATA[
var editUserValidator = new Validator("editUser");
editUserValidator.addValidation("uname",{required:true,message:"Please fill in user name"} );
editUserValidator.addValidation("uname",{alpha_s:true,message:"The input for uname should be a valid alphabetic value"} );

// ]]>
</script>
