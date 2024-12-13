<html>
<body>
	<form action="" method="post">
	<label for="number">Number:</label>
	<input type="number" name="number">
	<input type="submit" name="submit" value="submit">
	</form>
	<?php
		$num=$_POST['number'];
		$strnum=(string)$num;
		$n=strlen($strnum);
		$sum=0;
		$number=$num;
		while($num>0)
		{
			$rem=$num%10;
			$sum=$sum+$rem**$n;
			$num=$num/10;
		}
		if($number==$sum)
			echo " $number is amstrong";
		else
			echo" $number is not amstrong";
	?>
</body>
</html>
	
