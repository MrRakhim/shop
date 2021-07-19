<?php 
	session_start();
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Page</title>
	<link rel="stylesheet" href="styles/all.css">
</head>
<body>
	<?php include "./components/header.php" ?>

	<section class="container">
		<h1>Hello, <?php echo $_SESSION['firstname']." ".$_SESSION['lastname']; ?></h1>
		<form action="./server/products/upload.php" method="POST">
			<div class="mb-3">
				<label class="form-label">Title</label>
				<input type="text" name="title" class="form-control">
			</div>
			<div class="mb-3 form-floating">
				<textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
				<label for="floatingTextarea">Description</label>
			</div>

			<div class="mb-3 row g-4">
				<div class="col-md-3">
					<label class="form-label">Size</label>
					<input type="text" name="size" class="form-control">
				</div>
				<div class="col-md-3">
					<label class="form-label">Count</label>
					<input type="text" name="count" class="form-control">
				</div>
				<div class="col-md-3">
					<label class="form-label">Color</label>
					<input type="text" name="color" class="form-control">
				</div>
				<div class="col-md-3">
					<label class="form-label">Price</label>
					<input type="text" name="price" class="form-control">
				</div>
			</div>
			
			<div class="mb-3">
				<label class="form-label">Image</label>
				<input type="text" class="form-control" name="image" placeholder="Enter a url...">
			</div>
			
			<button type="submit" class="btn btn-primary">Upload</button>
		</form>

	</section>
</body>
</html>