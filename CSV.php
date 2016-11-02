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