
<!--This is used for creating the inventory database-->
<?php
	//database details
	$host 	= "localhost";
	$user	= "root";
	$pwd    = "";
	$sql_db = "PHP_SRS_System";
	$data   = [];
	$const_db = null;
	$connect_mysqli = mysqli_connect($host, $user, $pwd);

	//create connection with the database	
	if (!$connect_mysqli){
		echo"<p>Unable to connecto to the database server</p>";
	}else{
		$const_db = mysqli_select_db($connect_mysqli, $sql_db);
		
		/* if ($const_db){
			$delete_query = "drop database PHP_SRS_System";
			$delete_db = mysqli_query($connect_mysqli, $delete_query);
			
			if (!$delete_db){
				$data = ["status"=>false, "Info"=>"Failed to delete database"];
				echo json_encode($data);
			}else{
				$data = ["Status"=>true, "Info"=>"Database deleted successfully"];
				echo json_encode($data);
			}
			}else { */
			//create inventory database
			
			//create teh database
			$sql = "CREATE DATABASE ".$sql_db;
			
			$queryResult = mysqli_query($connect_mysqli, $sql);
			
			if (!$queryResult){
				$data = ["status"=>false, "Info"=>"Database Exists"];
				echo json_encode($data);
			}else {
				mysqli_select_db($connect_mysqli, $sql_db);
				//create the table
				$create_inventory_table = "CREATE Table inventory(
					itemID INT NOT NULL PRIMARY KEY,
					itemName VARCHAR(255) NOT NULL,
					itemCategory VARCHAR(255) NOT NULL,
					itemQuantity INT NOT NULL)
					";
				
				$queryResult = mysqli_query($connect_mysqli, $create_inventory_table) or exit
				(mysqli_error($connect_mysqli));
				
				if ($queryResult){
					$data = ["Status"=>true, "Info"=>"Successfully created database"];
					echo json_encode($data);
				}else{
					$data = ["status"=>false, "Info"=>"Failed to create table"];
					echo json_encode($data);
				}
			}
		}
	
	mysqli_close($connect_mysqli);

?>
