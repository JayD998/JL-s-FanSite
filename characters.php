<!DOCTYPE HTML>

<html>
<head>
	<title>GoT Cast Gallery</title>
		<meta charset="UTF-8" /> 
		<meta name="description" content="This is the Main Casts page for GoT">
		<link rel="stylesheet" href="mystyle.css">
		<link href="https://fonts.googleapis.com/css?family=Cormorant+Upright&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="floatbox/floatbox.css" />
		<script src="floatbox/floatbox.js"></script>
		<style>
		.floatbox{
		
			display: block;
			margin-left: auto;
			margin-right: auto 
		}
		</style>
</head>

<body style="background-color:#660000">
<div class="wrapper">
	<?php include ('php/header.php'); ?>
			
	<?php include ('php/navigation.php'); ?>

<div class="contentarea" id="contentarea"> 
	<h1>Game of Thrones Fan Site</h1>
	<h2> Main Characters </h2>
		<h3>Click the Thumbnail or Names Below to View Characters</h3>

	<div class="floatbox" data-fb-options="group:1 doSlideshow:true">
  
	<a href="images/cersei.jpg"><img src="images/thumbnail.jpg" alt="thumbnail pic" width="658"/></a>
	<a href="images/danaerys.jpg"></a>
	<a href="images/jamie.jpg"></a>
	<a href="images/jon-snow.jpg"></a>
	<a href="images/sansa.jpg"></a>
	<a href="images/tyrion.jpg"></a>
	<a href="images/night-king.jpg"></a>
  
	</div>
	<p>
		<a href="images/cersei.jpg"> Cersei </a>
		<br />
		<a href="images/danaerys.jpg"> Danaerys </a>
		<br />
		<a href="images/jamie.jpg"> Jamie </a>
		<br />
		<a href="images/jon-snow.jpg"> Jon Snow </a>
		<br />
		<a href="images/sansa.jpg"> Sansa </a>
		<br />
		<a href="images/tyrion.jpg"> Tyrion </a>
		<br />
		<a href="images/night-king.jpg"> Night King </a>
	</p>
</div>

	<?php include ('php/footer.php'); ?>

</div>

</body>

</html>