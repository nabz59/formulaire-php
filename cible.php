
<?php       

			if (isset($_POST['nom']) && ctype_alpha($_POST['nom'])){

				echo htmlspecialchars("Bonjour" . ' ' .$_POST['nom']);

			} else {

			echo "veuillez renseigné votre nom "; }

			if (isset($_POST['prenom']) && ctype_alpha($_POST['prenom'])){

				echo htmlspecialchars(" " . ' ' .$_POST['prenom']);

			} else {

			echo "veuillez renseigné votre prenom"; }

?>

<p>tu as <?php echo $_POST['age']; ?> ans </p>

<p>tu est <?php echo  $_POST['sexe']; ?></p>

<p>tu habite a <?php echo $_POST['ville']; ?></p>

	
		<?php echo "et tu as comme loisirs ";

		if (isset($_POST[' musique']) || isset($_POST['jeux']) || isset($_POST['sport']) || isset($_POST['danse']))
			{ 
				if (isset($_POST['musique'])) {

		 		echo "la musique "; }

				if (isset($_POST['jeux'])) {

		 		echo "les jeux "; }
		
				if (isset($_POST['sport'])) {

				 echo "le sport "; }

				if (isset($_POST['danse'])) {

				 echo "la danse "; }

			} else { echo "et tu as comme loisirs aucune de ces 4 propositions";
		}
?> 