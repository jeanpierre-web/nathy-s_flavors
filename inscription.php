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
} catch (Exception $e) {
    die("Erreur : " . $e->getMessage());
   // echo "Connexion refusée ❌";
}

if (isset($_POST['ok'])) {
    if (isset($_POST['nom'], $_POST['prenom'], $_POST['password'], $_POST['email'])) {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        // Préparer et exécuter la requête SQL pour insérer les données dans la base de données
        $sql = "INSERT INTO utilisateurs (nom, prenom, password, email) VALUES (:nom, :prenom, :password, :email)";
        $stmt = $bdd->prepare($sql);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':email', $email);

        try {
            $stmt->execute();
            header("location: commande.php");
        } catch (Exception $e) {
            echo "Erreur lors de l'enregistrement des données : " . $e->getMessage();
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
    <link rel="stylesheet" href="ins&con.css">
    <title>Nathy's Flavors - inscription</title>
</head>

<body>
    <script src="script/connexion.js"></script>
    <section id="page-content">
        <img src="img/nathy.jpg" alt="Logo" id="logo">
        <h1>Inscrivez vous !!!</h1>
        <form action="" method="POST">
            <div class="label-input-group">
                <label for="prenom"> Prenom </label>
                <input type="text" name="prenom" id="prenom">
            </div>
            <div class="label-input-group">
                <label for="nom"> Nom </label>
                <input type="text" name="nom" id="nom">
            </div>
            <div class="label-input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="label-input-group">
                <label for="password"> Mot de passe
                    <button type="button" id="togglePassword" onclick="togglePasswordField()">
                        <img src="img/low-vision(1).svg" alt="Afficher/Masquer le mot de passe" id="oeil">
                    </button>
                </label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="from-buttons">
                <button type="submit" name="ok"> inscription </button>
            </div>
        </form>
        <p> Avez-vous déjà un compte ? <a href="connexion.php">Se connecter </a></p>
    </section>
</body>

</html>