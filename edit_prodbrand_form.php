<?php
include 'connection.php';
include 'bootstrap.php';
$pbid = $_REQUEST['s'];
$query = "select * from productbrand where pbid = $pbid";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result);

$pid = $row['pid'];
$querytest = "select * from products where pid=$pid";
$resulttest = mysqli_query($link, $querytest);
$rowtest = mysqli_fetch_array($resulttest);
$pnametest = $rowtest['pname'];

$bid = $row['bid'];
$querytest = "select * from brand where bid=$bid";
$resulttest = mysqli_query($link, $querytest);
$rowtest = mysqli_fetch_array($resulttest);
$bnametest = $rowtest['bname'];
?>

<script src='scripts/jquery-1.7.2.min.js' type='text/javascript'></script>
<script src='scripts/sfm_validatorv7.js' type='text/javascript'></script>
<div id='editProB_errorloc' class='error_strings' style=''></div>
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
<h3 style="padding-left: 585px;">Edit Product-Brand</h3>
<form name="editProB" method="post" action="edit_prodbrand.php">
    <input type="hidden" name="pbid" value="<?php echo $row['pbid']?>">
    <label style="padding-left: 640px;">Brand Image:</label><input class="form-control" type="file" name="img" value="<?php echo $row['img']?>"><br>
    <label style="padding-left: 640px;">Brand Price:</label><input class="form-control" type="text" name="price" value="<?php echo $row['price']?>"><br>
    <label style="padding-left: 640px;">Brand Features:</label><input class="form-control" type="text" name="features" value="<?php echo $row['features']?>"><br>
    
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
            if($pnametest==$pname){
            ?>
        <option value="<?php echo $pid;?>" selected=""><?php echo $pname;?></option>
            <?php
        }
        else
        {
            ?>
        <option value="<?php echo $pid;?>"><?php echo $pname;?></option>
            <?php
        }
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
            if($bnametest==$bname){
            ?>
        <option value="<?php echo $bid;?>" selected=""><?php echo $bname;?></option>
            <?php
        }
        else
        {
            ?>
        <option value="<?php echo $bid;?>"><?php echo $bname;?></option>
            <?php
        }
        }
        ?>
    </select><br>
    <input class="btn btn-info" type="submit" name="submit" value="Edit">
</form><script type='text/javascript'>
// <![CDATA[
var editProBValidator = new Validator("editProB");
editProBValidator.addValidation("price",{required:true,message:"Please fill in price"} );
editProBValidator.addValidation("price",{numeric:true,message:"The input for price should be a valid numeric value"} );
editProBValidator.addValidation("features",{required:true,message:"Please fill in features"} );
editProBValidator.addValidation("features",{alnum_s:true,message:"The input for features should be a valid alpha-numeric value"} );

// ]]>
</script>
