<?php
session_start();
$isLogin = false;

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="img/favicon-16x16.png?v1">
	<link rel="stylesheet" type="text/css" href="dist/style.css">
	<title></title>
</head>
<body>

	<header>

		<div class="parent">
		<div class="logo">
			<a href="home.php"><img src="img/mcdo.png"></a>
			<a href="home.php"><h3>MarcDonald's</h3></a>
		</div>

		<div class="nav">
			<ul>
				<li><a href="menu.php">MENU</a></li>
				<li><a href="checkout.php">SHOPPING CART</a></li>
				<?php

					if(isset($_SESSION['result']) and $_SESSION['result'] > 0 ){

				 ?>
				<li><a href="index.php?logout=true">LOGOUT</a></li>

			 	<?php

					}

					 else{

				?>
				<li><a href="index.php">LOGIN</a></li>
			<?php

					}
				?>
			</ul>
		</div>
	</div>
	</header>

