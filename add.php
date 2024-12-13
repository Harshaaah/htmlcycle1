<html>
<body>
	<form action="" method="post">
	<label for="no1">Number 1:</label>
	<input type="number" name="number1">
	<label for="no">Number 2:</label>
	<input type="number" name="number2">
	<input type="submit" name="submit" value="add">
	</form>
	<?php
		$num1=$_POST['number1'];
		$num2=$_POST['number2'];
		$add=$num1+$num2;
		echo "sum:$add";
	?>
</body>
</html>
