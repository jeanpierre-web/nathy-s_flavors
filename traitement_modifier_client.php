<?php

// Vérifier si le formulaire de modification a été soumis
if (isset($_POST['modifier_client'])) {
    // Récupérer les données du formulaire
    $id_client = $_POST['id_client'];
    $nom_client = $_POST['nom_client'];
    $numero_telephone = $_POST['numero_telephone'];
    $adresse = $_POST['adresse'];
    $autres_informations = $_POST['autres_informations'];

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

        // Préparer et exécuter la requête SQL pour mettre à jour les informations du client
        $sql = "UPDATE client SET nom_client = :nom_client, numero_telephone = :numero_telephone, adresse = :adresse, autres_informations = :autres_informations WHERE id_client = :id";
        $stmt = $bdd->prepare($sql);
        $stmt->bindParam(':id', $id_client);
        $stmt->bindParam(':nom_client', $nom_client);
        $stmt->bindParam(':numero_telephone', $numero_telephone);
        $stmt->bindParam(':adresse', $adresse);
        $stmt->bindParam(':autres_informations', $autres_informations);

        $stmt->execute();

        // Redirection vers la page listant les clients après la modification
        header('Location: aff_client.php');
        exit();
    } catch (Exception $e) {
        echo "Erreur lors de la modification du client : " . $e->getMessage();
    }
} else {
    echo "Le formulaire de modification n'a pas été soumis.";
}
