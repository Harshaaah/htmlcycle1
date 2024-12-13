<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	$name=$_POST['name'];
	$id=$_POST['id'];
	$class=$_POST['class'];
	$age=$_POST['age'];
	echo "NAME OF STUDENT:$name<br>
	class:$class<br> id:$id<br> age:$age";
	
}
?>
