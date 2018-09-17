<?php 
	session_start();

	// variable declaration
	$fname = "";
	$lname = "";
	$email    = "";
	$mobile = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'exchange');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$fname = mysqli_real_escape_string($db, $_POST['fname']);
		$lname = mysqli_real_escape_string($db, $_POST['lname']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$mobile = mysqli_real_escape_string($db, $_POST['mobile']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password']);
		$password_2 = mysqli_real_escape_string($db, $_POST['cpassword']);

		// form validation: ensure that the form is correctly filled
		if (empty($fname)) { array_push($errors, "First Name is required"); }
		if (empty($lname)) { array_push($errors, "Last Name is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($mobile)) { array_push($errors, "Mobile no is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO site_users (pass, first_name, last_name, email, phone) 
					  VALUES( '$password', '$fname', '$lname', '$email', '$mobile')";
			mysqli_query($db, $query);
			header('location: login.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM site_users WHERE email='$username' AND pass='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['first_name'] = $fname;
				header('location: dashboard.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

?>