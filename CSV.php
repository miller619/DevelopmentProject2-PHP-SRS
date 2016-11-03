<?php
    // mysql database connection details
    include_once ("database/database_inventory.php");

    // open connection to mysql database
    //$connection = mysqli_connect($host, $username, $password, $dbname) or die("Connection Error " . mysqli_error($connection));
    
    // fetch mysql table rows
    //$sql = "select * from sales";
    //$result = mysqli_query($connection, $sql) or die("Selection Error " . mysqli_error($connection));

    $sql_table = "sales";
      
    $query = "SELECT inventory.itemID,inventory.itemName,inventory.itemPrice, sales.date, sales.time, inventory.itemCategory,sales.itemId, sales.SalesID, sales.itemQuantity FROM inventory INNER JOIN sales ON sales.itemID = inventory.itemID";
      
      
    $result = mysqli_query($connect_mysqli, $query);

    $fp = fopen('upload/sales.csv', 'w');

    while($row = mysqli_fetch_assoc($result))
    {
        fputcsv($fp, $row);
    }
    
    fclose($fp);

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
    </ul>
    </nav>
  </header>

  <body>
      <h1>CSV report generated</h1>
      <p>check upload folder for the file</p>
  </body>
<footer>
       <div id="Footer"> Copyright &copy; 2016  All rights reserved. VAT no. IT 0146971728 </div> 
</footer>
</html>
