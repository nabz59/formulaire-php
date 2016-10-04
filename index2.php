<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>moi</title>
	</head>

	<body>
	
		<form action="cible.php" method="post">
		
		<p><label>Nom : <input type="text" name="nom" /></label></p>

		<p><label>Prenom : <input type="text" name="prenom" /></label></p>

		<p><label>Age : <select name="age">

    		<option value="15">15</option>

    		<option value="16">16</option>

    		<option value="17">17</option>

	    	<option value="18">18</option>

	    	<option value="19">19</option>

    		<option value="20">20</option>

    		<option value="21">21</option>

	    	<option value="22">22</option>

	    	<option value="23">23</option>

    		<option value="24">24</option>

    		<option value="25">25</option>

	    	<option value="26">26</option>

	    	<option value="27">27</option>

    		<option value="28">28</option>

    		<option value="29">29</option>

	    	<option value="30">30</option>

	    </select></label></p>

		<p><label>Sexe : <input type="radio" name="sexe" value="un garçon" id="oui" checked="checked" /> <label for="oui">garçon</label>

		<input type="radio" name="sexe" value="une fille" id="non" /> <label for="non">fille</label></p>

		<p><label>Ville : <select name="ville">

    		<option value="lille">Lille</option>

    		<option value="paris">Paris</option>

    		<option value="lyon">Lyon</option>

	    	<option value="Marseille">Marseille</option>

	    	</select></label></p>

		<p><label>Loisir :<p> 	   
							<p><input type="checkbox" name="musique" />La musique</p>
							<p><input type="checkbox" name="jeux" />les jeux</p>
							<p><input type="checkbox" name="sport" />Le sport</p>
							<p><input type="checkbox" name="danse" />La danse</p>

		</label></p>

    	<input type="submit" value="Valider" />
		</p>

		</form>
	</body>
</html>