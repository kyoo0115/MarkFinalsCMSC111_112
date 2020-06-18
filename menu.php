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

	include 'header.php';
	
	if ($result->num_rows > 0) {
		  // output data of each row
		
?>

<div class="menu-parent">

	<div class="indent">
		<?php
			$sql = "SELECT * FROM menu"; 
			$results = $conn->query($sql);
			
				if ($results->num_rows > 0) {
  // output data of each row
					while($row = $results->fetch_assoc()) {
				?>
		<div class="menu">

				<div class="menu-image1">
					<img src="<?php

						echo $row["productImage"];
					?>"> 

				</div>

				<div class="menu-div1">		
					<div class="menu-text1">
						<p>
							<?php 
								echo $row["productName"];
							?>	
						</p>

						<div class="div-menu">
							<p>
							<?php
								echo "PHP   ".$row["productPrice"];
							?>
								
							</p>
							<button><a href="individual.php?productID=<?php 
							echo $row["productID"]?>&productName=<?php echo $row['productName']?>&productImage=<?php echo $row['productImage']?>&productPrice=<?php echo $row['productPrice']?>">order</a></button>
						</div>
					</div>
				</div>

		</div>
	<?php
			}
				} else {
				  echo "0 results";
				}
				$conn->close();
	?>
	</div>

</div>

<?php  
}
	else{
		header("Location: index.php");
	}
	include 'footer.php';
?>
