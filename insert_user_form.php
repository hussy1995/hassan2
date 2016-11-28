<?php
include 'bootstrap.php';
?>
<script src='scripts/jquery-1.7.2.min.js' type='text/javascript'></script>
<script src='scripts/sfm_validatorv7.js' type='text/javascript'></script>
<div id='InsertUser_errorloc' class='error_strings' style=''></div>
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
<h3 style="padding-left: 635px;">Insert User</h3>
<form name="InsertUser" method="post" action="insert_user.php">
    <label style="padding-left: 650px;">User-Name:</label><input class="form-control" type="text" name="uname"><br>
    <input class="btn btn-info" type="submit" name="submit" value="submit">
</form><script type='text/javascript'>
// <![CDATA[
var InsertUserValidator = new Validator("InsertUser");
InsertUserValidator.addValidation("uname",{required:true,message:"Please fill in username"} );
InsertUserValidator.addValidation("uname",{alpha_s:true,message:"The input for uname should be a valid alphabetic value"} );

// ]]>
</script>
