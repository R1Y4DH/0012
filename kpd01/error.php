<!DOCTYPE html>
<html>
	<head>
		<title>Miku Expo 2017</title>
			<!--Favicon-->
				<link rel="shortcut icon" href="Rsc\shortcut icon\favicon.ico"/>
			<!--Custom Font-->
				<link rel="stylesheet" href="Errorface.css">
	</head>
	<body>
		<div id="wrapper">
			<div id="contents">
				<div class="container">
					<center>
					<div>
						<img src="Hatsune Miku.png" class="img1">
					</div>
					<div>
						<p class="errortext">ERROR 404</p>
					</div>
					</center>
				</div>
			</div>
		</div>
		<?php
		$ip=getenv("REMOTE_ADDR");
		$requr1=getenv("REQUEST_URL");
		$servname=getenv("SERVER_NAME");
		$combine=$ip."tried to load".$servname.$requr1;
		$httpref=getenv("HTTP_REFERER");
		$httpagent=getenv("HTTP_USER_AGENT");
		$today=date("D M j Y g:f:s a T");
		$note="You are in a wrong page!";
		$message="$today \n 
		<br>
		$combine <br> \n
		User Agent=$httpagent \n
		<h2> $note </h2> \n
		<br> $httpref":
		$message2="$today \n
		$combine \n
		User Agent=$httpagent \n
		$note \n
		$httpref";
		?>
	</body>
</html>