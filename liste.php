<?php
	include 'db.php';

	$db = new Database("localhost", "url_short", "root", "");
	$db = $db->connect();

	$stmt = $db->query("SELECT * FROM urls");
	$urls = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/link.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<title>PHP URL Shortener</title>
<script>
$(document).ready(function(){
  $("form").submit(function(){
    alert("successfully");
  });
});



</script>


</head>  

<body>
	
	<header>
		<h1> URL Shortener</h1>
		
	</header>
<h2></h2>
	<main>
		<section class="form">
			<form  class="form"  id="form" action="insert.php" method="post">
				<input type="text" name="long_url" id="long_url" placeholder="https://example.com" />
			
				<input type="submit" value="SHORTEN" />
			</form><br>
	
		</section>

		<section class="urls">
			<?php foreach ($urls as $url) : ?>
			<div class="url">
				<div class="id">
					<?=$url ['ID']; ?>
				</div>
				<div class="short_url">
					<a href="r?c=<?= $url['ID']; ?>" target="_blank">
						http://localhost/r?c=<?= $url['ID']; ?>
					</a>
				</div>
				<div class="long_url">
					<a href="<?= $url['long_url']; ?>" target="_blank"><?= $url['long_url']; ?></a>
				</div>
			</div>
			<?php endforeach; ?>
		</section>
	</main>

	<script>

$('form').submit(function () {

// Get the Login Name value and trim it
var name = $.trim($('#long_url').val());

// Check if empty of not
if (name  === '') {
	alert('Input your Link and Submit.');
	return false;
}
});

</script>
 
</body>
</html>


