<?php
    // mysql database connection details
    include_once ("database/database_inventory.php");

    // open connection to mysql database
    //$connection = mysqli_connect($host, $username, $password, $dbname) or die("Connection Error " . mysqli_error($connection));
    
    // fetch mysql table rows
    //$sql = "select * from sales";
    //$result = mysqli_query($connection, $sql) or die("Selection Error " . mysqli_error($connection));

    $sql_table = "sales";
		
	if(isset($_POST['dateinput1']) && $_POST['dateinput2']!=""){
	
    $query = "SELECT inventory.itemID,inventory.itemName,inventory.itemPrice, sales.date, sales.time, inventory.itemCategory, sales.SalesID, sales.itemQuantity FROM inventory INNER JOIN sales ON sales.itemID = inventory.itemID WHERE sales.date BETWEEN '".$_POST['dateinput1']."' AND '".$_POST['dateinput2']."'";
      
      
    $result = mysqli_query($connect_mysqli, $query);

    $filename = 'report/'.strtotime("now").'.csv';
	$fp = fopen($filename, 'w');
	fputcsv ($fp, array('Item ID', 'Item Name', 'Item Price', 'Sales Date', 'Sales time', 'Item category', 'Sales Id', 'Sales Quantity'));

    while($row = mysqli_fetch_assoc($result))
    {
fputcsv($fp, $row);
	
    }
	fclose($fp);
	}else{
		echo "Please select date";
	}
		
    
    

    //close the db connection
    mysqli_close($connect_mysqli);
?>
<!--home page displaying the sales-->
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="styles.css"/>
<div class="bg">
<header>
       <nav>
      <ul>
        <li class=""><a href="Home.php">Inventory</a>
          <ul>
            <li><a href="update_inventory.php">Add</a></li>
           
          </ul>
        </li>
        <li class=""><a href="display_sales.php">Sales</a>
          <ul>
            <li><a href="update_sales.php">Add</a></li>
            
          </ul>
        </li>
      <li class=""><a href="display_customer.php">Customer</a>
          <ul>
            <li><a href="update_customer.php">Add</a></li>
            
          </ul>
        </li>
    <li class="Disclaimer"><a href="disclaimer.html">Disclaimer</a></li>
	<li class=""><a href="logout.php">Log out</a></li>
    </ul>
    </nav>
  </header>

  <body>
      <h1>CSV report generated</h1>
      <p>check report folder for the file</p>
  </body>
<footer>
       <div id="Footer"> Copyright &copy; 2016  All rights reserved. VAT no. IT 0146971728 </div> 
</footer>
</html>
