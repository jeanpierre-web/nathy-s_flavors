<?php

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id_client = $_GET['id'];

    $dns = 'mysql:host=localhost;dbname=db_restau';
    $utilisateur = 'root';
    $motDePasse = '';
    $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
    );

    try {
        $bdd = new PDO($dns, $utilisateur, $motDePasse, $options);

        // Mettre à jour le champ "visible" pour masquer le client au lieu de le supprimer
        $sql = "UPDATE client SET visible = 0 WHERE id_client = :id";
        $stmt = $bdd->prepare($sql);
        $stmt->bindParam(':id', $id_client);
        $stmt->execute();

        header('Location: aff_client.php');
        exit();
    } catch (Exception $e) {
        echo "Erreur lors de la suppression du client : " . $e->getMessage();
    }
} else {
    echo "Identifiant du client non spécifié.";
}
?>
