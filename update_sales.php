<!--This is used to update the sales Table-->

<?php
	include_once ("database/database_inventory.php");
	$query="SELECT * FROM inventory";
	$result = mysqli_query($connect_mysqli, $query);
	
	$dd=array();
	while($row=mysqli_fetch_array($result)){
		$dd[]=$row;
	}
	
?>

<!Doctype html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="styles.css"/>
<script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>


<!Doctype html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="styles.css"/>
<div class="bg">
<header>
       <nav>
      <ul>
        <li class="tours"><a href="index.php">Inventory</a>
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
		<form id="myform"  action="submit_sales.php" method="post">
		<fieldset>
				<legend>Update Sales</legend>
			<table>
				<tr>
					<td > Item ID:</td>
					<td>
						<select name="itemd" onchange="return updateItem(this)">
							<?php
							$x=0;
								foreach($dd as $d){
							?>
							<option value="<?php echo $x; $x++; ?>"><?php echo $d["itemID"]; ?></option>
								<?php } ?>
						</select>
						
					</td>
					<input type="hidden" id="itemID" name="itemID" value="" placeholder=""/>
				</tr>
				<tr>
				<tr>
					<td > Item Name</td>
					<td><input type="text" disabled="disabled"  id="itemName" name="itemName" placeholder=""/></td>
				</tr>
				<tr>
					<td >Item Category</td>
					<td><input id="itemCategory" disabled="disabled" name="itemCategory" type="text"  maxlength="" placeholder=""></td>
				</tr>
				<tr>
					<td >Item Quantity</td>
					<td><input id="itemQuantity" name="itemQuantity" type="text"  maxlength="" placeholder="Enter quantity"></td>
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
		<hr/>
	</div>
</body>
<footer>
       <div id="Footer"> Copyright &copy; 2016  All rights reserved. VAT no. IT 0146971728 </div> 
</footer>
</html>
