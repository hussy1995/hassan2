<?php
include 'bootstrap.php';
?>
<script src='scripts/jquery-1.7.2.min.js' type='text/javascript'></script>
<script src='scripts/sfm_validatorv7.js' type='text/javascript'></script>
<div id='InsertRat_errorloc' class='error_strings' style=''></div>
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
<h3 style="padding-left: 625px;">Insert Rating</h3>
<form name="InsertRat" method="post" action="insert_rating.php">
    <label style="padding-left: 645px;">Rating Date:</label><input class="form-control" type="date" name="rdate"><br>
    <label style="padding-left: 660px;">Rating:</label><input class="form-control" type="text" name="rating"><br>
    <label style="padding-left: 650px;">User Name:</label><select class="form-control" name="user">
        <option>---select User-name---</option>
        <?php
        include 'connection.php';
        $query = "select * from user";
        $result = mysqli_query($link, $query);
        while($row = mysqli_fetch_array($result))
        {
            $uid = $row['uid'];
            $uname = $row['uname'];
        
            ?>
        <option value="<?php echo $uid;?>"><?php echo $uname;?></option>
            <?php
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
        
            ?>
        <option value="<?php echo $pbid;?>"><?php echo $features;?></option>
            <?php
        }
        ?>
    </select><br>
    <input class="btn btn-info" type="submit" name="submit" value="submit">
</form><script type='text/javascript'>
// <![CDATA[
var InsertRatValidator = new Validator("InsertRat");
InsertRatValidator.addValidation("rating",{required:true,message:"Please fill in rating"} );
InsertRatValidator.addValidation("rating",{alpha_s:true,message:"The input for rating should be a valid alphabetic value"} );

// ]]>
</script>
