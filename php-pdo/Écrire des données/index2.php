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

    if (isset($_POST['nom'])) {
    	//print_r($_POST);
    	$numCarte = $_POST['numCarte'];
        if (!empty($_POST['carte']) ) {
        	$carte = 1;
        }else{
        	$carte = 0;
        	$numCarte = null;
        }
    $resultat = $bdd->prepare('INSERT INTO clients (`lastName`, `firstName`, `birthDate`, `card`, `cardNumber`) VALUES ('.$bdd->quote($_POST["nom"]).','.$bdd->quote($_POST["prenom"]).','.$bdd->quote($_POST["date"]).','.$carte.',:numCarte)');
    $resultat->bindValue(':numCarte',$numCarte, PDO::PARAM_INT);
    $resultat->execute();
    } 
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ecrire des donnees</title>
</head>
<body>
	<h1>Excercice 01 et 02</h1>
	<form action="index2.php" method="post" name="donnees">
		Nom: <input type="text" name="nom"><br>
		Prenom: <input type="text" name="prenom"><br>
		Date de naissance: <input type="date" name="date"><br>
		Carte de fidelite: <input type="text" name="carte"><br>
		Numero de carte de fidelite: <input type="number" name="numCarte"><br>
		<input type="submit">
	</form>
	<hr>
</body>
</html>