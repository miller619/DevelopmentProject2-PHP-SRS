<!--This is used to update the inventory database-->


<!Doctype html>
<html lang="en">

<body>
		<div class="page">
		<hr/>
		
		<h1>Enter Details of new item</h1>
		<!-- <form method="post" name="contactForm" action="http://mercury.ict.swin.edu.au/it000000/formtest.php"> -->
		<form id="inventoryForm" action="submit_inventory.php" method="post" onsubmit="return validate(this);" >
			<fieldset>
				<legend>Update Inventory</legend>
				<p>
					<label>ItemID*: <input type="text" name="iID" id="iID" size="50"/></label>
					<span id="queryID" class="error">Must Enter name../..can contain alphabet or number../..Cannot be more than 50 charecters</span>
				</p>
				<p>
					<label>ItemName*": <input type="text" name="name" maxlength="40" size="40"/></label>
					<span id="queryName" class="error">Must fill name</span>
				</p>
				<p>
					<label>ItemCategory*: <input type="text" name="category" maxlength="40" size="40"/></label>
					<span id="queryCat" class="error">Must fill category</span>
				</p>
				<p>
					<label>ItemQuantity*: <input type="number" name="quantity" maxlength="16" size="16" placeholder="digits only"/></label>
					<span id="queryQuan" class="error">Must fill quantity</span>
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