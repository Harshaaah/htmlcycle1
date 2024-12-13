<?php
	$total=(int)$_POST['totalmarks'];
	$marks=(int)$_POST['mark'];
	$per=$marks*100/$total;
	if($per>=60)
		echo "First division";
	else if($per>=45 && $per<=59)
		echo "Second division";
	else if($per>=33 && $per<=44)
		echo "Third division";
	else if($per<33)
		echo "Fail";
	else 
		echo "Enter valid marks";
?>

