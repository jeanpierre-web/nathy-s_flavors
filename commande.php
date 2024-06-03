<?php
$dns = 'mysql:host=localhost;dbname=db_restau';
$utilisateur = 'root';
$motDePasse = '';
$options = array(
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
);


$message = '';

try {
  $bdd = new PDO($dns, $utilisateur, $motDePasse, $options);
  // echo "Connexion réussie ✅";
} catch (Exception $e) {
  die("Erreur : " . $e->getMessage());
  // echo "Connexion refusée ❌";
}

// Récupérer les informations des clients depuis la base de données
$stmt = $bdd->query("SELECT * FROM client");
$clients = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (isset($_POST['enregistrer'])) {
  if (isset($_POST['details_commande'])) {
    $details_commande = $_POST['details_commande'];
    $id_client = $_POST['nom_client'];
    //var_dump($id_client);                                                    
    $sql = "INSERT INTO commande ( details_commande, client_id) VALUES ( :details_commande, :id_client)";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':details_commande', $details_commande);
    $stmt->bindParam(':id_client', $id_client);

    try {
      $stmt->execute();
      $message = "Commande enregistrée avec succès.";
    } catch (Exception $e) {
      echo "Erreur lors de l'enregistrement de la commande : " . $e->getMessage();
    }
  } else {
    $message = "Tous les champs requis ne sont pas définis.";
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
  <link rel="stylesheet" href="commandes.css">
  <title>Enregistrer une commande</title>
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
          <li class="nav-item">
            <a class="nav-link" href="recette.php">Enregistrer une recette</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- ============================= Fin Navbar ========================== -->

  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="text-center mt-5 mb-1">Enregistrer une commande</h1>
      </div>
    </div>
    <form action="" method="POST">
      <div>
        <label for="nom_client">Nom du client :</label><br>
        <select type="number" id="nom_client" name="nom_client" class="form-select" required>
          <option>Selectionner un client</option>
          <?php foreach ($clients as $client) : ?>
            <option value="<?php echo $client['id_client'] ?>"><?php echo $client['nom_client']; ?></option>
          <?php endforeach; ?>
        </select> <br>
      </div>
      <div>
        <label for="details_commande" class="form-label">Détails de la commande :</label><br>
        <textarea id="details_commande" name="details_commande" class="form-control" required></textarea><br>
      </div>
      <div class="row justify-content-center">
        <div class="col-4">
          <button type="submit" name="enregistrer" value="Enregistrer la commande" class="btn btn-outline-warning custom-btn">Enregistrer la commande</button>
        </div>
      </div>
    </form>

    <?php if (!empty($message)) : ?>
      <p><?php echo $message; ?></p>
    <?php endif; ?>
    </section>
  </div>
</body>

</html>