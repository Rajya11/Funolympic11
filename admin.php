<!DOCTYPE html>
<html>
<head>
<body style="background-color:#fff8f4">
	<title>Admin Login</title>
	<style type="text/css">
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
    }
    form {
        background-color: #fff;
        max-width: 500px;
        margin: 50px auto;
        padding: 20px;
        box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
        border-radius: 5px;
    }
    input[type="text"], input[type="password"] {
        display: block;
        margin-bottom: 10px;
        padding: 5px;
        width: 100%;
        border: 1px solid #ccc;
        border-radius: 3px;
        box-sizing: border-box;
    }
    input[type="submit"] {
        display: block;
        margin: 10px auto;
        padding: 5px 10px;
        background-color: #008CBA;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }
    .error-container {
        background-color: #F8D7DA;
        color: #721C24;
        padding: 10px;
        margin: 10px 0;
        border-radius: 5px;
    }
    .error-list {
        list-style: none;
        margin: 0;
        padding: 0;
    }
    .error-message {
        margin: 5px 0;
    }
</style>
</head>
<body>
	<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
	  $email = $_POST['email'];
	  $password = $_POST['password'];
	  $errors = array();

	  // Check if email and password fields are empty
	  if(empty($email)) {
	    $errors[] = "Email field is required";
	  }
	  if(empty($password)) {
	    $errors[] = "Password field is required";
	  }

	  // Check if email and password are correct
	  if($email == 'admin' && $password == 'admin') {
	    session_start();
	    $_SESSION['loggedin'] = true;
	    header('Location: ./adminpanel.php');
	    exit;
	  } else {
	    $errors[] = 'Invalid login details.';
	  }

	  // If there are errors, display them on the form with CSS styles
	  if(count($errors) > 0) {
	    echo "<div class='error-container'>";
	    echo "<ul class='error-list'>";
	    foreach($errors as $error) {
	      echo "<li class='error-message'>$error</li>";
	    }
	    echo "</ul>";
	    echo "</div>";
	  }
	}
	?>

	<form method="post">
		<h2>Admin Login</h2>
		<label for="email">Email:</label>
		<input type="text" id="email" name="email" required>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required>
		<input type="submit" value="Login">
	</form>
</body>
</html>
