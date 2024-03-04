<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $titre = $_POST['titre'];
    $url = $_POST['url'];
    $description = $_POST['description'];

    // Connexion à la base de données
    $mysqli = new mysqli("localhost", "username", "password", "database_name");
    if($mysqli->connect_error) {
        die("Erreur de connexion à la base de données: " . $mysqli->connect_error);
    }

    // Préparer et exécuter la requête SQL pour ajouter le partenariat
    $sql = "INSERT INTO partners (titre, url, description) VALUES ('$titre', '$url', '$description')";
    if($mysqli->query($sql) === TRUE) {
        echo "Partenariat ajouté avec succès.";
    } else {
        echo "Erreur lors de l'ajout du partenariat: " . $mysqli->error;
    }

    $mysqli->close();
}
?>

