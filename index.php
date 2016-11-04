<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="styles.css"/>
<link rel="stylesheet" type="text/css" href="login.css"/>
<div class="bg">
<header>
      <nav>
	  </nav>
	</header>

	<body>


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

	
	<div class="login-page">
  <div class="form">
    <form class="login-form" action="process.php" method = "POST">
      <input type="text" placeholder="username" id = "user" name = "user"/>
      <input type="password" placeholder="password" id = "pass" name = "pass"/>
      <button>login</button>
      
    </form>
  </div>
</div>


</body>
	<footer>
       <div id="Footer">  </div>
</footer>
</html>
