<!DOCTYPE html>
<?php
  try
    {
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=weatherapp;charset=utf8', 'pablo', 'user');
    }
    catch(Exception $e)
    {
    // En cas d'erreur, on affiche un message et on arrête tout
          die('Erreur : '.$e->getMessage());
    }
    $resultat = $bdd->query('SELECT * FROM Météo');
    $x = array();
    while ($donnees = $resultat->fetch())
          {
            $x[] = $donnees;
          }
          echo "string"

 ?>
<html>
  <head>
    <meta charset="utf-8">
    <title>php-pdo</title>
  </head>
  <body
  <?php
  foreach ($x as $row) {
    ?>
    <ul>
      <li><?= $row['ville']; ?></li>
      <li><?= $row['haut']; ?></li>
      <li><?= $row['bas']; ?></li>
    </ul>
  <?php  }?>


  </body>
</html>
<?php     $bdd->close(); ?>
