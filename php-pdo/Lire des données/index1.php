<!DOCTYPE html>
<?php
  try
    {
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'pablo', 'user');
    }
    catch(Exception $e)
    {
    // En cas d'erreur, on affiche un message et on arrête tout
          die('Erreur : '.$e->getMessage());
    }
    //exc 01
    $resultat = $bdd->query('SELECT * FROM clients');
    $x = array();
    while ($donnees = $resultat->fetch())
          {
            $x[] = $donnees;
          }
    //exc 02
    $resultat1 = $bdd->query('SELECT * FROM showTypes');
    $y = array();
    	while ($donnees1 = $resultat1->fetch())
          	{
           	 $y[] = $donnees1;
          }
    //exc 03
     $resultat = $bdd->query('SELECT * FROM clients LIMIT 20');
    	$z = array();
    	while ($donnees = $resultat->fetch())
          	{
           	 $z[] = $donnees;
          	}
    //exc 04
    $resultat = $bdd->query('SELECT * FROM clients WHERE card = 1');
    	$a = array();
    	while ($donnees = $resultat->fetch())
          	{
           	 $a[] = $donnees;
          	}
     //exc 05
     $resultat = $bdd->query('SELECT * FROM clients');
    	$b = array();
    	while ($donnees = $resultat->fetch())
          	{
           	 $b[] = $donnees;
          	}
    //exc 06
    $resultat = $bdd->query('SELECT * FROM shows ORDER BY title ASC');
    	$c = array();
    	while ($donnees = $resultat->fetch())
          	{
           	 $c[] = $donnees;
          	}
    //exc 07
    $resultat = $bdd->query('SELECT * FROM clients');
    	$d = array();
    	while ($donnees = $resultat->fetch())
          	{
           	 $d[] = $donnees;
          	}
 ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Colyseum</title>
</head>
<body>
	<h1>Excercice 1</h1>
<hr>
<?php 
	foreach ($x as $row) {
?>
	
		<?= $row ['lastName']?>
		<?= $row ['firstName']?><br>


<?php }
?>	
	<h1>Excercice 2</h1>
<hr>
<?php 
	foreach ($y as $row) {
?>
	
		<?= $row ['type']?><br>


<?php }
?>
<hr>
	<h1>Excercice 3</h1>
<?php 
	foreach ($z as $row) {
?>
		<?= $row ['lastName']?>
		<?= $row ['firstName']?><br>
<?php }
?>
<hr>
	<h1>Excercice 4</h1>
<?php 
	foreach ($a as $row) {
?>
		<?= $row ['lastName']?>
		<?= $row ['firstName']?><br>
<?php }
?>
<hr>
	<h1>Excercice 5</h1>
<?php 
	foreach ($b as $row) {
?>
		<p>Nom : <?= $row ['lastName']?><br>
		Prenom : <?= $row ['firstName']?></p><br>
<?php }
?>
<hr>
	<h1>Excercice 6</h1>
<?php 
	foreach ($c as $row) {
?>
		<p><?= $row ['title']?> par	<?= $row ['performer']?>, le <?= $row ['date']?> à <?= $row ['startTime']?></p><br>
<?php }
?>
<hr>
	<h1>Excercice 7</h1>
<?php 
	foreach ($d as $row) {
?>
		<p>Nom : <?= $row ['lastName']?><br>
		Prenom : <?= $row ['firstName']?><br>
		Date de naissance : <?= $row ['birthDate']?><br>
		Carte de fidelite : <?php 
			if ($row ['card'] == 1) {
				echo "Oui <br>Numero de carte:". $row ['cardNumber'];
			}else{
					echo "Non";
				} ?>		
		</p><br>
<?php }
?>
</body>
</html>