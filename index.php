<?php 
	session_start();
	include './server/database.php';
	$products = $db -> query('SELECT * FROM products');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Online Shop</title>
	<link rel="stylesheet" href="styles/all.css">
</head>
<body>
	<?php 
		include "./components/header.php";
	?>

	<section class="products container flex-between">
		<?php 
			if ($products -> num_rows > 0) {
				while ($row = $products -> fetch_object()){
		?>
		<div class="card">
			<img src="<?php echo $row -> image; ?>" class="card-img-top" alt="...">
			<div class="card-body">
				<a href="./detail.php?id=<?php echo $row -> id; ?>" class="card-title-link">
					<h5 class="card-title"><?php echo $row -> title; ?></h5>
				</a>
			</div>
			<ul class="list-group list-group-flush">
				<li class="list-group-item">Price: $<?php echo $row -> price; ?></li>
				<!-- <li class="list-group-item">Date: <?php echo date('d.m.Y', strtotime($row -> date)); ?></li> -->
				<a href="./server/products/addToCart.php?id=<?php echo $row -> id; ?>" class="save-product-btn">
					<i>
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
							<path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z"/>
						</svg>
					</i>
				</a>
			</ul>
		</div>

		<?php 
				}
			}
		?>
	</section>




	<?php 
		# including all modals:
		include "./components/login-modal.php";
		include "./components/register-modal.php";
	?>
	<script src="./js/index.js"></script>
</body>
</html>