<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Identifiants</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Liste des Identifiants</h1>

    <?php
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "database_name";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM identifiants";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Identifiant</th><th>Nom Complet</th><th>Raccourci Nom</th><th>Code Pays</th><th>Niveau</th><th>Numéro Membre</th><th>Date Adhésion</th><th>Statut Temporaire</th><th>Code PIN</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["identifiant"] . "</td>";
            echo "<td>" . $row["nom_complet"] . "</td>";
            echo "<td>" . $row["raccourci_nom"] . "</td>";
            echo "<td>" . $row["code_pays"] . "</td>";
            echo "<td>" . $row["niveau"] . "</td>";
            echo "<td>" . $row["numero_membre"] . "</td>";
            echo "<td>" . $row["date_adhesion"] . "</td>";
            echo "<td>" . $row["statut_temporaire"] . "</td>";
            echo "<td>" . $row["code_pin"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Aucun identifiant trouvé.";
    }

    $conn->close();
    ?>
</body>
</html>

