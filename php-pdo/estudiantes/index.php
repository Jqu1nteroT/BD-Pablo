<!DOCTYPE html>
<?php
  try
    {
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=Pokemon;charset=utf8', 'pablo', 'user');
    }
    catch(Exception $e)
    {
    // En cas d'erreur, on affiche un message et on arrête tout
          die('Erreur : '.$e->getMessage());
    }
    $resultat = $bdd->query('SELECT * FROM students');
    $x = array();
    while ($donnees = $resultat->fetch())
          {
            $x[] = $donnees;
          }
 ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Student</title>
</head>
<body>
	<h1>BeCode</h1>
<?php foreach ($x as $row) {
 ?>
	<ul>
		<li><?= $row['nom'];?></li>
		<li><?= $row['prenom'];?></li>
		<li><?= $row['datenaissance'];?></li>
		<li><?= $row['genre'];?></li>
		<li><?= $row['school'];?></li>
	</ul>
<?php }?>	
</body>
</html>