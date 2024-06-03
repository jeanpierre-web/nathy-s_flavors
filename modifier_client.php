<?php

// Vérifier si l'identifiant du client est présent dans l'URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id_client = $_GET['id'];

    // Connexion à la base de données
    $dns = 'mysql:host=localhost;dbname=db_restau';
    $utilisateur = 'root';
    $motDePasse = '';
    $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
      );      

    try {
        $bdd = new PDO($dns, $utilisateur, $motDePasse, $options);

        // Récupérer les informations du client à modifier depuis la base de données
        $sql = "SELECT * FROM client WHERE id_client = :id";
        $stmt = $bdd->prepare($sql);
        $stmt->bindParam(':id', $id_client);
        $stmt->execute();
        $client = $stmt->fetch(PDO::FETCH_ASSOC);

        // Afficher le formulaire de modification pré-rempli avec les informations du client
?>

        <!DOCTYPE html>
        <html lang="fr">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/js/bootstrap.min.js">
            <link rel="stylesheet" href="clients.css">
            <title>Modifier un client</title>
        </head>

        <body>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-center mt-5 mb-3">Enregistrer un client</h1>
                    </div>
                </div>
                <form action="traitement_modifier_client.php" method="POST">
                    <div>
                        <input type="hidden" name="id_client" value="<?php echo $client['id_client']; ?>">
                        <div>
                            <label for="nom_client" class="form-label">Nom du client:</label><br>
                            <input type="text" id="nom_client" name="nom_client" class="form-control" value="<?php echo $client['nom_client']; ?>" required><br>
                        </div>
                        <div>
                            <label for="numero_telephone" class="form-label">Numéro de téléphone:</label><br>
                            <input type="text" id="numero_telephone" name="numero_telephone" class="form-control" value="<?php echo $client['numero_telephone']; ?>" required><br>
                        </div>
                        <div>
                            <label for="adresse" class="form-label">Adresse:</label><br>
                            <textarea id="adresse" name="adresse" class="form-control" required><?php echo $client['adresse']; ?></textarea><br>
                        </div>
                        <div>
                            <label for="autres_informations" class="form-label">Autres informations:</label><br>
                            <textarea id="autres_informations" name="autres_informations" class="form-control"><?php echo $client['autres_informations']; ?></textarea><br>
                        </div>
                        <!-- Ajoutez les autres champs du formulaire avec les valeurs du client -->
                        <div class="row justify-content-center">
                            <div class="col-4">
                                <button type="submit" name="modifier_client" value="Modifier le client" class="btn btn-outline-warning custom-btn">Modifier le client</button>
                            </div>
                        </div>
                </form>
            </div>

        </body>

        </html>

<?php

    } catch (Exception $e) {
        echo "Erreur lors de la récupération des informations du client : " . $e->getMessage();
    }
} else {
    echo "Identifiant du client non spécifié.";
}

?>