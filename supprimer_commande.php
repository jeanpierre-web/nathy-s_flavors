<?php

// Vérifier si l'identifiant de la commande est présent dans l'URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id_commande = $_GET['id'];

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

        // Mettre à jour le champ "visible" pour masquer la commande au lieu de la supprimer
        $sql = "UPDATE commande SET visible = 0 WHERE id = :id";
        $stmt = $bdd->prepare($sql);
        $stmt->bindParam(':id', $id_commande);
        $stmt->execute();

        // Redirection vers la page listant les commandes après la suppression
        header('Location: aff_commande.php');
        exit();
    } catch (Exception $e) {
        echo "Erreur lors de la suppression de la commande : " . $e->getMessage();
    }
} else {
    echo "Identifiant de la commande non spécifié.";
}
