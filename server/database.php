<?php 
	$db = new mysqli("localhost", "root", "", "shop");

	if($db -> connect_error){
		echo $db -> connect_error;
	}
?>