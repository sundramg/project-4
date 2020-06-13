<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="store";
// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if ($con) {
	?>
   
	<?php
}else{
	?>
    <script>
    	alert("no connection")
	</script>
	<?php

}

?>
