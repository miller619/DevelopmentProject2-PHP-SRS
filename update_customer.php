<!--This is used to update the customer database-->
<!Doctype html>
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
		<li class=""><a href="#">Log out</a></li>
		</ul>
    </nav>
	</header>

<body>
		<div class="page">
		<hr/>
		
		<h1>Enter Details of new item</h1>
		<!-- <form method="post" name="contactForm" action="http://mercury.ict.swin.edu.au/it000000/formtest.php"> -->
		<form id="myform"  action="submit_customer.php" method="post">
			<fieldset>
				<legend>Add Customer</legend>
			
				<table>
				<tr>
					<td > CustomerID</td>
					<td>
					<input type="text" name="cID" id="cID" placeholder="Enter ID"/>						
					</td>
				</tr>
				<tr>
					<td > Customer Name</td>
					<td><input type="text" name="name" maxlength="40"  placeholder="Enter Customer Name"/></td>
				</tr>
				<tr>
					<td >Email</td>
					<td><input type="text" name="email" maxlength="40" placeholder="Enter Item Price"></td>
				</tr>
				<tr>
					<td >Order</td>
					<td><<input type="text" name="order"   maxlength="" placeholder="Enter customer order"></td></td>
				</tr>
				
						</table> </fieldset>
			
				<input type="submit" value="Submit Query" />
				<input type="reset" value="Reset"/>
			
		</form>
		<hr/>
	</div>
</body>
<footer>
       <div id="Footer"> Copyright &copy; 2016  All rights reserved. VAT no. IT 0146971728 </div> 
</footer>
</html>