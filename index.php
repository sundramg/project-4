<?session_start();
include "connect_db.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Fancy Store</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
	   		<div class="container">
	   			<div class="navbar-header">
	   				<a href="homepage.php"><div class="navbar-brand"> Fancy Store</div></a>
            
	   			</div>
	   				<ul class="nav navbar-nav navbar-right">
	   					<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>signup</a></li>
	   					<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>login</a></li>
	   				</ul>
	  		</div>
   		</nav>
   		<div id="banner_img">
   			<div class="container2">
   				<div id="banner_content">
   					<h1>We sell lifestyle</h1>
   					<p> Flat 60% OFF on premium brands</p>
   					<a href="product.php"><button class="btn btn-danger btn lg-active ">Shop Now</button></a>
   				</div>
   			</div>
   		</div>
      <div class="row">
      <center>
      <div class="col-md-3 col-sm-3" >
        <div class="thumbnail">
          <img src="img/camera.jpg">
          <caption>
            <h3>Luxury cameras</h3>
            <p>Starting From:19999.00</p>
            <button class="btn btn-primary">Go For Cameras</button>
          </caption>
        </div>
      </div>

      <div class="col-md-3 col-sm-3" >
        <div class="thumbnail">
          <img src="img/shirt.jpg">
          <caption>
            <h3>Branded Shirts</h3>
            <p>Starting From:999.00</p>
            <button class="btn btn-primary">Go For Shirts</button>
          </caption>
        </div>
      </div>
      <div class="col-md-3 col-sm-3" >
        <div class="thumbnail">
          <img src="img/trouser.jpg">
          <caption>
            <h3>Branded Jeans</h3>
            <p>Starting From:599.00</p>
            <button class="btn btn-primary">Go For Jeans</button>
          </caption>
        </div>
      </div>
      <div class="col-md-3 col-sm-3" >
        <div class="thumbnail">
          <img src="img/watch.jpg">
          <caption>
            <h3>Luxury watches</h3>
            <p>Starting From:1199.00</p>
            <button class="btn btn-primary">Go For Watches</button>
          </caption>
        </div>
      </div>
      </center>
    </div>
   		
  <div id="login_footer"><center>Copyright © Fancy Store. All Rights
Reserved| and |Contact Us: +91 90000 00000􀆉</center></div>
</body>
</html>