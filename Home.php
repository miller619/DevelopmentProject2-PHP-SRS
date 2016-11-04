<!--home page displaying the inventory-->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="styles.css"/>
<link rel="stylesheet" type="text/css" href="login.css"/>
<link rel="stylesheet" type="text/css" href="search.css"/>
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
		<li class=""><a href="logout.php">Log out</a></li>
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
	<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
	</header>

	<body>
			<h1 align="center" >Inventory</h1> </br>
			
		<?php
			//connection information
      include_once ("database/database_inventory.php");

				$sql_table = "inventory";

				//set sql command to add data to the table
				$query = "select * FROM inventory";

				$result = mysqli_query($connect_mysqli, $query);
				
				$query1 = "select * FROM inventory WHERE itemQuantity <= 5";
				$result1 = mysqli_query($connect_mysqli, $query1);
				$row1 = mysqli_fetch_assoc($result1);
				
				if(!$result1){
					
				}else {
				while ($row1 = mysqli_fetch_assoc($result1)){
					?> <marquee> Item ID = <?php echo $row1["itemID"] ?>, Item Name=<?php echo $row1["itemName"] ?>  is low on quantity </marquee> 
				
				

	<?php
				}
				 
			}
			
				//check if execution was successfull
				if (!$result){
					echo"<p> Something is wrong with ",  $query,"</p>";
				}else{
					//display retrivefd record
					?>
					
					<input type="text" id="myInput"  onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
					<table id= "myTable" align='center'>
						
					    					    
						<tr class="header"> <th>Item ID</th>
							<th>Item Name</th>
							<th>Item Category</th>
							<th>Item Quantity</th>
							<th>Item Price</th>
							<th>Delete</th>	
						</tr>
<?php
						//loop through the database/database_inventory
						while ($row = mysqli_fetch_assoc($result))
						{
							echo"<tr>";
							echo"<td>", $row["itemID"],"</td>";
							echo"<td>", $row["itemName"],"</td>";
							echo"<td>", $row["itemCategory"],"</td>";
							echo"<td>", $row["itemQuantity"],"</td>";
							echo"<td>", $row["itemPrice"],"</td>";
							
							
						
						 if($_SESSION['user'] == '1')
						 {
							?>
							 
							 <td> <a onclick="return deleletconfig()" href="itemDelete.php?id=<?php echo $row['itemID'];?>">Delete</a> </td>
							 <?php
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

	</body>
	<footer>
       <div id="Footer"> Copyright &copy; 2016  All rights reserved. VAT no. IT 0146971728 </div>
</footer>
</html>
