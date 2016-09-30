<!--this page is used to insert the data to the inventory table-->
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="styles.css"/>
<div class="bg">
<header>
       <nav>
      <ul>
        <li class="tours"><a href="#">Inventory</a>
          <ul>
            <li><a href="update_inventory.php">Add</a></li>
            <li><a href="">Remove</a></li>
            <li><a href="display_inventory.php">View</a></li>
          </ul>
        </li>
        <li class="aboutus"><a href="#">Sales</a>
          <ul>
            <li><a href="update_sales.php">Add</a></li>
            <li><a href="">Remove</a></li>
            <li><a href="display_sales.php">View</a></li>
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
			$itemID = trim ($_POST["iID"]);
			$itemName = trim ($_POST["name"]);
			$itemCat = trim ($_POST["category"]);
			$itemQuantity = trim ($_POST["quantity"]);
					
			
			
			//connection information
			require_once ("database/database_inventory.php");
			
			//check if the connection is successful
			$conn = @mysqli_connect(
					$host,
					$user,
					$pwd,
					$sql_db
			);
			
			if (!$conn){
				echo"<p>Connection error</p>";
			}else{
				
				//select table
				$sql_table = "inventory";
				
				//set sql command to add data to the table
				$query = "insert into $sql_table (itemID, itemName, itemCategory, itemQuantity)
							values ('$itemID', '$itemName', '$itemCat', '$itemQuantity')";
							
				$result = mysqli_query($conn, $query);
				$result = $result + 1;
				//check if execution was successfull
				if (!$result){
					echo"<p class=\"wrong\">something is wrong with", $query,"</p>";
				}else{
					echo "<p class=\"OK\">Successfully added new Item</p>";
				}
					mysqli_close($conn);
			}
			?>
			
			<p><a href="update_inventory.php">Add</a></p>
			<p><a href="display_inventory.php">View</a></p>

	</body>
<footer>
       <div id="Footer"> Copyright &copy; 2016  All rights reserved. VAT no. IT 0146971728 </div> 
</footer>
</html>