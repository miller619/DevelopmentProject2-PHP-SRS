<!--home page displaying the Customer--><!DOCTYPE html><link rel="stylesheet" type="text/css" href="styles.css"/><html lang="en">	<header>       <nav>      <ul>        <li class="tours"><a href="index.php">Inventory</a>          <ul>            <li><a href="update_inventory.php">Add</a></li>            <li><a href="">Remove</a></li>          </ul>        </li>        <li class="aboutus"><a href="display_sales.php">Sales</a>          <ul>            <li><a href="update_sales.php">Add</a></li>            <li><a href="">Remove</a></li>          </ul>        </li>		<li class="aboutus"><a href="display_customer.php">Customer</a>          <ul>            <li><a href="update_customer.php">Add</a></li>            <li><a href="remove_customer.php">Remove</a></li>          </ul>        </li>		<li class="Disclaimer"><a href="disclaimer.html">Disclaimer</a></li>		</ul>    </nav>	</header>	<body>		<hr/>			<h1>Customer</h1>		<hr/>				<?php						//connection information			include_once ("database/database_inventory.php");						$sql_table = "customer";						$query = "Select * from customer";									$result = mysqli_query($connect_mysqli, $query);								//check if execution was successfull				if (!$result){					echo"<p> Something is wrong with ",  $query,"</p>";				}else{					//display retrivefd record					echo"<table border='1'>";					echo"<tr>"						."<th scope=\"col\">Customer ID</th>"						."<th scope=\"col\">Customer Name</th>"						."<th scope=\"col\">Customer Email</th>"						."<th scope=\"col\">Customer Order</th>"						."</tr>";												//loop through the database/database_Customer						while ($row = mysqli_fetch_assoc($result))						{							echo"<tr>";							echo"<td>", $row["customerID"],"</td>";							echo"<td>", $row["customerName"],"</td>";							echo"<td>", $row["customerEmail"],"</td>";							echo"<td>", $row["customerOrder"],"</td>";							echo"</tr>";						}						echo"</table>";												mysqli_free_result($result);				}					mysqli_close($connect_mysqli);					?>	</body>	<footer>       <div id="Footer"> Copyright &copy; 2016  All rights reserved. VAT no. IT 0146971728 </div> </footer></html>