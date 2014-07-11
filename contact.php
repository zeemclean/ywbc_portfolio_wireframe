<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact</title>
	<!--<link rel="stylesheet" href="http://basehold.it/24">-->
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/main.css">
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,200,700' rel='stylesheet' type='text/css'>
</head>
<body>
	<header>
		<div class="content">
			<a class='home' href="index.php">
				<h1 class="header--top">Zoë <span class="sunshine">McLean</span></h1>
			</a>
		</div>
	</header>

	<nav>
		<div class="col-1-5 invisible"><div class="content"></div></div>
		<a class="col-1-5 topnav" href="index.php#work">Work</a>
		<a class="col-1-5 topnav" href="http://">About</a>
		<a class="col-1-5 topnav" href="contact.php">Contact</a>
		<div class="col-1-5 invisible"><div class="content"></div></div>
	</nav>

	<div class="container">
		
	<!--Contact-->
		<div class="row break"></div>

		<div class="contact row">
			<div class="col-1-1">
				<div class="contact_imput">
				<h2>Contact</h2>
				<form action="success.php" method="post" id="contact_form">
					<label for="firstName">First name : </label>
					<input type="text" name="firstName" class="first_name"><br>

					<label for="lastName">Last name : </label>
					<input type="text" name="lastName" class="last_name">
					<br>

					<label for="email"></label> 
					<input type="text" name="email" class="email">
					<br>
					<h5>Reasons for Contact</h5>
					<select label="Reason for contact:" name="contactType"> 
					<optgroup label="Business">
						<option value=" about a possible commission.">Commission.</option>
						<option value="about a business request.">Request.</option>
						<option value="from interested persons.">Job.</option>
						<option value="about an opportunity to save the day. Hold tight and">Saving the world.</option>
						<option value="about swashbuckling adventures, m'hearty! Yar,">Mutiny on the high seas.</option>
					</optgroup>
					<optgroup label="Social">
						<option value="from people.">Just saying 'Hi'.</option>
						<option value="about stuff and things... yea."> Shooting the breeze.</option>
						<option value="about Nigerian princes in dire need of financial aid. There is practically no chance that">Prank email.</option>
						<option value="of an old fashioned personal vendetta.">Personal Vendetta.</option>
					<optgroup label="Other">
						<option value="about someone's phophetic vision. If you could just stare deeply into your nearest crystal ball,">Prophetic Vision.</option>
						<option value="about pancakes! Keep them warm, and">Pancakes.</option>
						<option value="about children ... but that one is not mine. I swear. I've never met you before in my life. But if you wish to contact me regarding any other matters,">Children.</option>
						<option value="from you.">None of the above.</option>
					</optgroup>
					</select>
					<br>
					<h5>Message</h5>
					<textarea name="message" rows="5" cols="60"></textarea>
					<br>

					<input type="submit" value="Submit" name="submit">


				</form>
				</div>
			</div>	
		</div>


	<!-- End of Container -->
	</div>

<footer>
	<div class="row">
		<div class="col-1-1">
			<div class="content">
				<p class="credit">credit</p>
			</div>
		</div>
	</div>
</footer>

</body>
</html>