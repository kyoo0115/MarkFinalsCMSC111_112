<?php 
	session_start();
	$conn = new mysqli('localhost', 'root', '', 'marcdonald');

	if ($conn->connect_error) {
		  	die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT * FROM login where username = '".$_SESSION['uname']."' AND password = '".$_SESSION['pword']."'";
		$result = $conn->query($sql);

	if(isset($_SESSION['result'])){

			$_SESSION['result'] = $result->num_rows;
		}	

	else {
			$_SESSION['result'] = 0;
		}

		if ($result->num_rows > 0) {

   echo 'Login Success!';
} else {
   echo 'Invalid Inputs!';
}
include 'header.php';

if ($result->num_rows > 0) {
	$pID = 0;
	$pName = "";
	$pImage = "";
	$pPrice = 0;

	if(isset($_GET['productID'], $_GET['productName'], $_GET['productImage'], $_GET['productPrice'])){
		$pID = $_GET['productID'];
		$pName = $_GET['productName'];
		$pImage = $_GET['productImage'];
		$pPrice = $_GET['productPrice'];

	}
			  // output data of each row
?>

<div class="individual-parent">
	<div class="individual-width">
		<div class="individual-menu">
					<img src="<?php

			echo $pImage;
			
			?>">
			<h1>
				<?php 
					echo $pName;
				?>	

			</h1>
		
			<p>Value Meal Size</p>
			<div class="value-size">
				<button onclick="clicked(this.id)" id="regular">regular</button>
				<button onclick="clicked(this.id)" id="medium">medium</button>
				<button onclick="clicked(this.id)" id="large">large</button>
			</div>

			<p>Quantity</p>

			<div class="quantity">
				<button onclick="minus()"><img src="img/negative.png"></button>
				<h1 id="quantity">1</h1>
				<button onclick="plus()"><img src="img/additionalicon.png"></button>
			</div>

			<p>Price</p>

			<div class="price">
				<p>PHP</p>
				<h1 id="price">

					<?php 
						echo $pPrice;
					?>	

				</h1>
			</div>

		</div>
		<div class="drinks">

			<h1>Select Drink</h1>
				<div class="indenter">
					<div class="drinks-images">
						<div class="drink-div" id="coke"><img src="img/coke.png"><button onclick="drinkClicked('coke')">coke</button></div>
						<div class="drink-div" id="cokeZero"><img src="img/cokezero.png"><button onclick="drinkClicked('cokeZero')">coke zero</button></div>
						<div class="drink-div" id="sprite"><img src="img/sprite.png"><button onclick="drinkClicked('sprite')">sprite</button></div>
						<div class="drink-div" id="cokeFloat"><img src="img/cokefloat.png"><button onclick="drinkClicked('cokeFloat')">coke float</button></div>
					</div>
				</div>

			<h1>
				Drink Size
			</h1>
			<div class="drink-images">

				<div id= "regulars" class="drinks-div"><img src="img/drink-reg.png"><p>regular</p></div>
				<div id= "mediums" class="drinks-div"><img src="img/drink-med.png"><p>medium</p></div>
				<div id= "largs"class="drinks-div"><img src="img/drink-large.png"><p>large</p></div>

			</div>

			<div class="indenters">
			</div>
			<div class="shopping-bag">
				<?php

					if ($_SERVER["REQUEST_METHOD"] == "POST")
					{
					$sql = "INSERT INTO checkout (productName, productImage, productQuantity, productDrink, productSize, totalPrice)";
					$sql .= "VALUES ('".$_POST['pName']."' , '".$_POST['pImage']."', '".$_POST['pQuantity']."', '".$_POST['pDrinks']."' , '".$_POST['pSize']."', '".$_POST['pPrice']."')";

					echo $sql;
					if($conn->query($sql)){
						echo "created successfully!";

						header("location: checkout.php");
					}
				}

				?>
					<form method="post">
						<input type="text" name="pID" value="<?php echo $pID; ?>">
						<input type="text" name="pName" value="<?php echo $pName; ?>">
						<input type="text" name="pImage" value="<?php echo $pImage; ?>">
						<input type="text" name="pPrice" id= "pPrice">
						<input type="text" name="pSize" id="pSize">
						<input type="text" name="pDrinks" id="pDrinks">
						<input type="text" name="pQuantity" id="pQuantity">

						<button type="submit">
							<!-- <a href="checkout.php">add to my bag</a> -->
							<h1>Add to my bag</h1>
						</button>
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