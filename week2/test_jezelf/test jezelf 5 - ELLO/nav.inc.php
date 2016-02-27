<?php
	
	function canLogin($p_username, $p_password)
	{
		// this function only checks if a user may or may not log in	
	}

	function isLoggedIn()
	{
		// check if a user has previously logged in
	}

	function doLogin($p_user)
	{
		// this function sets the cookie required for subsequent logins
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