<?php
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
} catch (Exception $e) {
    die("Erreur : " . $e->getMessage());
   // echo "Connexion refusée ❌";
}

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id_commande = $_GET['id'];

    try {
        // Récupérer les informations de la commande à modifier depuis la base de données
        $sql = "SELECT * FROM commande WHERE id = :id";
        $stmt = $bdd->prepare($sql);
        $stmt->bindParam(':id', $id_commande);
        $stmt->execute();
        $commande = $stmt->fetch(PDO::FETCH_ASSOC);

        // Récupérer la liste des clients depuis la base de données
        $sql_clients = "SELECT id_client, nom_client FROM client";
        $stmt_clients = $bdd->query($sql_clients);
        $clients = $stmt_clients->fetchAll(PDO::FETCH_ASSOC);

        // Afficher le formulaire de modification pré-rempli avec les informations de la commande
?>
        <!DOCTYPE html>
        <html lang="fr">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/js/bootstrap.min.js">
            <link rel="stylesheet" href="commandes.css">
            <title>Modifier une commande </title>
        </head>

        <body>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-center mt-5 mb-1">Modifier une commande</h1>
                    </div>
                </div>
                <!-- Formulaire de modification -->
                <form action="traitement_modifier_commande.php" method="POST">

                   <input type="hidden" name="id_commande" value="<?php echo $commande['id']; ?>">

            <label for="client" class="form-label">Client:</label><br>
            <select id="client" name="client" class="form-control" required>
            <option value="">re-sélectionner le client </option>
                <?php foreach ($clients as $client): ?>
                    <option value="<?php echo $client['id_client']; ?>" ><?php echo $client['nom_client']; ?></option>
                <?php endforeach; ?>
            </select>
                    <!-- Ajoutez les autres champs du formulaire avec les valeurs de la commande -->
                    <div>
                        <label for="details_commande" class="form-label">Détails de la commande:</label><br>
                        <textarea id="details_commande" name="details_commande" class="form-control"><?php echo $commande['details_commande']; ?></textarea><br>
                    </div>
                    <!-- Ajoutez d'autres champs ici si nécessaire -->
                    <div class="row justify-content-center">
                        <div class="col-4">
                            <button type="submit" name="modifier_commande" value="Modifier la commande" class="btn btn-outline-warning custom-btn">modifier_commande</button>
                        </div>
                    </div>
                </form>
        </body>

        </html>


<?php

    } catch (Exception $e) {
        echo "Erreur lors de la récupération des informations de la commande : " . $e->getMessage();
    }
} else {
    echo "Identifiant de la commande non spécifié.";
}
?>