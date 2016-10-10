<?php
include_once ("database/database_inventory.php");

if(isset($_GET['id']) && $_GET['id']!=""){
	$query="DELETE FROM inventory WHERE itemID=".$_GET['id'];
	mysqli_query($connect_mysqli, $query);
	header("location:".$_SERVER["HTTP_REFERER"]);
}else{
	header("location:".$_SERVER["HTTP_REFERER"]);
}

?>