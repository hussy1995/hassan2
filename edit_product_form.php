<?php
include 'connection.php';
include 'bootstrap.php';
$pid = $_REQUEST['s'];
$query = "select * from products where pid = $pid";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result);

$catid = $row['catid'];
$querytest = "select * from category where catid = $catid";
$resulttest = mysqli_query($link, $querytest);
$rowtest = mysqli_fetch_array($resulttest);
$catnametest = $rowtest['catname'];
?>

<script src='scripts/jquery-1.7.2.min.js' type='text/javascript'></script>
<script src='scripts/sfm_validatorv7.js' type='text/javascript'></script>
<div id='editPro_errorloc' class='error_strings' style=''></div>
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
<h3 style="padding-left: 625px;">Edit Product</h3>
<form name="editPro" method="post" action="edit_product.php">
    <input type="hidden" name="pid" value="<?php echo $row['pid']?>">
    <label style="padding-left: 640px;">Product-Name:</label><input class="form-control" type="text" name="pname" value="<?php echo $row['pname']?>"><br>
    <label style="padding-left: 640px;">Category-Name:</label><select class="form-control" name="category">
        <option>---select Category-name---</option>
        <?php
        include 'connection.php';
        $query = "select * from category";
        $result = mysqli_query($link, $query);
        while($row = mysqli_fetch_array($result))
        {
            $catid = $row['catid'];
            $catname = $row['catname'];
            if($catnametest==$catname){
            ?>
        <option value="<?php echo $catid;?>" selected=""><?php echo $catname;?></option>
            <?php
        }
        else
        {
            ?>
        <option value="<?php echo $catid;?>"><?php echo $catname;?></option>
            <?php
        }
        }
        ?>
    </select><br>
    <input class="btn btn-info" type="submit" name="submit" value="Edit">
</form><script type='text/javascript'>
// <![CDATA[
var editProValidator = new Validator("editPro");
editProValidator.addValidation("pname",{required:true,message:"Please fill in pname"} );
editProValidator.addValidation("pname",{alnum_s:true,message:"The input for pname should be a valid alpha-numeric value"} );

// ]]>
</script>
