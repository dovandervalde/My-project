

<?php 

//mao ni tanan codes para sa register sa admin og sa login sessions

	session_start();

	// variable declaration
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'practice');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "<center>Username is required</center>"); }
		if (empty($email)) { array_push($errors, "<center>Email is required</center>"); }
		if (empty($password_1)) { array_push($errors, "<center>Password is required</center>"); }

		if ($password_1 != $password_2) {
			array_push($errors, "<center>The two passwords do not match</center>");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO admin (username, email, password) 
					  VALUES('$username', '$email', '$password')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			
				echo '<script type="text/javascript">window.alert("Account created successfully!")</script>';
    			echo '<script type="text/javascript">window.location="register.php"</script>';
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "<center>Username is required</center>");
		}
		if (empty($password)) {
			array_push($errors, "<center>Password is required</center>");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";

				$query = "INSERT INTO history (username) 
					  VALUES('$username')";
			mysqli_query($db, $query);

				echo '<script type="text/javascript">window.alert("Welcome!")</script>';
    			echo '<script type="text/javascript">window.location="admin_home.php"</script>';

			}else {
				array_push($errors, "<center>Wrong username/password combination</center>");
			}
		}
	}

?>