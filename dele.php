 
<?php			
			//connection information
			require_once ("database_inventory.php");
			
			//check if the connection is successful
			$conn = @mysqli_connect(
					$host,
					$user,
					$pwd,
					$sql_db
			);
			
			
			if (!$conn){
				echo"<p>Connection error</p>";
			}
			else{
				
				//select table
				$sql_table = "inventory"; 
				
				$id = $_GET['id'];
				
				$query = "DELETE FROM inventory WHERE id = '$id'";
				mysqli_query($conn, $query) or die('Database error!');
				
?>
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
                        ?>