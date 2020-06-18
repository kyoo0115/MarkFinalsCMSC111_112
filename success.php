<?php 
	include 'header.php';
	$price = 0;

	if(isset($_GET['totalPrice'])){
		$price = $_GET['totalPrice'];
	}
?>

	<div class="success">
		<div class="success-background">
			<h1>Your order is successful! Driver is on his way!</h1>
			<p>Total price: PHP  <?php echo $price ?>.00 </p>
			<p>Please wait for our delivery! Thanks!</p>
		</div>
	</div>



<?php 
	include 'footer.php';
?>