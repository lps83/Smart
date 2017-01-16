<?php  //Start the Session
session_start();
 require('config.php');
//3. If the form is submitted or not.
//3.1 If the form is submitted
if (isset($_POST['username']) and isset($_POST['password'])){
//3.1.1 Assigning posted values to variables.
$username = $_POST['username'];
$password = $_POST['password'];
//3.1.2 Checking the values are existing in the database or not
$query = "SELECT * FROM `users` WHERE USER_LASTNAME='$username' and USER_PASSWORD='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1){
$_SESSION['username'] = $username;
}else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
$fmsg = "Invalid Login Credentials.";
}
}

?>

<?php
if (isset($_SESSION['username'])){
	$username = $_SESSION['username'];
		    
			  header('Location: ./global.php');
			  exit();
		    	
                    }

?>


<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>LOG IN</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div class="section">
			<div class="logo">
				<a href="index.php">Smart Steward</a>
			</div>
			<ul>
				<li>
					<a href="index.php">Home</a>
				</li>
				<li class="selected">
					<a href="login.php">Login</a>
				</li>
				<li>
					<a href="register.php">Register</a>
				</li>
				<li>
				<a href="adddata.php">Add Data</a>
				</li>
				<li>
					<a href="about.php">About</a>
				</li>
			</ul>
		</div>
		<div class="article">
			<form action = "login.php" method="POST">
			<p>
				<h1>LOG IN</h1>
			</p>
			<p>
				<label>Username:</label>
				<input type="text" id="username" name="username">
			</p>
			<p>
				<label>Password:</label>
				<input type="password" id="password" name="password">
			</p>
			<P>
				<input type="submit" id="btn" value="login">
			</P>

		</form>
		</div>
	</div>
	<!--<div id="body">
		
	</div>-->
	<div id="footer">
		<div>
			<div class="connect">
				<a href="-" id="twitter">twitter</a>
				<a href="-" id="facebook">facebook</a>
				<a href="-" id="googleplus">googleplus</a>
				<a href="-" id="pinterest">pinterest</a>
			</div>
			<p>
				Copyright &copy; 2015.Company name All rights reserved.
			</p>
		</div>
	</div>
</body>
</html>