<html>
<body>
	<form action="" method="post">
	<label for="number">Number:</label>
	<input type="number" name="number">
	<input type="submit" name="submit" value="submit">
	</form>
	<?php
		$num=$_POST['number'];
		if($num>0)
			echo "$num is positive";
		else if($num<0)
			echo "$num is negative";
		else
			echo "$num is zero";
	?>
</body>
</html>
