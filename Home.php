<!--home page displaying the inventory-->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="styles.css"/>
<div class="bg">
<header>
       <nav>
      <ul>
        <li class="tours"><a href="Home.php">Inventory</a>
          <ul>
            <li><a href="update_inventory.php">Add</a></li>
            
          </ul>
        </li>
        <li class="aboutus"><a href="display_sales.php">Sales</a>
          <ul>
            <li><a href="update_sales.php">Add</a></li>
           
          </ul>
        </li>
			<li class="aboutus"><a href="display_customer.php">Customer</a>
          <ul>
            <li><a href="update_customer.php">Add</a></li>
            
          </ul>
        </li>
		<li class="Disclaimer"><a href="disclaimer.html">Disclaimer</a></li>
		</ul>
	       	<script>
			function deleletconfig(){

				var del=confirm("Are you sure you want to delete this record?");
				if (del==true){
				   alert ("record deleted")
				}
				return del;
			}
		</script>
    </nav>
	</header>

	<body>
		<hr/>
			<h1 align="center" >Inventory</h1>
		<hr/>

		<?php
			//connection information
      include_once ("database/database_inventory.php");

				//select table
				$sql_table = "inventory";

				//set sql command to add data to the table
				$query = "select * FROM inventory";

				$result = mysqli_query($connect_mysqli, $query);

				//check if execution was successfull
				if (!$result){
					echo"<p> Something is wrong with ",  $query,"</p>";
				}else{
					//display retrivefd record
					
					echo"<table border='1' align='center'>";
					echo"<table border='1' align='center'>";
					echo"<tr>"
						."<th scope=\"col\">Item ID</th>"
						."<th scope=\"col\">Item Name</th>"
						."<th scope=\"col\">Item Category</th>"
						."<th scope=\"col\">Item Quantity</th>"
						."<th scope=\"col\">Item Price</th>";
						 if($_SESSION['user'] == '1')
						 {
						echo"<th scope=\"col\">Delete</th>";
					}else
					{

					}
						echo"</tr>";

						//loop through the database/database_inventory
						while ($row = mysqli_fetch_assoc($result))
						{
							echo"<tr>";
							echo"<td>", $row["itemID"],"</td>";
							echo"<td>", $row["itemName"],"</td>";
							echo"<td>", $row["itemCategory"],"</td>";
							echo"<td>", $row["itemQuantity"],"</td>";
							echo"<td>", $row["itemPrice"],"</td>";
							?>
							
							<?php 
							
						
						 if($_SESSION['user'] == '1')
						 {
							
							  echo '<td>
							<a onclick="return deleletconfig()" href="itemDelete.php?id=  $row[itemID]">Delete</a>
							</td>';
						 }
						 else
						 {
							
						 }
						
							?>
							
							<?php echo"</tr>";
						}
						echo"</table>";

						mysqli_free_result($result);
				}

        mysqli_close($connect_mysqli);

		?>
		</br>
		</br>
		</hr>
		<h2> Search </h2>
		<form name="searchform" method="post" action="searchresults.php"/>
				<input name="search" type="text" size="40" maxlength="50"/>
				<input type="submit" name="Submit" value="Search"/>
			</form>
	</body>
	<footer>
       <div id="Footer"> Copyright &copy; 2016  All rights reserved. VAT no. IT 0146971728 </div>
</footer>
</html>
