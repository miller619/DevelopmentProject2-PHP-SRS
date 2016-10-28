<?php

    
	//Get values pass from form in login.php flie
	$username = $_POST['user'];
	$password = $_POST['pass'];
	
	//to prevent mysql injection
	
	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);

	//connect to the database
	
	mysql_connect("localhost", "root", "");
	mysql_select_db("php_srs_system");
	
	//Query the database for user_error
	$result = mysql_query("select * from users where username = '$username' and password ='$password'")
			or die("Fail to query database ".mysql_error());
	$row = mysql_fetch_array($result);
	
	if($row['username'] == $username && $row['password'] == $password && $row['user'] == '1' || $row['user'] == '2')
	{
		//echo "Login success!!!";
		include 'Home.php';
	}
	else
	{
		echo "login fail!!";
	}

	
?>