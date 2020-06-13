<?php
session_start();

?>



<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>



<?php

include 'connect_db.php';

    if(isset($_POST['submit'])){
    	$email=$_POST['email'];
    	$pass=$_POST['pass'];

    	$check="select * from user where email='$email'";
    	$query=mysqli_query($con,$check);

    	$email_count = mysqli_num_rows($query);

    	if($email_count){
    		$email_pass=mysqli_fetch_assoc($query);


    		$db_pass=$email_pass['pass'];
    		

    		$pass_decode=password_verify($pass, $db_pass);

    		if($pass_decode){
    			echo "login successful";
    			?>

<script type="text/javascript">
	location.replace("product.php");
</script>

    			<?php


    		}else{
    		echo "password incorrect";
}

    	}else{
    		echo "invalid email";

    	}
    }

?>





<body>
	<nav class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<a href="index.php"><div class="navbar-brand"> Fancy Store</div></a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				
				<li><a href="signup.php"><span class="glyphicon glyphicon-pencil"></span>Signup</a></li>
			</ul>
		</div>
	</nav>
	


	<div class="panel panel-primary">
		<div class="panel panel-heading">Login</div>
		<div class="panel panel-body">
			<p class="text-warning">Login to make purchase</p><hr>
			<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
			<div class="form-group">
				<label for="email">Email Address:</label>

				<input type="email" name="email" class="form-control" id="email" placeholder=" Enter Email">
			</div>
			<div class="form-group">
				<label for="password">password:</label>
				<input type="password" name="pass" class="form-control" id="password" placeholder=" Enter password">
			</div>
			<div class="form-group form-check">
				<label form-check label>
					<input type="checkbox" class="form-check-input">Remember me
				</label>
			</div>
			<button type="submit" class="btn btn-primary" name="submit">Submit</button>

		</div>
		<div class="panel panel-footer">Don't Have an account <a href="signup.php">Register</a></div>
	</div>
</div>
</div>
</div>

	<div id="login_footer"><center>Copyright © Fancy Store. All Rights
Reserved| and |Contact Us: +91 90000 00000􀆉</center></div>
		
</body>
</html>