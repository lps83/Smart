

<?php
	require('config.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['lastname']) && isset($_POST['password']) && isset($_POST['password1'])){
	    	if (($_POST['password']) == ($_POST['password1'])){
        
       

        
        $userlastname = $_POST['lastname'];
        $userfirstname = $_POST['firstname'];
	    $email = $_POST['email'];
        $password = $_POST['password'];

        $phonenumber = $_POST['phonenumber'];
        
        $extension  = pathinfo($_FILES['pic']['name'], PATHINFO_EXTENSION);
        
        $pic = $userlastname.".".$extension;
        
        $pic_loc = $_FILES['pic']['tmp_name'];
        $folder="photo/";
        if(move_uploaded_file($pic_loc,$folder.$pic))
        {
            $message = 'successfully uploaded';
        }
        else
        {
            $message = 'error while uploading file';
        } 
 
        $query = "INSERT INTO `users` ( USER_LASTNAME, USER_FIRSTNAME, USER_PASSWORD, USER_EMAIL, USER_PHONENUMBER) VALUES ('$userlastname', '$userfirstname', '$password', '$email', '$phonenumber')";
        $result = mysqli_query($connection, $query);
        if($result){
            $smsg = "User Created Successfully.";
/*
            header('Location: ./register.php');
						exit();
*/
        }else{
            $fmsg ="User Registration Failed";
        }
        }
        else{
	        $smsg = "Password are differents";
	        
	        
        }
    }
   
   
    ?>
    
    
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>REGISTER</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div class="section">
			<div class="logo">
				<a href="index.html">Smart Steward</a>
			</div>
			<ul>
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="login.php">Login</a>
				</li>
				<li class="selected">
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
			<form method="POST" enctype="multipart/form-data">
      
      
       <label>Last Name :</label>
	  <input type="text" name="lastname" placeholder="Your Last Name" required>
<br />
<br />
       <label>First Name :</label>
	  <input type="text" name="firstname" placeholder="Your First Name" required>
<br />
<br />
        <label for="inputEmail">Email address :</label>
        <input type="email" name="email" id="inputEmail" placeholder="Email address" required autofocus>
<br />
<br />
        <label for="inputPassword" >Password :</label>
        <input type="password" name="password" id="inputPassword" placeholder="Password" required>
<br />
<br /> 
        <label for="inputPassword" >Password :</label>
        <input type="password" name="password1" id="inputPassword" placeholder="Same Password" required>
<br />
<br /> 
        <label>Phone Number:</label>
	  <input type="text" name="phonenumber" placeholder="Phone Number" required>
<br />
<br />

<input type="file" name="pic" />
<br />
<br />


        <input type="submit" id="register_btn" value="register">
        <br />
<!--         <ahref="login.php">Login</a> -->
        
        <?php if(isset($smsg)){  echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){  echo $fmsg; ?> </div><?php } ?>
      <?php if(isset($message)){  echo $message; ?> </div><?php } ?>
      
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
				Copyright &copy; 2017 Smart Steward All rights reserved.
			</p>
		</div>
	</div>
</body>
</html>