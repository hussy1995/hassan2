<?php
include 'connection.php';
include 'bootstrap.php';
$bid = $_REQUEST['s'];
$query = "select * from brand where bid = $bid";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result);
?>

<script src='scripts/jquery-1.7.2.min.js' type='text/javascript'></script>
<script src='scripts/sfm_validatorv7.js' type='text/javascript'></script>
<div id='editBrand_errorloc' class='error_strings' style=''></div>
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
<h3 style="padding-left: 630px;">Edit Brand</h3>
<form name="editBrand" method="post" action="edit_brand.php">
    <input type="hidden" name="bid" value="<?php echo $row['bid']?>">
    <label style="padding-left: 640px;">Brand-Name:</label><input class="form-control" type="text" name="bname" value="<?php echo $row['bname']?>"><br>
    <label style="padding-left: 665px;">Local:</label><input class="form-control" type="text" name="local" value="<?php echo $row['local']?>"><br>
    <input class="btn btn-info" type="submit" name="submit" value="Edit">
</form><script type='text/javascript'>
// <![CDATA[
var editBrandValidator = new Validator("editBrand");
editBrandValidator.addValidation("bname",{required:true,message:"Please fill in brand name"} );
editBrandValidator.addValidation("bname",{alnum_s:true,message:"The input for bname should be a valid alpha-numeric value"} );
editBrandValidator.addValidation("local",{required:true,message:"Please fill in local"} );
editBrandValidator.addValidation("local",{alpha_s:true,message:"The input for local should be a valid alphabetic value"} );

// ]]>
</script>
