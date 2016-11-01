<!--this page is used to insert the data to the inventory table-->
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="styles.css"/>
<script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
<div class="bg">
<header>
       <nav>
      <ul>
        <li class="tours"><a href="Home.php">Inventory</a>
          <ul>
            <li><a href="update_inventory.php">Add</a></li>
            <li><a href="">Remove</a></li>
          </ul>
        </li>
        <li class="aboutus"><a href="display_sales.php">Sales</a>
          <ul>
            <li><a href="update_sales.php">Add</a></li>
            <li><a href="">Remove</a></li>
          </ul>
        </li>
			<li class="aboutus"><a href="display_customer.php">Customer</a>
          <ul>
            <li><a href="update_customer.php">Add</a></li>
            <li><a href="">Remove</a></li>
          </ul>
        </li>
		<li class="Disclaimer"><a href="disclaimer.html">Disclaimer</a></li>
		</ul>
    </nav>
	</header>


	<body>

	<h1>Update confirmation</h1>
		<hr/>

		<?php


     include_once ("database/database_inventory.php");
		if(isset($_POST['itemID']) && $_POST['itemName']!="" && isset($_POST['itemCategory']) && isset($_POST['itemPrice']) && $_POST['itemQuantity']!="0")
		{$check = mysqli_query($connect_mysqli,"select * from inventory where itemID='".$_POST['itemID']."'");
				$checkrows= mysqli_num_rows($check);
				
				 if($checkrows>0) 
				 {
						?> "<script>alert("ID exists");</script>"; <?php
				 } 	else{
		 $query = "insert into inventory (itemID, itemName, itemCategory, itemPrice, itemQuantity)values ('".$_POST['itemID']."','".$_POST['itemName']."','".$_POST['itemCategory']."','".$_POST['itemPrice']."','".$_POST['itemQuantity']."')";
	
		mysqli_query($connect_mysqli, $query);
		
		echo "Data successfully saved";
		}}else{
			echo "Missing required data";
		}
			 
					 
		
			?>
	</body>
<footer>
       <div id="Footer"> Copyright &copy; 2016  All rights reserved. VAT no. IT 0146971728 </div>
</footer>
</html>
