<?php

$dns = 'mysql:host=localhost;dbname=db_restau';
$utilisateur = 'root';
$motDePasse = '';
$options = array(
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
);


try {
  $bdd = new PDO($dns, $utilisateur, $motDePasse, $options);
  // echo "Connexion réussie ✅";
} catch (Exception $e) {
  die("Erreur : " . $e->getMessage());
  // echo "Connexion refusée ❌";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/js/bootstrap.min.js">
  <link rel="stylesheet" href="clients.css">
  <title>Enregistrement Les dépences</title>
</head>
<body>
    
</body>
</html>