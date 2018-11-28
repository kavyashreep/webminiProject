<?php
	$_SESSION["uname"]=" ";
	session_destroy();
	echo '<script language="javascript">';
	echo 'alert("Logged out successfully...")';
	echo '</script>';
	echo "<script> location.href='login.html'; </script>";
?>