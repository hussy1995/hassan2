<html>
<body>
   <h3 align="center">Display Product-Brand</h3>
<?php
	include 'connection.php';
        include 'bootstrap.php';
	$sql = "select * from productbrand,products,brand where productbrand.pid=products.pid and productbrand.bid=brand.bid ";
	$result = mysqli_query($link,$sql);
        ?>
    <table border="2" class="table table-bordered">
        <?php
	echo("<thead><tr><th>Product-Brand ID</th><th>Image</th><th>Price</th><th>Features</th><th>Product Name</th><th>Brand Name</th><th style='padding-left:20px;'>Action</th></tr></thead><tbody>");
	
	while($row = mysqli_fetch_array($result)){
		echo("<tr><td>");
		echo($row['pbid']);
		echo("</td><td>");
		echo($row['img']);
               echo("</td><td>");
               echo($row['price']);
               echo("</td><td>");
               echo($row['features']);
               echo("</td><td>");
               echo($row['pname']);
               echo("</td><td>");
               echo($row['bname']);
                echo("</td><td style='width:300px;'>
		<a href='home.php?pg=delprob&a=".$row['pbid']."'>
		<input style='width:60px;' class='btn btn-danger' type='button' value='Delete'/></a> 
                - <a href='home.php?pg=eprob&s=".$row['pbid']."'>
                <input style='width:50px;' class='btn btn-success' type = 'button' value='Edit'/></a></td></tr>");
		
		
		
		
		
		}
                ?>
        </tbody>
		</table></br>
                <a href='home.php?pg=iprob'>
	<input style="width:150px; margin-left:600px;" class="btn btn-primary" type='button' value='Insert New Record'/></a>
                

</body>
</html>