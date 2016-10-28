<!--home page displaying the sales-->
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="styles.css"/>
<div class="bg">
<header>
       <nav>
      <ul>
        <li class=""><a href="Home.php">Inventory</a>
          <ul>
            <li><a href="update_inventory.php">Add</a></li>
           
          </ul>
        </li>
        <li class=""><a href="display_sales.php">Sales</a>
          <ul>
            <li><a href="update_sales.php">Add</a></li>
            
          </ul>
        </li>
			<li class=""><a href="display_customer.php">Customer</a>
          <ul>
            <li><a href="update_customer.php">Add</a></li>
            
          </ul>
        </li>
		<li class="Disclaimer"><a href="disclaimer.html">Disclaimer</a></li>
		</ul>
    </nav>
	</header>

	<body>
		<hr/>
			<h1>Sales</h1>
		<hr/>
		
		<?php			
			//connection information
			include_once ("database/database_inventory.php");
			
			//select table
			$sql_table = "sales", "inventory";
			
			//set sql command to add data to table
			$query = "Select * itemID, itemName, itemCategory, itemPrice from inventory";
			
			$result = mysqli_query($connect_mysqli, $query);
			if ($result->num_rows > 0) {
			// output data of each row
				while($row = $result->fetch_assoc()) {
					 echo "</br><h1>". $row["itemID"]."</h1>";?>
				
</html>				