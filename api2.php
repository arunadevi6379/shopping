<!DOCTYPE html>
<html>
<head>
	<meta charset="utf+8">
	<meta name="viewport" content="width-device-width,initial-scale-1">
	<title>maha api</title>
	<style type="text/css">
		body{
			background: linear-gradient(to left,pink,blue,violet);
		}
		.s1{
			width: 600px;
			border: 5px solid black;
			border-radius: 15px;
			padding: 10px 20px 30px;
			margin: 150px auto;
		}
		.s2{
			color: white;
			font-size: 3.0em;
			text-align: center;
			font-weight: bold;

		}
		.h3{
			width: 400px;
			border: 2px solid black;
			border-radius: 15px;
			padding: 10px 70px;
			margin: 10px;
			margin-left: 20px;
			font-size: 1.6em;
		}
		#d1{
			font-size: 2.0em;
			font-weight: bold;

		}
		.h4{
			width: 200px;
			border: 2px solid black;
			border-radius: 15px;
			padding: 10px;
			margin: 10px;
			margin-left: 20px;
			font-size: 1.8em;
		}
		.s1:hover{
			background-color: black;
			color: white;
		}
	</style>
</head>
<body>
	<form action="api3.php" method="post">
		<div class="s1">
			<h1 class="s2">LOGIN</h1>
			<span class="material symbols outlined" id="d1">Title</span><input type="text" name="title" placeholder="ENTER TITLE" required class="s3" id="title"><br>
			<span class="material symbols outlined" id="d1">Description</span><input type="text" name="description" placeholder="ENTER DESCRIPTION" required class="s3" id="description"><br>
			<!--<span class="material symbols outlined" id="d1">call</span><input type="text" name="phone" placeholder="ENTER PHONE NUMBER" required class="s3" id="phone"><br>-->
			<br>
		
		<!-- <div>
				<span class="material-symbols-outlined" id="d1">interests</span><br>
				<input type="checkbox" name="interests[]" value="sports" id="sports">
				<label for="sports"> Sports</label><br>
				<input type="checkbox" name="interests[]" value="music" id="music">
				<label for="music"> Music</label><br>
				<input type="checkbox" name="interests[]" value="travel" id="travel">
				<label for="travel"> Travel</label>
			</div>
			<br>

			
			<div>
				<span class="material-symbols-outlined" id="d1">gender</span><br>
				<label>Gender:</label><br>
				<input type="radio" name="gender" value="male" id="male" required>
				<label for="male">Male</label><br>
				<input type="radio" name="gender" value="female" id="female">
				<label for="female">Female</label><br>
			</div>
			<br>

			
			<div>
				<span class="material-symbols-outlined" id="d1">country</span><br>
				<label for="country">Country:</label>
				<select name="country" id="country" class="s3" required>
					<option value="">Select Country</option>
					<option value="usa">USA</option>
					<option value="canada">Canada</option>
					<option value="uk">UK</option>
					<option value="australia">Australia</option>
					<option value="india">India</option>
				</select>
			</div> -->
		
			<center><button type="submit" class="s4" id="sub">LOGIN</button></center>
</div>
	</form>

</body>
</html>