<!--this page is used to insert the data to the customer table-->
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
            <li><a href="">Remove</a></li>
          </ul>
        </li>
        <li class="aboutus"><a href="display_sales.php">Sales</a>
          <ul>
            <li><a href="update_sales.php">Add</a></li>
            <li><a href="">Remove</a></li>
          </ul>
        </li>
			<li class="aboutus"><a href="display_customer.php">Customer</a>
          <ul>
            <li><a href="update_customer.php">Add</a></li>
            <li><a href="">Remove</a></li>
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
     $fields = [];
     $sanitizedData = [];

      // Fetch set fields
    	$fields[] = (isset($_POST['cID'])) ? $_POST["cID"] : null;
			$fields[] = (isset($_POST['name']))? $_POST["name"] : null;
			$fields[] = (isset($_POST['email']))? $_POST["email"] : null;
			$fields[] = (isset($_POST['order']))? $_POST["order"] : null;

      foreach ($fields as $key => $value) {
        if ($value == null){
          echo "Notice: Please fill in the fields";
           return false;
        }
      }

      // sanitizes field data  and return clean data
      function sanitizeFields($fields,$con){
        $data = [];
        foreach ($fields as $key => $value) {
          mysqli_escape_string($con, $value);
          strip_tags($value);
          trim($value);
          $data[] = $value;
        }

        return $data;
      }

      // Fetch sanitized data
      $sanitizedData = sanitizeFields($fields,$connect_mysqli);

			  //select table
				$sql_table = "customer";

				//set sql command to add data to the table
				$query = "insert into $sql_table (customerID, customerName, customerEmail, customerOrder)
							values ('$sanitizedData[0]', '$sanitizedData[1]', '$sanitizedData[2]', '$sanitizedData[3]')";

				$result = mysqli_query($connect_mysqli, $query);
				$result = $result + 1;
				//check if execution was successfull
				if (!$result){
					echo"<p class=\"wrong\">something is wrong with", $query,"</p>";
				}else{
					echo "<p class=\"OK\">Successfully added new Item</p>";
				}

        mysqli_close($connect_mysqli);
			?>
	</body>
<footer>
       <div id="Footer"> Copyright &copy; 2016  All rights reserved. VAT no. IT 0146971728 </div>
</footer>
</html>
