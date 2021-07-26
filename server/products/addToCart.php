<?php 
	session_start();
	if (isset($_SESSION['user_id'])) { 
		include '../database.php';
		$user_id = $_SESSION['user_id'];
		$product_id = $_GET['id'];
		$cart_exist = $db -> query("SELECT * FROM Carts WHERE user_id=$user_id AND product_id = $product_id");

		if ($cart_exist -> num_rows == 0) {
			$db -> query("INSERT INTO Carts (product_id, user_id) VALUES ($product_id, $user_id)");
		}
	}
	header('Location: ../../cart.php');
?>