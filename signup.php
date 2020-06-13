<?php
session_start();

?>




<!DOCTYPE html>
<html>
<head>
	<title>signup</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

		<?php
include 'connect_db.php';

    if(isset($_POST['submit'])){
    $name =mysqli_real_escape_string($con,$_POST['name']);
	$email = mysqli_real_escape_string($con,$_POST['email']);
	$contact =mysqli_real_escape_string ($con,$_POST['contact']);
	$address =mysqli_real_escape_string($con, $_POST['address']);
	$pass = mysqli_real_escape_string($con,$_POST['pass']);
	$cpass = mysqli_real_escape_string($con,$_POST['cpass']);

	$hpass=password_hash($pass, PASSWORD_BCRYPT);
	$hcpass=password_hash($cpass, PASSWORD_BCRYPT);


	$emailquery = "select * from user where email='$email'";
	$query=mysqli_query($con,$emailquery);

	$count = mysqli_num_rows($query);
	if($count>0){

		 echo "email already exist";
	}else{
		if($pass===$cpass){

			$insertquery="insert into user(name,email,contact,address,pass,cpass)values('$name','$email','$contact','$address','$hpass','$hcpass' )";

			$iquery= mysqli_query($con,$insertquery);

						if ($iquery) {
				?>
			    <script type="text/javascript">
			    	alert("User has been registerd")
			    	location.replace("login.php");
				</script>
				<?php
			}else{
				?>
			    <script>
			    	alert("no connection")
				</script>
				<?php

			}
		}else{
			echo "password are not matching";
		}
	}
}


?>




	<nav class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<a href="index.php"><div class="navbar-brand"> Fancy Store</div></a>
		</div>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="login.php"><span class="glyphicon glyphicon-user">
			     </span>Login</a>
			</li>
				
		</ul>
	</nav>
	<div class="panel panel-primary">
		<div class="panel panel-heading">Signup</div>
		<div class="panel panel-body">
		
			<p class="text-warning"> Create a new account</p><hr>
			<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
			<div class="form-group">
				<label for="name">Name:</label>
				<input type="text" name="name"required class="form-control" id="name" placeholder=" Enter Full Name">
			</div>
			<div class="form-group">
				<label for="email">Email Address:</label>
				<input type="email" name="email"required class="form-control" id="email" placeholder=" Enter Email">
			</div>
			<div class="form-group">
				<label for="password">password:</label>
				<input type="password" name="pass"required class="form-control" id="password" placeholder=" Enter password">
			</div>
			<div class="form-group">
				<label for="password">confirm password:</label>
				<input type="password" name="cpass"required class="form-control" id="password" placeholder=" retype password">
			</div>
			<div class="form-group">
				<label for="contact">Contact No:</label>
				<input type="contact" name="contact"required class="form-control" id="contact" placeholder=" Enter Contact No">
			</div>
				
				<div class="form-group">
				<label for="address">Address:</label>
				<input type="address" name="address"required class="form-control" id="address" placeholder=" Enter Address">
			</div>
			<button type="Submit" class="btn btn-primary" value="submit" name="submit"> Submit</button>
</form>
		</div>
		</div>
	</div>
	</div>
	<footer>
<div class="container">
<center>
<p>Copyright &copy; Lifestyle Store. All Rights Reserved | Contact Us: +91 90000
00000</p>
</center>
</div>
</footer>
</body>
</html>