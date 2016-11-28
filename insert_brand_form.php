<?php
include 'bootstrap.php';
?>
<script src='scripts/jquery-1.7.2.min.js' type='text/javascript'></script>
<script src='scripts/sfm_validatorv7.js' type='text/javascript'></script>
<div id='InsertBrand_errorloc' class='error_strings' style=''></div>
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
<h2 style="padding-left: 600px;">Insert Brand</h2>
<form name="InsertBrand" method="post" action="insert_brand.php">
    <label style="padding-left:640px;">Brand-Name:</label><input class="form-control" type="text" name="bname"><br>
    <label style="padding-left:660px;">Local:</label><input class="form-control" type="text" name="local"><br>
    <input class="btn btn-info" type="submit" name="submit" value="submit">
</form><script type='text/javascript'>
// <![CDATA[
var InsertBrandValidator = new Validator("InsertBrand");
InsertBrandValidator.addValidation("bname",{required:true,message:"Please fill in brand name"} );
InsertBrandValidator.addValidation("bname",{alnum_s:true,message:"The input for bname should be a valid alpha-numeric value"} );
InsertBrandValidator.addValidation("local",{required:true,message:"Please fill in local"} );
InsertBrandValidator.addValidation("local",{alpha_s:true,message:"The input for local should be a valid alphabetic value"} );

// ]]>
</script>
