<?php
setcookie('user_id', '', time() - 3600, "/"); 
setcookie('email', '', time() - 3600, "/");
header("Location: 3rgstr_login.php"); 
exit();
?>
