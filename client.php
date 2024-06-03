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

if (isset($_POST['enregistrer_client'])) {
  if (isset($_POST['nom_client'], $_POST['numero_telephone'], $_POST['adresse'])) {
    $nom_client = $_POST['nom_client'];
    $numero_telephone = $_POST['numero_telephone'];
    $adresse = $_POST['adresse'];
    $autres_informations = isset($_POST['autres_informations']) ? $_POST['autres_informations'] : '';

    // Préparer et exécuter la requête SQL pour insérer les données dans la base de données
    $sql = "INSERT INTO client (nom_client, numero_telephone, adresse, autres_informations) VALUES (:nom_client, :numero_telephone, :adresse, :autres_informations)";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':nom_client', $nom_client);
    $stmt->bindParam(':numero_telephone', $numero_telephone);
    $stmt->bindParam(':adresse', $adresse);
    $stmt->bindParam(':autres_informations', $autres_informations);

    try {
      $stmt->execute();
      echo "Informations client enregistrées avec succès.";
    } catch (Exception $e) {
      echo "Erreur lors de l'enregistrement des informations client : " . $e->getMessage();
    }
  } else {
    echo "Tous les champs requis ne sont pas définis.";
  }
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/js/bootstrap.min.js">
  <link rel="stylesheet" href="clients.css">
  <title>Enregistrement de client</title>
</head>

<body>

  <!-- ============================= Navbar ========================== -->

  <nav class="navbar navbar-expand-lg bg-while shadow  py-3">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="img/nathy.jpg" alt="Logo" width="100px">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link" href="aff_client.php">Voir les clients</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="client.php">Enregistrer un client</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aff_commande.php">Voir les commandes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="commande.php">Enregistrer une commande</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="recette.php">Enregistrer une recette</a>
          </li> -->
        </ul>
      </div>
    </div>
  </nav>

  <!-- ============================= Fin Navbar ========================== -->

  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="text-center mt-5 mb-3">Enregistrer un client</h1>
      </div>
    </div>
    <form action="" method="POST">
      <div>
        <label for="nom_client" class="form-label">Nom du client:</label><br>
        <input type="text" id="nom_client" name="nom_client" class="form-control" required><br>
      </div>
      <div>
        <label for="numero_telephone" class="form-label">Numéro de téléphone:</label><br>
        <input type="text" id="numero_telephone" name="numero_telephone" class="form-control" required><br>
      </div>
      <div>
        <label for="adresse" class="form-label">Adresse:</label><br>
        <textarea id="adresse" name="adresse" class="form-control" required></textarea><br>
      </div>
      <div>
        <label for="autres_informations" class="form-label">Autres informations:</label><br>
        <textarea id="autres_informations" name="autres_informations" class="form-control"></textarea><br>
      </div>
      <div class="row justify-content-center">
        <div class="col-4">
          <button type="submit" name="enregistrer_client" value="Enregistrer le client" class="btn btn-outline-warning custom-btn">Enregistrer le client</button>
        </div>
      </div>
    </form>
  </div>
</body>

</html>