<!DOCTYPE html>
<html>
<head>
	<title>cart page</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a href="index.php"><div class="navbar-brand"> Fancy Store</div></a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
					<li><a href="setting.php"><span class="glyphicon glyphicon-cog"></span>Setting</a></li>
						<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Log out</a></li>
			</ul>
		</div>
	</nav>
	
	<table class="table table-striped">
		
		<thead>
		<tr>
			<th>Item No</th>
			<th>Item Name</th>
			<th>Price</th>
			<th> </th>
		</tr>
		</thead>
		<tbody>
			<tr>
			<td> </td>
			<td> </td>
			<td> </td>
			<td> </td>
		</tr>
		<tr>
			<td> </td>
			<td>Total</td>
			<td> </td>
			<td><a href="success.php"> <button class="btn btn-primary">confirm order</button></a></td>
		</tr>
		</tbody>
			
	</table>
	

	<div id="cart_footer"><center>Copyright © Fancy Store. All Rights
Reserved| and |Contact Us: +91 90000 00000􀆉</center></div>
		
</body>
</html>