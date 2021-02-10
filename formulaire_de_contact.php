<?php
if(isset($_POST['mailform']))
{
	if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message']))
	{
		$header="MIME-Version: 1.0\r\n";
		$header.='From:"NetView.com"<support@netview.com>'."\n";
		$header.='Content-Type:text/html; charset="uft-8"'."\n";
		$header.='Content-Transfer-Encoding: 8bit';

		$message='
		<html>
			<body>
				<div align="center">
					<u>Nom de l\'expéditeur : </u>'.$_POST['nom'].'<br />
					<u>Mail de l\'expéditeur : </u>'.$_POST['mail'].'<br />
					<br />
					'.nl2br($_POST['message']).'
				</div>
			</body>
		</html>
		';

		mail("theolemaigre@hotmail.fr", "CONTACT - NetView.com", $message, $header);
		$msg="Votre message a bien été envoyé !";
	}
	else
	{
		$msg="Tous les champs doivent être complétés !";
	}
}
?>

<html lang="fr">
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="contact.css"/>
		<title>NetView - Contact</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	</head>

	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#">Netflix Review</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Reviews
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="#serie">séries</a>
							<a class="dropdown-item" href="#film">films</a>
							<a class="dropdown-item" href="#anime">animes</a>
							<a class="dropdown-item" href="#documentaire">documentaires</a>
						</div>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="formulaire_de_contact.php">Contacts</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>

	<body>
		
		<div id="contact">
			<h2>Laissez nous un message !</h2>
		
			<form method="POST" action="">
				<input type="text" name="nom" placeholder="Votre nom" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>" /><br /><br />
				<input type="email" name="mail" placeholder="Votre email" value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>" /><br /><br />
				<textarea name="message" placeholder="Votre message"><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea><br /><br />
				<input type="submit" value="Envoyer !" name="mailform"/>
			</form>
		</div>

		<footer>
			<div id="coordonnees">
				<h3>Coordonnées</h3>
				<p>26 cours Gambetta</p>
				<p>76 500 Elbeuf</p>
				<p>02 22 47 85 96</p>
				<p>netview-contact@gmail.com</p>
			</div>
				
			<div id="navigation">
				<h3>Navigation</h3>

				<ul>
					<li>
						<a href="index.html">Accueil</a>
					</li>

					<li>
						<a href="review.html">Review</a>
					</li>

					<li>
						<a href="contact.php">Contact</a>
					</li>
				</ul>

			</div>

			<div id="equipe">
				<h3>L'équipe</h3>

				<ul>
					<li>
						Wiizya-GitHub ~ Coline Lefebvre
					</li>

					<li>
						SkyBlaze19 ~ Lemaigre Théo
					</li>

					<li>
						redhoodfr ~ Hugo Houssin
					</li>

					<li>
						Ryuji-Dono ~ Vasco Couture
					</li>
				</ul>

			</div>

		</footer>

		<?php
		if(isset($msg))
		{
			echo '<span class="messagePHP">'.$msg.'</span>';
		}
		?>
	</body>
</html>