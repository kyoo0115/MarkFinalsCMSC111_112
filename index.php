<title>Login</title>
<?php 
	include 'header.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if(isset($_POST['username'], $_POST['password'])){
	  	
	  	$_SESSION['uname'] = $_POST['username'];
		$_SESSION['pword'] = $_POST['password'];
		$_SESSION['result'] = 0;
		header('Location: home.php');

	}
}
	if (isset($_GET['logout'])) {
		session_unset();
		header('Location: index.php');
	}
?>
<link rel="stylesheet" type="text/css" href="src/style.css">
<div class="login-screen">
	<div class="login-parent">
		<div class="logo-image">
			<img src="img/mcdo.png">
		</div>
		<div class="login-form">
			<form method="post" class="forms">
				<input type="text" name="username" placeholder="Email">
				<input type="password" name="password" placeholder="Password">
				<button type="submit">LOGIN</button>
				<?php
				if(isset($_GET['invalidInput'])){

				?>
				<h1>Invalid username/Password. Please try again!</h1>
				<?php
			}
				?>
			</form>
		</div>
	</div>
</div>

<?php  
	include 'footer.php';
?>
