<?php
include 'bootstrap.php';
?>
<script src='scripts/jquery-1.7.2.min.js' type='text/javascript'></script>
<script src='scripts/sfm_validatorv7.js' type='text/javascript'></script>
<div id='InsertCat_errorloc' class='error_strings' style=''></div>
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
<h3 style="padding-left: 610px;">Insert Category</h3>
<form name="InsertCat" method="post" action="insert_category.php">
    <label style="padding-left: 640px;">Category-Name:</label><input class="form-control" type="text" name="catname"><br>
    <input class="btn btn-info" type="submit" name="submit" value="submit">
</form><script type='text/javascript'>
// <![CDATA[
var InsertCatValidator = new Validator("InsertCat");
InsertCatValidator.addValidation("catname",{required:true,message:"Please fill in category name"} );
InsertCatValidator.addValidation("catname",{alpha_s:true,message:"The input for catname should be a valid alphabetic value"} );

// ]]>
</script>
