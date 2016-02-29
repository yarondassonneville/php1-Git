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
		if(isset($_SESSION['loggedin'])) {
			if ($_SESSION['loggedin'] == true) {
				return true;
			} else {
				return false;
			}
		}
	}

	function doLogin($p_user)
	{
		$_SESSION['loggedin'] = true;
		$_SESSION["user"] = $p_user;
	}

	if(isset($_POST["username"]) && isset($_POST["password"])) {
		if (canLogin($_POST["username"], $_POST["password"])) {
			$_SESSION['loggedin'] = true;
		}
	}
?>

<nav>
	
	<?php if(isLoggedIn()): ?>
	<p class="welcome">Welcome back! <a href="logout.php">Log out?</a></p>
	<?php else: ?>
	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
		<input class="input" type="text" name="username" placeholder="Your username">
		<input class="input" type="password" name="password" placeholder="Your password">
		<button class="button" type="submit">Log in</button>
	</form>
	<?php endif; ?>
	
</nav>