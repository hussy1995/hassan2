<html>
<body>
       <br><br><br><br><br><br>
   <h3 align="center">Display Brand</h3>
<?php
	include 'connection.php';
        include 'bootstrap.php';
	$sql = "select * from brand";
	$result = mysqli_query($link,$sql);
        ?>

    <table border="2" class="table table-bordered">
        <?php
	echo("<thead><tr><th>Brand ID</th><th>Brand Name</th><th>Local</th><th>Action</th></tr></thead><tbody>");
	
	while($row = mysqli_fetch_array($result)){
		echo("<tr><td>");
		echo($row['bid']);
		echo("</td><td>");
		echo($row['bname']);
                echo("</td><td>");
                echo($row['local']);
                
		echo("</td><td style='width:200px;'>
		<a href='home.php?pg=delb&a=".$row['bid']."'>
		<input style='width:60px;' class='btn btn-danger' type='button' value='Delete'/></a> 
                - <a href='home.php?pg=eb&s=".$row['bid']."'>
                <input style='width:50px;' class='btn btn-success' type = 'button' value='Edit'/></a></td></tr>");
		
		
		
		
		
		}
                ?>
        </tbody>
		</table></br>
                <a href='home.php?pg=ib'>
	<input style="width:150px; margin-left:600px;" class="btn btn-primary" type='button' value='Insert New Record'/></a>
                

</body>
</html>