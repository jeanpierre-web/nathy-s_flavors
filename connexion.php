<?php

$dns = 'mysql:host=localhost;dbname=db_restau';
$utilisateur = 'root';
$motDePasse = '';
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
  );  
  
$message = ''; // Variable pour stocker les messages à afficher à l'utilisateur

try {
    $bdd = new PDO($dns, $utilisateur, $motDePasse, $options);
} catch (Exception $e) {
    die("Erreur : " . $e->getMessage());
   // echo "Connexion refusée ❌";
}

if (isset($_POST['connexion'])) {
    if(isset($_POST['email'], $_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Préparer et exécuter la requête SQL pour vérifier les informations de connexion
        $sql = "SELECT * FROM utilisateurs WHERE email = :email AND password = :password";
        $stmt = $bdd->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);

        try {
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user) {
                $message = "Connexion réussie ! Bienvenue, " . $user['prenom'] . " " . $user['nom'] . ".";
                //  rediriger l'utilisateur vers la page commande
                 header('Location: commande.php');
            } else {
                $message = "Identifiants incorrects. Veuillez réessayer.";
            }
        } catch (Exception $e) {
            echo "Erreur lors de la vérification des informations de connexion : " . $e->getMessage();
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
    <link rel="stylesheet" href="ins&con.css">
    <title>Nathy's Flavors - Connexion</title>
</head>
<body>
    <script src="script/connexion.js"></script>
    <section id="page-content">
        <img src="img/nathy.jpg" alt="Logo" id="logo">
        <h1>Connectez-vous !!!</h1>
        <form action="" method="POST">
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
                <button type="submit" name="connexion"> Connexion </button>
            </div>
        </form>
        <p> Vous n'avez pas encore de compte ? <a href="inscription.php">S'inscrire </a></p>
        <?php if (!empty($message)): ?>
            <p><?php echo $message; ?></p>
        <?php endif; ?>
    </section>
</body>
</html>
