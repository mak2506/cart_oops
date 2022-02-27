<?php
session_start();
//include 'config.php';
include 'index.php';

echo "<pre>";
print_r($_SESSION["cart"]);
 echo "</pre>";

?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Products
	</title>
	<link href="style.css" rel="stylesheet">
</head>
<body>

	<div id="main">
        <a href="logout.php">Logout</a>
		<div id="products">

			<?php 
			#displaying products
				showProducts();
			?>

		</div>
	</div>
	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="script.js"></script>
</body>
</html>