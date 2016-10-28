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
		</ul>
    </nav>
	</header>

<body>
		<div class="page">
		<hr/>
		
		<h1>Enter Details of new item</h1>
		<!-- <form method="post" name="contactForm" action="http://mercury.ict.swin.edu.au/it000000/formtest.php"> -->
		<form id="inventoryForm" action="submit_customer.php" method="post" onsubmit="return validate(this);" >
			<fieldset>
				<legend>Update Inventory</legend>
				<p>
					<label>CustomerID*: <input type="text" name="cID" id="cID" size="50"/></label>
					<span id="queryID" class="error"></span>
				</p>
				<p>
					<label>Customer Name*": <input type="text" name="name" maxlength="40" size="40"/></label>
					<span id="queryName" class="error">Must fill name</span>
				</p>
				<p>
					<label>Customer Email*: <input type="text" name="email" maxlength="40" size="40"/></label>
					<span id="queryEmail" class="error">Must fill email</span>
				</p>
				<p>
					<label>Customer Order*: <input type="text" name="order" maxlength="16" size="16"/></label>
					<span id="queryOrder" class="error">Must fill order name</span>
				</p>
			</fieldset>
			<p>
				<input type="submit" value="Submit Query" />
				<input type="reset" value="Reset"/>
			</p>
		</form>
		<hr/>
	</div>
</body>
<footer>
       <div id="Footer"> Copyright &copy; 2016  All rights reserved. VAT no. IT 0146971728 </div> 
</footer>
</html>