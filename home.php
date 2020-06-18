<title>Home</title>
<?php 
	session_start();
	$conn = new mysqli('localhost', 'root', '', 'marcdonald');

	if ($conn->connect_error) {
		  	die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT username, password FROM login WHERE username = '".$_SESSION['uname']."' AND password = '".$_SESSION['pword']."' ";
		$result = $conn->query($sql);

	if(isset($_SESSION['result'])){

			$_SESSION['result'] = $result->num_rows;
		}	

	else {
			$_SESSION['result'] = 0;
		}
$conn->close();
	include 'header.php';

	if ($result->num_rows > 0) {
		  // output data of each row

?>

<div class="main">

	<div class="banner">

<h1>Welcome to MarcDonald's</h1>
<p>Welcome to my website, presenting it to my professor for my course code 111 and 112, to Sir Jon Cruz!</p>
	</div>

	<div class="menu-content">

		<div class="mcdo1">
			<a href="productsCategory.php?cat=chicken"><img src="img/mcdo1.jpg"></a>
			<a href="productsCategory.php?cat=spag"><img src="img/mcdo2.jpg"></a>
		</div>

		<div class="mcdo2">
			<a href="productsCategory.php?cat=burger"><img src="img/mcdo3.jpg"></a>
		</div>

		<div class="mcdo3">
			<a href=""><img src="img/mcdo4.jpg"></a>
			<a href=""><img src="img/mcdo5.jpg"></a>
		</div>

	</div>

</div>

<?php  
}
	else{
		header("Location: index.php?invalidInput=true");
	}
	include 'footer.php';
?>