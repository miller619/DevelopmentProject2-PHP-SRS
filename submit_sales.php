<!--this page is used to insert the data to the sales table-->
<!DOCTYPE html>
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
	
	<h1>Update confirmation</h1>
		<hr/>
		
		<?php
		
		include_once ("database/database_inventory.php");
		if(isset($_POST['itemID']) && $_POST['itemID']!="" && isset($_POST['itemQuantity']) && $_POST['itemQuantity']!=""){
			$q="INSERT INTO sales(itemID,itemQuantity,date,time) VALUES('".$_POST['itemID']."','".$_POST['itemQuantity']."','".date("Y-m-d")."','".date("H:i:s")."')";
			mysqli_query($connect_mysqli,$q);
			echo "Data successfully saved";
		}else{
			echo "Missin required data";
		}
			
			?>
	</body>
<footer>
       <div id="Footer"> Copyright &copy; 2016  All rights reserved. VAT no. IT 0146971728 </div> 
</footer>
</html>
