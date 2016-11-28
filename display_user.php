<html>
<body>
   <h3 align="center">Display User</h3>
<?php
	include 'connection.php';
        include 'bootstrap.php';
	$sql = "select * from user";
	$result = mysqli_query($link,$sql);
        ?>
    <table border="2" class="table table-bordered">
        <?php
	echo("<thead><tr><th>User ID</th><th>User Name</th><th style='padding-left:20px;'>Action</th></tr></thead><tbody>");
	
	while($row = mysqli_fetch_array($result)){
		echo("<tr><td>");
		echo($row['uid']);
		echo("</td><td>");
		echo($row['uname']);
               echo("</td><td style='width:300px;'>
		<a href='home.php?pg=delu&a=".$row['uid']."'>
		<input style='width:60px;' class='btn btn-danger' type='button' value='Delete'/></a> 
                - <a href='home.php?pg=eu&s=".$row['uid']."'>
                <input style='width:50px;' class='btn btn-success' type = 'button' value='Edit'/></a></td></tr>");
		
		
		
		
		
		}
                ?>
        </tbody>
		</table></br>
                <a href='home.php?pg=iu'>
	<input style="width:150px; margin-left:600px;" class="btn btn-primary" type='button' value='Insert New Record'/></a>
                

</body>
</html>