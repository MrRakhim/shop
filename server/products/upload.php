<?php

	$title = $_POST['title'];
	$desc = $_POST['description'];
	$size = $_POST['size'];
	$count = $_POST['count'];
	$price = $_POST['price'];
	$color = $_POST['color'];
	$img = $_POST['image'];

	include "../database.php";

	$db -> query("INSERT INTO products (title, description, image, size, count, color, price) VALUES ('$title', '$desc', '$img', '$size', $count, '$color', $price)");

	header("Location: ../../");
?>