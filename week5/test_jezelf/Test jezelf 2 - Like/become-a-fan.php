<?php
	
	include_once("classes/Activity.class.php");
	$a = new Activity();
	$allActivities = $a->GetRecentActivities();

?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Become a fan</title>
	<style>
	body{background-color: #e9eaed;font-family: Helvetica, Arial, 'lucida grande',tahoma,verdana,arial,sans-serif;}
	article{background-color: #fff;font-size: 15px; padding: 0.5em;width: 300px; margin-bottom: 1em;}
	article div{color: #3b5998;}
	</style>
</head>
<body>
	
	<?php foreach($allActivities as $activity){ ?>
	<article>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, laboriosam culpa perspiciatis nostrum doloremque placeat! Itaque, asperiores, odio quas aspernatur soluta alias recusandae nam laboriosam iure consequuntur ratione molestiae quam?
		</p>
		<img src="http://dummyimage.com/300x200/000/fff" alt="">
		<div><a href="#" data-id="<?php echo $activity['pk_activity_id'] ?>" class="like">Like</a> <span class='likes'><?php echo $activity['likes'] ?></span> people like this </div>
	</article>
	<?php } ?>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".like").on("click", function(e){
				var id = $(this).data("id");
				$.post( "ajax/facebook-fan.php", { dataid: id})
					.done(function( response ){
							$("[data-id="+id+"]").next().text(response.likes);
						});
				$e.preventDefault();
					});
			});
	</script>
</body>
</html>