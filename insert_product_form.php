<?php
include 'bootstrap.php';
?>
<script src='scripts/jquery-1.7.2.min.js' type='text/javascript'></script>
<script src='scripts/sfm_validatorv7.js' type='text/javascript'></script>
<div id='InsertPro_errorloc' class='error_strings' style=''></div>
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
<h3 style="padding-left: 615px;">Insert Product</h3>
<form name="InsertPro" method="post" action="insert_product.php">
    <label style="padding-left: 640px;">Product-Name:</label><input class="form-control" type="text" name="pname"><br>
    <label style="padding-left: 640px;">Category-ID:</label><select class="form-control" name="category">
        <option>---select Category-name---</option>
        <?php
        include 'connection.php';
        $query = "select * from category";
        $result = mysqli_query($link, $query);
        while($row = mysqli_fetch_array($result))
        {
            $catid = $row['catid'];
            $catname = $row['catname'];
        
            ?>
        <option value="<?php echo $catid;?>"><?php echo $catname;?></option>
            <?php
        }
        ?>
    </select><br>
    <input class="btn btn-info" type="submit" name="submit" value="submit">
</form><script type='text/javascript'>
// <![CDATA[
var InsertProValidator = new Validator("InsertPro");
InsertProValidator.addValidation("pname",{required:true,message:"Please fill in product name"} );
InsertProValidator.addValidation("pname",{alpha_s:true,message:"The input for pname should be a valid alphabetic value"} );

// ]]>
</script>
