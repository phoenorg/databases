<?php
// Récupération des données envoyées par le formulaire
$titre = $_POST['titre'];
$url = $_POST['url'];
$description = $_POST['description'];

// Connexion à la base de données
$host = "localhost"; // Nom d'hôte du serveur MySQL
$user = "username"; // Nom d'utilisateur de la base de données
$password = "password"; // Mot de passe de la base de données
$dbname = "database_name"; // Nom de la base de données
$dsn = "mysql:host=$host;dbname=$dbname";
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);

try {
    $pdo = new PDO($dsn, $user, $password, $options);
} catch(PDOException $e) {
    echo "Erreur de connexion à la base de données: " . $e->getMessage();
    exit;
}

// Préparation et exécution de la requête SQL
$stmt = $pdo->prepare("INSERT INTO liens (titre, url, description) VALUES (:titre, :url, :description)");
$stmt->execute(array(':titre' => $titre, ':url' => $url, ':description' => $description));

// Redirection vers la page d'affichage des liens
header('Location: https://phoen.org');
exit();
?>
