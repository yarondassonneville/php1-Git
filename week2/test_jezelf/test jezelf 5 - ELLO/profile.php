<?php
	include("data.inc.php");
	$id = $_GET["id"];
	$person = $users[$id];
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		<?php echo $person['name'] ?> | profile
	</title>
	<link rel="stylesheet" href="css/ello.css">
</head>
<body class="profile">
	<div class="profile_details">
		<img src="<?php echo $person['picture'] ?>" alt="">
		<h1><?php echo $person['name'] ?></h1>
		<p><?php echo $person['bio'] ?></p>
	</div>
</body>
</html>