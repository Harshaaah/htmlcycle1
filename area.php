<html>
<body>
	<form action="" method="post">
	<label for="height">Height:</label>
	<input type="number" name="height">
	<label for="base">Base:</label>
	<input type="number" name="base">
	<input type="submit" name="submit" value="area"> 
	</form>
	<?php
		$height=$_POST['height'];
		$base=$_POST['base'];
		$area=$height*$base/2;
		echo "area =$area";
	?>
</body>
</html>

