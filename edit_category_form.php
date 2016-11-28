<?php
include 'connection.php';
include 'bootstrap.php';
$catid = $_REQUEST['s'];
$query = "select * from category where catid = $catid";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result);
?>

<script src='scripts/jquery-1.7.2.min.js' type='text/javascript'></script>
<script src='scripts/sfm_validatorv7.js' type='text/javascript'></script>
<div id='editCat_errorloc' class='error_strings' style=''></div>
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
<h3 style="padding-left: 620px;">Edit Category</h3>
<form name="editCat" method="post" action="edit_category.php">
    <input type="hidden" name="catid" value="<?php echo $row['catid']?>">
    <label style="padding-left: 640px;">Category-Name:</label><input class="form-control" type="text" name="catname" value="<?php echo $row['catname']?>"><br>
    <input class="btn btn-info" type="submit" name="submit" value="Edit">
</form><script type='text/javascript'>
// <![CDATA[
var editCatValidator = new Validator("editCat");
editCatValidator.addValidation("catname",{required:true,message:"Please fill in category name"} );
editCatValidator.addValidation("catname",{alnum_s:true,message:"The input for catname should be a valid alpha-numeric value"} );

// ]]>
</script>
