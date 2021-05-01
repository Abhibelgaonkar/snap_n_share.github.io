<?php
	$conn = new mysqli('localhost', 'root', '', 'sns');
	
	if(!$conn){
		die("Error: Failed to connect to database");
	}
?>	