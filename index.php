<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="styles.css"/>
<div class="bg">
<header>
       <nav>
      <ul>
        <li class="tours"><a>Inventory</a>
          <ul>
            <li><a>Add</a></li>
            
          </ul>
        </li>
        <li class="aboutus"><a >Sales</a>
          <ul>
            <li><a >Add</a></li>
           
          </ul>
        </li>
			<li class="aboutus"><a >Customer</a>
          <ul>
            <li><a >Add</a></li>
            
          </ul>
        </li>
		<li class="Disclaimer"><a >Disclaimer</a></li>
		</ul>
    </nav>
	</header>

	<body>
		<hr/>
			<h2 align="center" >Log In</h2>
		<hr/>

		<?php
			//connection information
      include_once ("database/database_inventory.php");
	  
	  //select table
				$sql_table = "users";

				//set sql command to add data to the table
				$query = "insert into $sql_table (id, username, password, user)
							values ('1', 'user1', 'user1', '1')";
				$uquery = "insert into $sql_table (id, username, password, user)
							values ('2', 'user2', 'user2', '2')
							";;		
				$result = mysqli_query($connect_mysqli, $query);
				$result = mysqli_query($connect_mysqli, $uquery)

?>
<div id="frm">
	<form action="process.php" method = "POST" align="center">
		<p>
			<label>Username:</label>
			<input type = "text" id = "user" name = "user"/>
		</p>
		
		<p>
			<label>Password:</label>
			<input type = "Password" id = "pass" name = "pass"/>
		</p>
		
		<p>
			<input  type = "submit" id="btn" value = "Login"/>
		</p>
	</form>
</div>

</body>
</html>
