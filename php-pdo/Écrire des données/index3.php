<!DOCTYPE html>
<?php 
try
    {
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'pablo', 'user');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(Exception $e)
    {
    // En cas d'erreur, on affiche un message et on arrête tout
          die('Erreur : '.$e->getMessage());
    }
    $resultat = $bdd->query('SELECT * FROM showTypes');
    $x = array();
    while ($donnees = $resultat->fetch())
          {
            $x[$donnees['id']] = $donnees;
          }
    $resultat = $bdd->query('SELECT * FROM genres');
    $y = array();
    while ($donnees1 = $resultat->fetch())
          {
            $y[$donnees1['id']] = $donnees1;
          }
    if (isset($_POST['titre'])) {
    	$heure = $_POST['heure'];
    	$duree = $_POST['duree'];
    	$genre2 = $_POST['genre2'];
    	$genre1 = $_POST['genre1'];
    	//print_r($_POST);
    $resultat = $bdd->exec('INSERT INTO shows (`title`, `performer`, `date`, `showTypesId`, `firstGenresId`, `secondGenreId`, `duration`, `startTime`) VALUES ('.$bdd->quote($_POST["titre"]).','.$bdd->quote($_POST["artiste"]).','.$bdd->quote($_POST["date"]).','.$bdd->quote($_POST["type"]).','.$genre1.','.$genre2.','.$duree.','.$heure.')');
    }

?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ecrire des donnees</title>
</head>
<body>
	<h1>Excercice 03</h1>
	<form action="index3.php" method="post" name="donnees">
		Titre: <input type="text" name="titre"><br>
		Artiste: <input type="text" name="artiste"><br>
		Date: <input type="date" name="date"><br>
		Type: <select name="type">
		<?php foreach ($x as $key => $row) {
		?>			   
				   <option value="<?= $key ?>"><?= $row['type']?></option>
		<?php }?>
		</select>
			   <br>
		1er Genre: <select name="genre1">
		<?php foreach ($y as $key1 => $row1) {?>
					<option value="<?= $key1 ?>"><?= $row1['genre']?></option>
		<?php }?>
		</select><br>
		2er Genre: <select name="genre2">
		<?php foreach ($y as $key1 => $row1) {?>
					<option value="<?= $key1 ?>"><?= $row1['genre']?></option>
		<?php }?>
		</select><br>
		Durée: <input type="number" name="duree"><br>
		Heure de début: <input type="number" name="heure"><br>
		<input type="submit">
	</form>
	<hr>
</body>
</html>