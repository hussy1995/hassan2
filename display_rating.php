<html>
<body>
   <h3 align="center">Display Rating</h3>
<?php
	include 'connection.php';
        include 'bootstrap.php';
	$sql = "select * from rating,user,productbrand where rating.uid=user.uid and rating.pbid=productbrand.pbid";
	$result = mysqli_query($link,$sql);
        ?>
    <table border="2" class="table table-bordered">
        <?php
	echo("<thead><tr><th>Rating ID</th><th>Rating Date</th><th>Rating</th><th>User Name</th><th>Product-Brand Features</th><th style='padding-left:20px;'>Action</th></tr></thead><tbody>");
	
	while($row = mysqli_fetch_array($result)){
		echo("<tr><td>");
		echo($row['rid']);
		echo("</td><td>");
		echo($row['rdate']);
                echo("</td><td>");
                echo($row['rating']);
                echo("</td><td>");
                echo($row['uname']);
                echo("</td><td>");
                echo($row['features']);
                echo("</td><td style='width:300px;'>
		<a href='home.php?pg=delrat&a=".$row['rid']."'>
		<input style='width:60px;' class='btn btn-danger' type='button' value='Delete'/></a> 
                - <a href='home.php?pg=erat&s=".$row['rid']."'>
                <input style='width:50px;' class='btn btn-success' type = 'button' value='Edit'/></a></td></tr>");
		
		
		
		
		
		}
                ?>
        </tbody>
		</table></br>
                <a href='home.php?pg=irat'>
	<input style="width:150px; margin-left:600px;" class="btn btn-primary" type='button' value='Insert New Record'/></a>
                

</body>
</html>