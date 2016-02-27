<?php include("data.inc.php"); ?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>

	</title>
	<link rel="stylesheet" href="css/ello.css">
</head>
<body class="homepage">

	<?php include("nav.inc.php"); ?>
	
	<div class="users_container">
	<ul class="users">
		
		<?php foreach($users as $key => $user): ?>
		<li>
			<a href="profile.php?id=<?php echo $key ?>">
			<img src="<?php echo $user['picture']?>" alt="">
			</a>
		</li>
		<?php endforeach; ?>
		
	</ul>
	<br class="clearfix">
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script>
	$(document).ready(function(){

		$(".users_container").mousemove(function( event ) {
		  var x = Math.round(event.pageX/5) * -1;
		  var y = Math.round(event.pageY/5) * -1;
	  		$(".users").css("transform", "translateX("+x+"px) translateY("+y+"px)");
		});

		$("body").mousemove();

	});
	</script>

</body>
</html>