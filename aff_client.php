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

// Récupére les informations des clients depuis la base de données
$stmt = $bdd->query("SELECT * FROM client WHERE visible = 1"); // Modifier la requête pour sélectionner uniquement les clients visibles
$clients = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/js/bootstrap.min.js">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Spline+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="aff_client.css">
  <title>Liste des clients</title>
</head>

<body>

  <!-- ====================== Navbar ============================== -->

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

  <!-- ====================== Fin Navbar ============================== -->

  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="text-center mt-5 mb-4">Liste des clients</h1>
      </div>
    </div>
    <input type="text" id="myInput" class="form-control mb-3" placeholder="Rechercher un client...">
    <p id="resultMessage"></p>
    <!-- button Télécharger Excel -->
    <button class="btn btn-outline-warning custom-btn mb-3" onclick="exportToExcel()">Télécharger Excel</button>
    <table id="myTable" class="table table-striped table-bordered" style="width:100%">
      <tr>
        <th scope="col">Nom du client</th>
        <th scope="col">Numéro de téléphone</th>
        <th scope="col">Adresse</th>
        <th scope="col">Autres informations</th>
        <th scope="col">Modifier</th>
        <th scope="col">Supprimer</th>
      </tr>
      <?php foreach ($clients as $client) : ?>
        <tr>

          <td><?php echo $client['nom_client']; ?></td>
          <td><?php echo $client['numero_telephone']; ?></td>
          <td><?php echo $client['adresse']; ?></td>
          <td><?php echo $client['autres_informations']; ?></td>
          <!-- Lien pour la modification -->
          <td><a href="modifier_client.php?id=<?php echo $client['id_client']; ?>"><button class="btn btn-success">Modifier</button></a></td>
          <!-- Lien pour la suppression -->
          <div>
            <!-- Button trigger modal -->
            <td> <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Supprimer
              </button> </td>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header ">
                    <h1 class="modal-title fs-5 " id="exampleModalLabel">Supprimer client</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    Êtes-vous sûr de vouloir supprimer le client
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Non</button>
                    <a href="supprimer_client.php?id=<?php echo $client['id_client']; ?>">
                      <button type="button" class="btn btn-danger">Oui</button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </tr>
      <?php endforeach; ?>
    </table>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.9/xlsx.full.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <script src="script/client.js"></script>
</body>

</html>