<?php 
	session_start();
	if (!isset($_SESSION['user_id'])) {
		header("Location: ./");
	}
	include './server/database.php';

	$user_id = $_SESSION['user_id'];
	$products = $db -> query("SELECT * FROM products, Carts WHERE Carts.user_id=$user_id AND products.id=Carts.product_id");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cart</title>
	<link rel="stylesheet" href="styles/all.css">
</head>
<body>
	<?php include "./components/header.php"; ?>

	<h1 class="cart-title">Favourite products.</h1>
	<section class="cart-products container">
	<?php 
		while ($i = $products -> fetch_object()) {
	?>
		<div class="card mb-3">
			<div class="row g-0">
				<div class="col-md-4">
					<img src="<?php echo $i -> image; ?>" class="img-fluid rounded-start" alt="...">
				</div>
				<div class="col-md-8">
					<div class="card-body">
						<h5 class="card-title"><?php echo $i -> title; ?></h5>
						<p class="card-text"><?php echo $i -> description; ?></p>
						<p class="card-text">
							<small class="text-muted">
								<?php echo date('d.m.Y', strtotime($i -> date)); ?>
							</small>
						</p>
					</div>
					
				</div>
			</div>
		</div>
	<?php 
		}		
		
	?>
	</section>
	

	<?php 
		include "./components/login-modal.php"; 
		include "./components/register-modal.php"; 
	?>

	<script src="./js/index.js"></script>
</body>
</html>