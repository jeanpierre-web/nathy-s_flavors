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

// Récupérer les données du formulaire
if (isset($_POST['enregistrer_recette'])) {
    if (isset($_POST['nom'], $_POST['ingredients'], $_POST['instructions'])) {
        $nom = $_POST['nom'];
        $ingredients = $_POST['ingredients'];
        $instructions = $_POST['instructions'];

        // Préparer et exécuter la requête SQL pour insérer les données dans la base de données
        $sql = "INSERT INTO recettes (nom, ingredients, instructions) VALUES (:nom, :ingredients, :instructions)";
        $stmt = $bdd->prepare($sql);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':ingredients', $ingredients);
        $stmt->bindParam(':instructions', $instructions);

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
    <link rel="stylesheet" href="recette.css">
    <title>Ajouter une Recette</title>
</head>

<body>
    <!-- Navbar -->
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

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center mt-5 mb-3">Enregistrer une recette </h1>
            </div>
        </div>
        <form action="" method="POST">
            <div>
                <label for="nom" class="form-label">Nom de la Recette:</label>
                <input type="text" class="form-control" id="nom" name="nom" class="form-control" required>
            </div>
            <div>
                <label for="ingredients" class="form-label">Ingrédients:</label>
                <textarea class="form-control" id="ingredients" name="ingredients" class="form-control" required></textarea>
            </div>
            <div>
                <label for="instructions" class="form-label">Instructions:</label>
                <textarea class="form-control mb-3" id="instructions" name="instructions" class="form-control" required></textarea>
            </div>
            <div class="row justify-content-center">
                <div class="col-4">
                    <button type="submit" name="enregistrer_recette" class="btn btn-outline-warning custom-btn">Ajouter Recette</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>