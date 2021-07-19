<?php 
	$email = $_POST['login_email'];
	$password = $_POST['login_password'];

	include '../database.php';

	$exists = $db -> query("SELECT * FROM Users WHERE email = '$email'");

	if ($exists -> num_rows > 0) {
		$user = $exists -> fetch_object();

		if ($user -> password === md5(md5($password))) {
			session_start();
			$_SESSION['user_id'] = $user -> id;
			$_SESSION['email'] = $user -> email;
			$_SESSION['firstname'] = $user -> firstname;
			$_SESSION['lastname'] = $user -> lastname;
			$_SESSION['avatar'] = $user -> avatar;
			header('Location: ../../');
		} else {
			print 'Password is not correct!';
		}
	} else {
		print 'Such user does not exist!';
	}

?>