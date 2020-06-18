<title>Checkout</title>
<?php 
	session_start();
 	$sum = 0;
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

	include 'header.php';
	
	if ($result->num_rows > 0) {
		  // output data of each row
		
			

?>

<div class="checkout">
	<div class="checkout-parent">
		<div class="checkout-row">
			<div class="checkout-row1">
				<div class="h1-div">
					<h1>YOUR BAG</h1>
					<h1>Quantity</h1>
					<h1>Total</h1>
				</div>
				<?php 
					$sql = "SELECT * FROM checkout"; 
					$results = $conn->query($sql);
				
						if ($results->num_rows > 0) {

							

							while($row = $results->fetch_assoc()) {

								?>
				<div class="product-item">
					<div class="product-image">
						<img src="<?php echo $row['productImage'] ?>">
						<div class="checkout-text">
							<p><?php echo $row['productName']?></p>
							
						</div>
					</div>
					<div class="checkout-quantity">
				
						<h1 id="quantity"><?php echo $row['productQuantity']?></h1>
					
					</div>
					<div class="total-checkout">
						<h1 id="price"><?php echo $row['totalPrice'] * $row['productQuantity']?></h1>
					</div>
				</div>

				<?php 

				$sum+= $row['totalPrice'] * $row['productQuantity'];

				}
			}

			?>
			</div>
			<div class="checkout-row2">
				<div class="checkout-background">
					<h1>ORDER SUMMARY</h1>
					<div class="checkout-text-parent">
						<div class="checkout-text1">
							<p>Subtotal</p>
							<p>Delivery Charge</p>
							<p>GRAND TOTAL</p>
						</div>
						<div class="checkout-text2">
							<p>Php <?php echo $sum; ?></p>
							<p>Php 49</p>
							<p>PHP <?php echo $sum + 49; ?></p>
						</div>
					</div>
				</div>
					<?php 
						if ($_SERVER["REQUEST_METHOD"] == "POST") {
							$sql = "DELETE FROM checkout";

							if($conn->query($sql)){
								header('Location: success.php?totalPrice='.($sum+49));
							}
						}
					?>
					<form method="post">
					<button type="submit">Checkout</button>
					</form>
					
			</div>
		</div>
	</div>
</div>

<?php  
}
	else{
		header("Location: index.php");
	}
	$conn->close();
	include 'footer.php';
?>

