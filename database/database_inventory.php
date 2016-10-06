
<!--This is used for creating the inventory database-->
<?php
	//database details
	require_once("config/SYS_con.php");

	$data   = [];
	$const_db = null;
	$connect_mysqli = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);

	//create connection with the database
	if (!$connect_mysqli){
		echo"<p>Unable to connecto to the database server</p>";
	}else{
			$const_db = mysqli_select_db($connect_mysqli, DB_NAME);

			// Check if database doesn't exist
			if (!$const_db){

			// loads in ini file and returns associative array
			$file = parse_ini_file("config/SR_db.ini");
			// Executing each SQL query
			foreach ($file as $key => $value) {
					$queryResult = mysqli_query($connect_mysqli, $value) or exit (mysqli_error($connect_mysqli));
			}

			/**
			* Notice: Un comment echo parts to printing message
			* Check if creation was Successfully
			**/
			if ($queryResult){
					$data = ["Status"=>true, "Info"=>"Successfully created database"];
					//echo json_encode($data);
				}else{
					$data = ["status"=>false, "Info"=>"Failed to create table"];
					//echo json_encode($data);
				}
			}
	}
