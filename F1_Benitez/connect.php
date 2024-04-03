<?php 
	$connection = new mysqli('localhost', 'root','','dbbenitezf1');
	
	if (!$connection){
		die (mysqli_error($mysqli));
	}
		
?>