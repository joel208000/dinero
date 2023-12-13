<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Administrateur</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        form {
            width: 300px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        label, input {
            display: block;
            margin-bottom: 10px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <!-- Formulaire pour télécharger des photos -->
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="photo">Choisissez une photo :</label>
        <input type="file" name="photo" accept="image/*" required>
        <br>
        <label for="description">Description :</label>
        <input type="text" name="description">
        <br>
        <button type="submit">Télécharger</button>
    </form>

    <form action="login.php" method="post">
        <button type="submit">Déconnexion</button>
    </form>
    

    <!-- Afficher les images téléchargées avec option de suppression -->
    <?php

    $conn = new mysqli("localhost", "root", "", "database");

    if ($conn->connect_error) {
        die("Erreur de connexion à la base de données : " . $conn->connect_error);
    }

    $result = $conn->query("SELECT * FROM photos ORDER BY date_ajout DESC");

    while ($row = $result->fetch_assoc()) {
        echo '<div>';
        echo '<div style="margin-bottom: 20px;">'; // Ajoutez une marge en bas de chaque image
        echo '<div style="margin-left: 10px;">'; // Ajoutez une marge en bas de chaque image
        echo '<img src="uploads/' . $row["nom_fichier"] . '" alt="' . $row["description"] . '" width="300" height="300">';        
        echo '<form action="delete.php" method="post" style="display:inline;">';
        echo '<input type="hidden" name="id" value="' . $row["id"] . '">';
        echo '<button type="submit">Supprimer</button>';
        echo '</form>';
        echo '</div>';
    }

    $conn->close();
    ?>
</body>
</html>
