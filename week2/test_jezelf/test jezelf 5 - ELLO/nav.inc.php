<?php
	session_start();

	function canLogin($p_username, $p_password)
	{
		if(isset($p_username) && isset($p_password)){
			return true;
		}
		else {
			return false;
		}
	}

	function isLoggedIn()
	{
		if($_SESSION['loggedin'] == true) {
			return true;
		}
		else {
			return false;
		}
	}

	function doLogin($p_user)
	{
		$_SESSION['loggedin'] = true;
		$_SESSION["user"] = $p_user;
	}

?>

<nav>
	
	<!--<p class="welcome">Welcome back! <a href="logout.php">Log out?</a></p>-->
			
	<form action="" method="post">
		<input class="input" type="text" name="username" placeholder="Your username">
		<input class="input" type="password" name="password" placeholder="Your password">
		<button class="button" type="submit">Log in</button>
	</form>
	
</nav>