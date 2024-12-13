<?php
	$num=$_POST['number'];
	$fact=1;
	for($x=1;$x<=$num;$x++)
	{
		$fact=$fact*$x;
	}
	echo "factorial of $num is $fact";
?>

