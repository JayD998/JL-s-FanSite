<!DOCTYPE HTML>
 
<html>
	
	<head>
		<title>Catalogue Page | GoT Fansite</title>
		<meta charset="UTF-8" />
		<meta name="description" content="This is the catalogue page for GoT Fansite">
		<link rel="stylesheet" href="mystyle.css">
		<script src="sorttable.js"></script>
		<script src="rollover.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Cormorant+Upright&display=swap" rel="stylesheet">
		<style>
		.contentarea{
		
		}
		
		table, td, th {
		border: 1px solid black;
		vertical-align: middle;
		margin: 0 auto;
		
		}
		.pimage{
		width:150px;
		height:150px;
		}
		
		.pdesc{
		font-family:papyrus, fantasy;
		
		}
		
		.price{
		font-family:papyrus, fantasy;
		
		}
		</style>
		
	</head>

		<body style="background-color: #660000">
		
		<div class="wrapper">
		
			<?php include ('php/header.php'); ?>
			
			<?php include ('php/navigation.php'); ?>
		
			<div class="contentarea" id="contentarea">
			<h1>Game of Thrones Fan Site</h1>
			
			<p>
			Moveover your mouse over any of the links below to play a theme song  (might take a moment to load).
			</p>
			
			<p>
				<a href="https://www.youtube.com/watch?v=TZE9gVF1QbA" onmouseover="mouseoversound1.playclip()">Game of Thrones Theme</a></p>
			
			<p>
				<a href="https://www.youtube.com/watch?v=ECewrAld3zw" onmouseover="mouseoversound2.playclip()">Rains of Castamere</a></p>
			
 
				<h2>Catalogue</h2>
				
				<table class="sortable"> 
					<thead>
					<tr>
						<th>Audiobook</th> <th>Description</th> <th>Price</th>
					</tr>
					</thead>
					
					<!-- All images found on google images search for each "book title" -->
					<tbody>
					<tr>
						<td><img class="pimage" src="pimage/book1.jpg" alt="book pic"></td>
						<td class="pdesc">A Game of Thrones</td>
						<td class="price">CDN$ 42.34</td>
					</tr>
					<tr> 
						<td><img class="pimage" src="pimage/book2.jpg" alt="book pic"></td>
						<td class="pdesc">A Clash of Kings</td>
						<td class="price">CDN$ 67.42</td>
					</tr>
					<tr>
						<td><img class="pimage" src="pimage/book3.jpg" alt="book pic"></td>
						<td class="pdesc">A Storm of Swords</td>
						<td class="price">CDN$ 78.95</td>
					</tr>
					<tr>
						<td><img class="pimage" src="pimage/book4.jpg" alt="book pic"></td>
						<td class="pdesc">A Feast for Crows</td>
						<td class="price">CDN$ 69.47</td> 
					</tr>
					<tr>
						<td><img class="pimage" src="pimage/book5.jpg" alt="book pic"></td>
						<td class="pdesc">A Dance with Dragons</td>
						<td class="price">CDN$ 64.84</td>
					</tr>
					</tbody>
					
				</table>

			</div>
		
						<?php include ('php/footer.php'); ?>

			
		</div>
		
		</body>

</html>