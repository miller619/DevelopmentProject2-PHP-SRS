<!--This is used to update the inventory database-->


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
		</ul>
    </nav>
	</header>

<body>
		<div class="page">
		<hr/>
		
		<h1>Enter Details of new item</h1>
		<!-- <form method="post" name="contactForm" action="http://mercury.ict.swin.edu.au/it000000/formtest.php"> -->
				<form id="myform"  action="submit_inventory.php" method="post">
		<fieldset>
				<legend>Update Inventory</legend>
			<table>
				<tr>
					<td > Item ID</td>
					<td>
					<input type="text" name="itemID" id="itemID" value=""placeholder="Enter ID"/>						
					</td>
				</tr>
				<tr>
					<td > Item Name</td>
					<td><input type="text"   id="itemName" name="itemName" placeholder="Enter Item Name"/></td>
				</tr>
				<tr>
					<td >Item Category</td>
					<td><Select id="itemCategory" name="itemCategory" type="text"  maxlength="" placeholder="Enter Item Category">
					<option> Medicine</option>
					<option>ABC</option>
					<option>XYZ</option>
					</Select></td>
				</tr>
				<tr>
					<td >Item Price</td>
					<td><input id="itemPrice"  name="itemPrice" type="text"  maxlength="" placeholder="Enter Item Price"></td>
				</tr>
				<tr>
					<td >Item Quantity</td>
					<td><input id="itemQuantity"  name="itemQuantity" type="text"  maxlength="" placeholder="Enter Item Quantity"></td></td>
				</tr>
				
						</table>
					</fieldset>
				</td>
				</tr>
				<tr>
					<td><input type="submit" value="Submit"></></td>
					<td><input type="reset" value="Reset"/></td>
				</tr>
			</table>
			</form>
			
			
		</form>
		<hr/>
	</div>
</body>
<footer>
       <div id="Footer"> Copyright &copy; 2016  All rights reserved. VAT no. IT 0146971728 </div> 
</footer>
</html>
