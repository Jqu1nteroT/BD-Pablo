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
    	print_r($_POST['date']);
    	
        if (!empty($_POST['carte']) ) {
        	$carte = 1;
        }else{
        	$carte = 0;
        	$numCarte = null;
        }
        $resultat = $bdd->prepare('UPDATE clients SET lastName = '.$bdd->quote($_POST['nom']).' AND firstName = '.$bdd->quote($_POST['prenom']).' AND birthDate = '.$bdd->quote($_POST['date']).' WHERE id = 22 ')->execute();
            /*$bdd->execute();*/
        print_r($resultat);
    } 


?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ecrire des donnees</title>
</head>
<body>
	<h1>Excercice 04</h1>
	<form action="index4.php" method="post" name="donnees">
		Nom: <input type="text" name="nom"><br>
		Prenom: <input type="text" name="prenom"><br>
		Date de naissance: <input type="date" name="date"><br>
		Carte de fidelite: <input type="checkbox" name="carte"><br>
		Numero de carte de fidelite: <input type="number" name="numCarte"><br>
		<input type="submit">
	</form>
	<hr>
</body>
</html>