<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>site_hw</title>
		<meta name="description" content="">
		<meta name="author" content="Martin">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		
		
		<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/site_hw.css">

		
		
		
	</head>

	<body>
		
		
		
		
		<div class="top">
		<div class="teaser">
			<div class="hintergrund"></div>
			
			<div class="teacont">
				<h1>GEN AU<br />KICK OFF<br />RICHTIG</h1>
				
				
			</div> 
		</div>
		<div class="center">

			<h2>
				MAYFLOWER
			</h2>
			<h2>
				<a class="centerlink"  href="#kontakt">SCHNELLKONTAKT</a> JETZT INFORMIEREN
			</h2>

		</div>
		</div>
		

		<div class="cont">
			<div class="info">
				<h1>34</h1>
				<h3>WORKSHOPS</h3>
				<p>
					<a href="#ueberblick">ÜBERBLICK></a>

				</p>

			</div>

			<div class="artikel">
				<h2>KNOW-HOW</h2> 
				<h3>WENN ES DARAUF ANKOMMT</h3>

				<p>
				<b>AGILES COACHING &deg; WORKSHOPS &deg; SCHULUNGEN &deg; TRAININGS &deg; CODING DOJOS</b>
					<br />
					FÜR <b>BUSINESS &amp; DEVELOPMENT</b><br /><br />

					ERFAHRENE SPEAKER &amp; TRAINER MACHEN IHR PROJEKTTEAM
					FIT FÜR KONKRETE HERAUSFORDERUNGEN<br /><br />

					DES WEITEREN <br />
					TAGES- UND HALBTAGSWORKSHOPS
					KURZPRÄSENTATIONEN UND GRUNDLAGEN FÜR DEN SCHNELLEINSTIEG
				</p>

			</div>

		</div>

		<div class="cont">
			
			<div class="info">
				<h1>100</h1>
				<h3>PROZENT PERFORMANE</h3>
				<p>
					<a href="#ueberblick">ÜBERBLICK></a>

				</p>

			</div>

			<div class="artikel">
				<h2>ANALYSE &amp; OPTIMIERUNG</h2> 
				<h3>BESTEHENDE LÖSUNGEN AUF TRAB BRINGEN</h3>

				<p>
					SOFTWARE ASSETS&deg; DATENBANKOPTIMIERUNGEN &deg; ARCHITEKTURBERATUNG <br />
					FÜR SOFTWARE &amp; SYSTEME<br /><br />

					TECHNOLOGIE-EXPERTEN ANALYSIEREN IHR LAUFENDES SYSTEM UND DECKEN<br />
					OPTIMIERUNGSPOTENZIAL AUF.
				</p>

			</div>

		</div>
		<div id="kontakt">
			<div id="meldungen">
			<?php 
			 	if(empty($_GET["failname"]) && empty($_GET["mailfail"]) && empty($_GET["sent"])){
			 		
			 		
			 		
			 	}else{
			 		if($_GET["sent"]==1){
			 			echo "<h3>Ihr Formular wurde erfolgreich verschickt</h3>";
			 			
			 			
			 			
			 		}else{
			 		
			 		echo "<h3>".htmlspecialchars($_GET["failname"])."</h3>";
					echo "<h3>".htmlspecialchars($_GET["mailfail"])."</h3>";
					}
			 		
			 	}
			 	
			 	
				
				
			 ?>
			
		</div>
		  <form id="kontakt-formul" action="form-submit.php" method="post">
  			<input class="kontakt-form-inp" type="text" name="fname_lname" placeholder="VORNAME UND NAME"><br>
  			<input class="kontakt-form-inp" type="text" name="mail" placeholder="E-MAILADRESSE"><br>
  			<input class="kontakt-form-inp" type="text" name="subject" placeholder="BETREFF"><br>
  			<textarea  class="kontakt-form-inp" type="text" name="message" rows="10" placeholder="NACHRICHT"></textarea><br>
  			<input class="kontakt-form-but" type="submit" name="submit"   value="ABSENDEN">
		</form></div>
		

		
		

	</body>
</html>
