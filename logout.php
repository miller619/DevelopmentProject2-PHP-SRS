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
session_start();
session_destroy();
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

?>