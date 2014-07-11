<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thank you!</title>
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
		<a class="col-1-5 topnav" href="http://">Work</a>
		<a class="col-1-5 topnav" href="http://">About</a>
		<a class="col-1-5 topnav" href="contact.php">Contact</a>
		<div class="col-1-5 invisible"><div class="content"></div></div>
	</nav>

	<div class="container">
		
		<div class="row break">
		</div>

		<div class="contact row">
			<div class="col-1-1">
				<div class="contact_imput">
					
				<?php echo "<h2> Thank you, ".$_POST['firstName']."!</h2>"; ?>
						
					<div class="thankyou">
					<?php echo	"<p>It's always good to hear ".$_POST['contactType']." I'll get back to you as soon as I can.<p>" ?>
					</div>



				</div>
			</div>
		</div>
	</div>
	<footer>
		<div class="row">
			<div class="col-1-1">
				<div class="content">
					<p class="credit">Made by someone...
					<br>
					<br>
						possibly me.
					</p>
				</div>
			</div>
		</div>
	</footer>
	
</body>
</html>