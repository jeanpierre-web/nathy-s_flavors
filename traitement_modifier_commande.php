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
}

if (isset($_POST['modifier_commande'])) {
    // Récupérer les données du formulaire
    $id_commande = $_POST['id_commande'];
    $client_id = $_POST['client'];
    $details_commande = $_POST['details_commande'];

    try {
        // Préparation et exécution de la requête SQL pour mettre à jour les informations de la commande
        $sql = "UPDATE commande SET client_id = :client_id, details_commande = :details_commande WHERE id = :id_commande";
        $stmt = $bdd->prepare($sql);
        $stmt->bindParam(':id_commande', $id_commande);
        $stmt->bindParam(':client_id', $client_id);
        $stmt->bindParam(':details_commande', $details_commande);
        $stmt->execute();

        // Redirection vers la page listant les commandes après la modification
        header('Location: aff_commande.php');
        exit();
    } catch (Exception $e) {
        echo "Erreur lors de la modification de la commande : " . $e->getMessage();
    }
} else {
    echo "Le formulaire de modification n'a pas été soumis.";
}
?>
