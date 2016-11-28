<html>
<body>
   <h3 align="center">Display Category</h3>
<?php
	include 'connection.php';
        include 'bootstrap.php';
	$sql = "select * from category";
	$result = mysqli_query($link,$sql);
        ?>
    <table border="2" class="table table-bordered">
        <?php
	echo("<thead><tr><th>Category ID</th><th>Category Name</th><th style='padding-left:20px;'>Action</th></tr></thead><tbody>");
	
	while($row = mysqli_fetch_array($result)){
		echo("<tr><td>");
		echo($row['catid']);
		echo("</td><td>");
		echo($row['catname']);
               echo("</td><td style='width:300px;'>
		<a href='home.php?pg=delcat&a=".$row['catid']."'>
		<input style='width:60px;' class='btn btn-danger' type='button' value='Delete'/></a> 
                - <a href='home.php?pg=ecat&s=".$row['catid']."'>
                <input style='width:50px;' class='btn btn-success' type = 'button' value='Edit'/></a></td></tr>");
		
		
		
		
		
		}
                ?>
        </tbody>
		</table></br>
                <a href='home.php?pg=icat'>
	<input style="width:150px; margin-left:600px;" class="btn btn-primary" type='button' value='Insert New Record'/></a>
                

</body>
</html>