<!--home page displaying the inventory-->
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
		<hr/>
			<h1>Inventory</h1>
		<hr/>
		
		<?php			
			//connection information
			require_once ("database_inventory.php");
			
			//check if the connection is successful
			$conn = @mysqli_connect(
					$host,
					$user,
					$pwd,
					$sql_db
			);
			
			
			if (!$conn){
				echo"<p>Connection error</p>";
			}
			else{
				
				//select table
				$sql_table = "inventory";
				
				//set sql command to add data to the table
				$query = "select itemID, itemName, itemCategory, itemQuantity FROM inventory";
							
				$result = mysqli_query($conn, $query);
				
				//check if execution was successfull
				if (!$result){
					echo"<p> Something is wrong with ",  $query,"</p>";
				}else{
					//display retrivefd record
					echo"<table border='1'>";
					echo"<tr>"
						."<th scope=\"col\">Item ID</th>"
						."<th scope=\"col\">Item Name</th>"
						."<th scope=\"col\">Item Category</th>"
						."<th scope=\"col\">Item Quantity</th>"
						."</tr>";
						
						//loop through the database/database_inventory
						while ($row = mysqli_fetch_assoc($result))
						{
							echo"<tr>";
							echo"<td>", $row["itemID"],"</td>";
							echo"<td>", $row["itemName"],"</td>";
							echo"<td>", $row["itemCategory"],"</td>";
							echo"<td>", $row["itemQuantity"],"</td>";
							echo"</tr>";
						}
						echo"</table>";
						
						mysqli_free_result($result);
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