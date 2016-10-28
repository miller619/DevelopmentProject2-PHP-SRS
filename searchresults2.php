<!--home page displaying the inventory-->
<!DOCTYPE html>
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
	<?php
		include_once ("database/database_inventory.php");
		
		if(!isset($_POST['searchs'])){
			header("Location:index.php");
		}
		$search_sql="SELECT * FROM sales WHERE itemName LIKE '%".$_POST['searchs']."%' OR itemID LIKE '%".$_POST['searchs']."%' ";
		
		$search_query=mysqli_query($connect_mysqli,$search_sql);
		if(mysqli_num_rows($search_query)>0){
			$search_rs=array();
			while($row=mysqli_fetch_array($search_query)){
				$search_rs[]=$row;
			}
			
		}
		?>
		
		
	<h1> Search Results </h2>
	<?php
		if(mysqli_num_rows($search_query)>0){
			foreach($search_rs as $rs) {
				?>
				<p> <?php 
				echo"<table border='1'>";
					echo"<tr>"
						."<th scope=\"col\">Item ID</th>"
						."<th scope=\"col\">Sales ID</th>"
						."<th scope=\"col\">Item Name</th>"
						."<th scope=\"col\">Item Category</th>"
						."<th scope=\"col\">Item Quantity</th>"
						."<th scope=\"col\">Item Price</th>"
						."</tr>";

						
							echo"<tr>";
							echo"<td>", $rs["itemID"],"</td>";
							echo"<td>", $rs["itemName"],"</td>";
							echo"<td>", $rs["SalesID"],"</td>";
							echo"<td>", $rs["itemCategory"],"</td>";
							echo"<td>", $rs["itemQuantity"],"</td>";
							echo"<td>", $rs["itemPrice"],"</td>";
													
							echo"</tr>";
						
					echo"</table>";
						   ?></p>
			<?php	
			} 
		} else {
			echo "No results found";
	}?>
<footer>
       <div id="Footer"> Copyright &copy; 2016  All rights reserved. VAT no. IT 0146971728 </div> 
</footer>
</html>