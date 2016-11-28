<?php
include 'bootstrap.php';
?>
<script src='scripts/jquery-1.7.2.min.js' type='text/javascript'></script>
<script src='scripts/sfm_validatorv7.js' type='text/javascript'></script>
<div id='InsertProB_errorloc' class='error_strings' style=''></div>
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
<h3 style="padding-left: 575px;">Insert Product-Brand</h3>
<form name="InsertProB" method="post" action="insert_prodbrand.php">
    <label style="padding-left: 640px;">Brand-Image:</label><input class="form-control" type="file" name="img"><br>
    <label style="padding-left: 640px;">Brand Price:</label><input class="form-control" type="text" name="price"><br>
    <label style="padding-left: 640px;">Brand-Features:</label><input class="form-control" type="text" name="features"><br>    
    
    <label style="padding-left: 640px;">Product Name:</label><select class="form-control" name="product">
        <option>---select product-name---</option>
        <?php
        include 'connection.php';
        $query = "select * from products";
        $result = mysqli_query($link, $query);
        while($row = mysqli_fetch_array($result))
        {
            $pid = $row['pid'];
            $pname = $row['pname'];
        
            ?>
        <option value="<?php echo $pid;?>"><?php echo $pname;?></option>
            <?php
        }
        ?>
    </select><br>
    
    <label style="padding-left: 640px;">Brand Name:</label><select class="form-control" name="brand">
        <option>---select brand-name---</option>
        <?php
        include 'connection.php';
        $query = "select * from brand";
        $result = mysqli_query($link, $query);
        while($row = mysqli_fetch_array($result))
        {
            $bid = $row['bid'];
            $bname = $row['bname'];
        
            ?>
        <option value="<?php echo $bid;?>"><?php echo $bname;?></option>
            <?php
        }
        ?>
    </select><br>
    <input class="btn btn-info" type="submit" name="submit" value="submit">
</form><script type='text/javascript'>
// <![CDATA[
var InsertProBValidator = new Validator("InsertProB");
InsertProBValidator.addValidation("price",{required:true,message:"Please fill in price"} );
InsertProBValidator.addValidation("price",{numeric:true,message:"The input for price should be a valid numeric value"} );
InsertProBValidator.addValidation("features",{required:true,message:"Please fill in features"} );
InsertProBValidator.addValidation("features",{alnum:true,message:"The input for features should be a valid alpha-numeric value"} );

// ]]>
</script>
