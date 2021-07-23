<?php 
	$product_id = $_GET['id'];
	include './server/database.php';
	$product = $db -> query("SELECT * FROM products WHERE id = $product_id");
	$product = $product -> fetch_object();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Product Detail Page</title>
	<link rel="stylesheet" href="styles/all.css">
</head>
<body>
	<?php include './components/header.php'; ?>

	<section class='detail-section container'>
		<div class="product-detail-img">
			<img src="<?php echo $product -> image; ?>" alt="">
		</div>
		<div class="product-detail-body">
			<h2><?php echo $product -> title; ?></h2>
			<h4>Description:</h4>
			<p><?php echo $product -> description; ?></p>
			<h4>Size: <?php echo $product -> size; ?></h4>
			<h4>Color: <?php echo $product -> size; ?></h4>

			<h4>Count: <?php echo $product -> count; ?></h4>
			<h4>Price: $<?php echo $product -> price; ?></h4>

			<h4>Date: <?php echo date('d.m.Y', strtotime($product -> date)); ?></h4>

		</div>
	

	</section>
</body>
</html>