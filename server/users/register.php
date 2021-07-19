<?php
	$email = $_POST['register_email'];
	$password = $_POST['register_password'];
	$firstname = $_POST['register_firstname'];
	$lastname = $_POST['register_lastname'];
	$avatar = $_POST['register_avatar'];
	$errors = [];

	include '../database.php';

	$exists = $db -> query("SELECT * FROM Users WHERE email='$email'");

	if ($exists -> num_rows > 0) {
		$errors = 'Such user already exists.';
	}

	if (strlen($lastname) < 2 or strlen($lastname) > 30) {
		$errors = 'Lastname must contain between 2 and 30 characters';
	}

	if (strlen($firstname) < 2 or strlen($firstname) > 30) {
		$errors = 'Firstname must contain between 2 and 30 characters';
	}

	if (strlen($email) < 5 or strlen($email) > 30) {
		$errors = 'Email must contain between 5 and 30 characters';
	}

	if (strlen($password) < 8 or strlen($password) > 30) {
		$errors = 'Password must contain between 8 and 30 characters';
	}

	if (count($errors) == 0) {
		$enc_password = md5(md5($password));

		$db -> query("INSERT INTO Users (firstname, lastname, email, password, avatar) VALUES ('$firstname', '$lastname', '$email', '$enc_password', '$avatar')");
		header("Location: ../../");
		exit();
	} else {
		print `<b>
			<h3>During the registration, the following errors occured:</h3
		</b>`;
		print '<ul>';
		foreach($i as $errors) {
			print '<li>'.$i.'</li>';
		}
		print '</ul>';
	}



?>