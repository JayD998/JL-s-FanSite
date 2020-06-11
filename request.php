<!DOCTYPE HTML>
 
<html>
	
	<head>
		<title>Request Information | GoT Fansite</title>
		<meta charset="UTF-8" />
		<meta name="description" content="This is the form page for GoT Fansite">
		<link rel="stylesheet" href="mystyle.css">
		<script src="timer.js"></script>
		<script src="hide.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Cormorant+Upright&display=swap" rel="stylesheet">
		<style>
		.contentarea{
		
		}
		
		#fname, #phone, #email{
		display:block;
		}
		
		#other + #other-text{
		display:none;
		}
		
		#other:checked + #other-text{
		display:block;
		
		}
		</style>
		
	</head>

		<body style="background-color:#660000">
		
		<div class="wrapper">
		
			<?php include ('php/header.php'); ?>
			
			<?php include ('php/navigation.php'); ?>
		
			<div class="contentarea">
				<h1>Game of Thrones Fan Site</h1>
				
				<h2>Request Information Page</h2>
				
				
				<form action="acknowledgement.php" method="get">
					<fieldset><legend>Personal Information</legend>
						
							<p>Title<select name="title" id="title"> 
							<option value="mister">Mister</option>
							<option value="miss">Miss</option>
							<option value="doctor">Doctor</option>
							<option value="master">Master</option>
							</select></p>
						
						<br />
						
						<p>
						Full Name: 
						<br />
						<input type="text" name="fullname" id="fullname">
						<br />
						Phone Number: <input type="text" name="phone" id="phone">
						<br />
						e-Mail: <input type="email" name="email" id="email">
						</p>
					</fieldset>
					
					<fieldset><legend>Information Request</legend>
						<h3>Select your favorite Color</h3>
						<select name="favcolor" id="favcolor">
							<option>Black</option>
							<option>Red</option>
							<option>Blue</option>
							<option>Green</option>
							<option>Violet</option>
						</select>
						<h3>Select Topic of Interest</h3>
						<p>Cast<input type="checkbox" name="cast" value="cast" id="cast" />&nbsp;&nbsp;
						Characters<input type="checkbox" name="char" value="char" id="char" />&nbsp;&nbsp;
						Bonus Scenes<input type="checkbox" name="bonus" value="bonus" id="bonus" />&nbsp;&nbsp;
						Schedule<input type="checkbox" name="schedule" value="schedule"/>&nbsp;&nbsp;
						Credits<input type="checkbox" name="credit" value="credit" id="credit" />&nbsp;&nbsp;
						Other<input type="checkbox" name="other" value="other" id="other" />&nbsp;&nbsp;
						<input type="text" id="other-text">
						</p>
						
						<h3>Do you have a show idea for us?</h3>
						<p><input id="noidea" type="radio" name="tab" value="noidea" onclick="noshow();" />
							No
						<input id="ihave" type="radio" name="tab" value="ihave" onclick="show();" />
							Yes</p>
						<div id="hidden" class="hide">
							<hr><p>Okay Cool! Please explain here...</p>
							<br />
							<textarea rows="15" cols="30" name="idea" id="idea">
							</textarea>
						</div>
						<br />
						
						<br /><br />
						<input type="reset" value="Clear Form">
						<br /><br />
						<input type="submit" value="Submit Form" />
						
						<br />					
					</fieldset>
					

					
				</form>
			</div>
		
						<?php include ('php/footer.php'); ?>

			
		</div>
		
		</body>

</html>