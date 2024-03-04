<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database_name";

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fonction pour échapper les entrées utilisateur pour éviter les injections SQL et XSS
function sanitizeInput($input) {
    global $conn;
    $input = htmlspecialchars($input); // Échapper les caractères spéciaux HTML
    $input = $conn->real_escape_string($input); // Échapper les caractères spéciaux SQL
    return $input;
}

// Récupération et nettoyage des données d'entrée
$identifiant = sanitizeInput($_POST['identifiant']);
$nom_complet = sanitizeInput($_POST['nom_complet']);
$raccourci_nom = sanitizeInput($_POST['raccourci_nom']);
$code_pays = sanitizeInput($_POST['code_pays']);
$niveau = intval($_POST['niveau']); // Conversion en entier
$numero_membre = intval($_POST['numero_membre']); // Conversion en entier
$date_adhesion = sanitizeInput($_POST['date_adhesion']);
$statut_temporaire = sanitizeInput($_POST['statut_temporaire']);
$code_pin = intval($_POST['code_pin']); // Conversion en entier

// Requête préparée pour éviter les injections SQL
$sql = "INSERT INTO identifiants (identifiant, nom_complet, raccourci_nom, code_pays, niveau, numero_membre, date_adhesion, statut_temporaire, code_pin) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
$stmt = $conn->prepare($sql);

// Liaison des paramètres et exécution de la requête
if ($stmt) {
    $stmt->bind_param("ssssiisii", $identifiant, $nom_complet, $raccourci_nom, $code_pays, $niveau, $numero_membre, $date_adhesion, $statut_temporaire, $code_pin);
    if ($stmt->execute()) {
        echo "Identifiant ajouté avec succès.";
    } else {
        echo "Erreur lors de l'ajout de l'identifiant : " . $stmt->error;
    }
    $stmt->close();
} else {
    echo "Erreur de préparation de la requête : " . $conn->error;
}

// Fermeture de la connexion à la base de données
$conn->close();
?>
