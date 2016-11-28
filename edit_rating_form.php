<?php
include 'connection.php';
include 'bootstrap.php';
$rid = $_REQUEST['s'];
$query = "select * from rating where rid = $rid";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result);

$uid = $row['uid'];
$querytest = "select * from user where uid = $uid";
$resulttest = mysqli_query($link, $querytest);
$rowtest = mysqli_fetch_array($resulttest);
$unametest = $rowtest['uname'];

$pbid = $row['pbid'];
$querytest = "select * from productbrand where pbid = $pbid";
$resulttest = mysqli_query($link, $querytest);
$rowtest = mysqli_fetch_array($resulttest);
$featurestest = $rowtest['features'];

?>

<script src='scripts/jquery-1.7.2.min.js' type='text/javascript'></script>
<script src='scripts/sfm_validatorv7.js' type='text/javascript'></script>
<div id='editRat_errorloc' class='error_strings' style=''></div>
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
<h3 style="padding-left: 630px;">Edit Rating</h3>
<form name="editRat" method="post" action="edit_rating.php">
    <input class="form-control" type="hidden" name="rid" value="<?php echo $row['rid']?>">
    <label style="padding-left: 645px;">Rating Date:</label><input class="form-control" type="date" name="rdate" value="<?php echo $row['rdate']?>"><br>
    <label style="padding-left: 665px;">Rating:</label><input class="form-control" type="text" name="rating" value="<?php echo $row['rating']?>"><br>
    <label style="padding-left: 650px;">User-Name:</label><select class="form-control" name="user">
        <option>---select User-name---</option>
        <?php
        include 'connection.php';
        $query = "select * from user";
        $result = mysqli_query($link, $query);
        while($row = mysqli_fetch_array($result))
        {
            $uid = $row['uid'];
            $uname = $row['uname'];
            if($unametest==$uname){
            ?>
        <option value="<?php echo $uid;?>" selected=""><?php echo $uname;?></option>
            <?php
        }
        else
        {
            ?>
        <option value="<?php echo $uid;?>"><?php echo $uname;?></option>
            <?php
        }
        }
        ?>
    </select><br>
    
    <label style="padding-left: 620px;">Product-Brand Name:</label><select class="form-control" name="productbrand">
        <option>---select Product-brand-name---</option>
        <?php
        include 'connection.php';
        $query = "select * from productbrand";
        $result = mysqli_query($link, $query);
        while($row = mysqli_fetch_array($result))
        {
            $pbid = $row['pbid'];
            $features = $row['features'];
            if($featurestest==$features){
            ?>
        <option value="<?php echo $pbid;?>" selected=""><?php echo $features;?></option>
            <?php
        }
        else
        {
            ?>
        <option value="<?php echo $pbid;?>"><?php echo $features;?></option>
            <?php
        }
        }
        ?>
    </select><br>
    <input class="btn btn-info" type="submit" name="submit" value="Edit">
</form><script type='text/javascript'>
// <![CDATA[
var editRatValidator = new Validator("editRat");
editRatValidator.addValidation("rating",{required:true,message:"Please fill in rating"} );
editRatValidator.addValidation("rating",{alpha_s:true,message:"The input for rating should be a valid alphabetic value"} );

// ]]>
</script>
