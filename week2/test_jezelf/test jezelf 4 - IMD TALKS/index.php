<?php
	session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	//Can create acount
	function canCreateAccount( $p_username, $p_email, $p_password ) {
		if(!empty($p_username) && !empty($p_email) && !empty($p_password)){
			//account aanmaken ok
			return true;
		}
		else {
			//gelieve alle velden in te vullen
			return false;
		}
	}

	if( isset($_POST['btnSignup'] ) ) {
		$signUsername = $_POST["s_name"];
		$signEmail = $_POST["s_email"];
		$_SESSION['signEmail'] = $signEmail;
		$signPassword = $_POST["s_password"];
		$_SESSION['signPassword'] = $signPassword;

		if(canCreateAccount($signUsername, $signEmail, $signPassword)) {
			$_SESSION['registered'] = true;
		}
	}

//can login
function canLogin( $p_username, $p_password, $p_signEmail, $p_signPassword ) {
	if( $p_username == $p_signEmail && $p_password == $p_signPassword) {
		return true;
	}
	else {
		return false;
	}
}

if(isset($_POST['btnLogin'])/* && isset($_SESSION['user'])*/ ) {
		$loginEmail = $_POST["username"];
		$loginPassword = $_POST["password"];

		if ( canLogin( $loginEmail, $loginPassword, $_SESSION['signEmail'], $_SESSION['signPassword']) ) {
			$_SESSION['loggedin'] = true;
			$_SESSION['user'] = $loginEmail;
			$errorMessage = "";
		}
		else {
			$errorMessage = "U gaf een verkeerd wachtwoord / email in";
		}
	}

if(!empty($_SESSION['user'])){
	$loginName = $_SESSION['user'];
}

?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>IMD Talks</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/twitter.css">
	
</head>
<body>
	<nav>
		<?php if(isset($_SESSION['loggedin'])): ?>
			<a href="logout.php">Logout</a>
		<?php else: ?>
			<a href="index.php">Login</a>
		<?php endif; ?>
	</nav>

	<header>
		<h1>Welcome to IMD-Talks</h1>
		<h2>Find out what other IMD'ers are building around you.</h2>
	</header>

	<div id="rightside">
		<?php if(isset($_SESSION['loggedin'])): ?>
			<section id="login">
				<p>Welkom, <?php echo $loginName ?></p>
				</section>
		<?php endif; ?>
		<?php if(isset($_SESSION['registered']) && !isset($_SESSION['loggedin'])): ?>
	<section id="login">
		<p><?php if(!empty($errorMessage)){
				echo $errorMessage;
			}?></p>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<input type="text" name="username" placeholder="Email" />
		<input type="password" name="password" placeholder="Password" />
		<input type="checkbox" name="rememberme" value="yes" id="rememberme">
		<label for="rememberme">Remember me</label>

		<input type="submit" name="btnLogin" value="Sign in" />
		</form>
		
	</section>
		<?php endif; ?>

		<?php if(isset($_SESSION['loggedin']) || isset($_SESSION['registered'])): ?>

		<?php else: ?>
	<section id="signup">

		<h2>New to IMD-Talks? <span>Sign Up</span></h2>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<input type="text" name="s_name" placeholder="Full name" />
		<input type="email" name="s_email" placeholder="Email" />
		<input type="password" name="s_password" placeholder="Password" />
		<input type="submit" name="btnSignup" value="Sign up for IMD Talks" />
		</form>

	</section>
		<?php endif; ?>
	</div>	
	
</body>
</html>