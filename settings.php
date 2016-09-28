<!--database settings-->
<?php 
	$host 	= "localhost";
	$user	= "root";
	$pwd    = "";
	$sql_db = "PHP_SRS_System";

$connect_mysql = mysqli_connect('localhost','root','');

if ($connect_mysql){
	echo "Connected";
} else {
	echo "Disconncted";
}

		
?>		