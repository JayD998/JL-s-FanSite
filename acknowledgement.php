<!DOCTYPE HTML>

	<html>
		
		<head>
			<title>Acknowledgement | GoT Fansite</title>
			<meta charset="UTF-8" />
			<meta name="description" content="This is the acknowledgement page for GoT Fansite">
			<link rel="stylesheet" href="mystyle.css">
			<link href="https://fonts.googleapis.com/css?family=Cormorant+Upright&display=swap" rel="stylesheet">
			<style>

			</style>
		</head>

			<body style="background-color: #660000">
		
		<div class="wrapper">
		
			<?php include ('php/header.php'); ?>
			
			<?php include ('php/navigation.php'); ?>
			
			<div class="contentarea">
				<h1>Game of Thrones Fan Site</h1>
				
				
				<h2>
				Thank You, <?php echo $_GET['fullname'] . ". --- "; ?>
				Your Favorite Color is <?php echo $_GET['favcolor'] . " --- ";?>
				Survey has been Submitted on <?php echo date("l, F d, Y"); ?>
				
				</h2>
				
				<img src="images/ackn.jpg" alt="acknowledgement pic" width="658" height="750">
			
						
						<?php include ('php/footer.php'); ?>
			</div>
			
		</div>
	</html>