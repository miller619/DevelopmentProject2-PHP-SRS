<!--home page displaying the Customer--><!DOCTYPE html><link rel="stylesheet" type="text/css" href="styles.css"/><link rel="stylesheet" type="text/css" href="search.css"/><html lang="en">	<header>       <nav>      <ul>        <li class="tours"><a href="Home.php">Inventory</a>          <ul>            <li><a href="update_inventory.php">Add</a></li>                     </ul>        </li>        <li class="aboutus"><a href="display_sales.php">Sales</a>          <ul>            <li><a href="update_sales.php">Add</a></li>                      </ul>        </li>		<li class="aboutus"><a href="display_customer.php">Customer</a>          <ul>            <li><a href="update_customer.php">Add</a></li>          </ul>        </li>		<li class="Disclaimer"><a href="disclaimer.html">Disclaimer</a></li>		<li class=""><a href="logout.php">Log out</a></li>		</ul>    </nav>	<script>function myFunction() {  var input, filter, table, tr, td, i;  input = document.getElementById("myInput");  filter = input.value.toUpperCase();  table = document.getElementById("myTable");  tr = table.getElementsByTagName("tr");  for (i = 0; i < tr.length; i++) {    td = tr[i].getElementsByTagName("td")[1];    if (td) {      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {        tr[i].style.display = "";      } else {        tr[i].style.display = "none";      }    }  }}</script>	</header>	<body>		<hr/>			<h1>Customer</h1>		<hr/>				<?php						//connection information			include_once ("database/database_inventory.php");						$sql_table = "customer";						$query = "Select * from customer";									$result = mysqli_query($connect_mysqli, $query);								//check if execution was successfull				if (!$result){					echo"<p> Something is wrong with ",  $query,"</p>";				}else{					?> <input type="text" id="myInput"  onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">					<table id= "myTable" align='center'>											    					    						<tr class="header"> 							<th>Customer ID</th>							<th>Customer Name</th>							<th>Customer email</th>							<th>Customer Order</th>							</tr>						<?php						//loop through the database/database_Customer						while ($row = mysqli_fetch_assoc($result))						{							echo"<tr>";							echo"<td>", $row["customerID"],"</td>";							echo"<td>", $row["customerName"],"</td>";							echo"<td>", $row["customerEmail"],"</td>";							echo"<td>", $row["customerOrder"],"</td>";							echo"</tr>";						}						echo"</table>";												mysqli_free_result($result);				}					mysqli_close($connect_mysqli);					?>	</body>	<footer>       <div id="Footer"> Copyright &copy; 2016  All rights reserved. VAT no. IT 0146971728 </div> </footer></html>