<!DOCTYPE html>
<html>
<head>
	<title>setting page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<a href="index.php"><div class="navbar-brand"> Fancy Store</div></a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>cart</a></li>
				<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>

			</ul>
		</div>
	</nav>
	


	<div class="panel panel-primary">
		<div class="panel panel-heading"><h3>Change Password</h3></div>
		<div class="panel panel-body">
			<div class="form-group">
				<label for="opwd"></label>

				<input type="text" name="opwd" class="form-control" id="opwd" placeholder="Old password">
			</div>
			<div class="form-group">
				<label for="npwd"></label>
				<input type="text
				" name="npwd" class="form-control" id="npwd" placeholder=" New password">
			</div>
			<div class="form-group">
				<label for="rnpwd"></label>
				<input type="text
				" name="rnpwd" class="form-control" id="rnpwd" placeholder="Re-type New password">
			</div>
			
			<button type="submit" class="btn btn-primary">Change</button>

		</div>
		<div class="panel panel-footer">Change User Name <a href="setting.php">Click Here</a></div>
	</div>
</div>
</div>
</div>

	
	<div id="setting_footer"><center>Copyright © Fancy Store. All Rights
Reserved| and |Contact Us: +91 90000 00000􀆉</center></div>
		
</body>
</html>