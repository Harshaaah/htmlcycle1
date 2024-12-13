<html>
<body>
	<form action="" method="post">
	<label for="dividend">DIVIDEND:</label>
	<input type="number" name="divident">
	<label for="divisor">DIVISOR:</label>
	<input type="number" name="divisor">
	<input type="submit" value="submit">
	</form>
	<?php
		$divident=$_POST['divident'];
		$divisor=$_POST['divisor'];
		$rem=$divident%$divisor;
		if($rem==0)
		{
			echo "Number $divident is divisible by $divisor";
		}
		else
			echo "Number $divident is not divisible by $divisor";
	?>
</body>
</html>
