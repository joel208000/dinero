<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Page Utilisateur</title>

    <style>
    .image-container {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }

    .image-container img {
        width: calc(100% / 3 - 20px);
        height: auto;
        margin-bottom: 20px;
        box-sizing: border-box;
    }

    @media screen and (max-width: 1200px) {
        .image-container img {
            width: calc(100% / 2 - 20px);
        }
    }

    @media screen and (max-width: 768px) {
        .image-container img {
            width: 100%;
        }
    }
</style>

</head>
<body >

    <header>
        <nav  id="nav">
            <a href="#"><img src="./Images/capture.png" alt="" class="logo"></a>
            <ul id="nav-list">
                <li><a href="acc.php">Accueil</a></li>
                <li><a href="ut.php">Historique de gain</a></li>
                <li><a href="#">A propos</a></li>
                <li><a href="#">Service</a></li>
            </ul>
            <div id="icons"></div>
        </nav>
    </header>
    
    <br>

    <!-- Affiche les photos depuis la base de données -->
   
    <?php
    $conn = new mysqli("localhost", "root", "", "database");

    if ($conn->connect_error) {
        die("Erreur de connexion à la base de données : " . $conn->connect_error);
    }

    $result = $conn->query("SELECT * FROM photos ORDER BY date_ajout DESC");

    echo '<div class="image-container">'; // Conteneur pour les images

    $count = 0; // Compteur pour gérer les groupes de trois images

    while ($row = $result->fetch_assoc()) {
        echo '<div>';
        echo '<img src="uploads/' . $row["nom_fichier"] . '" alt="' . $row["description"] . '" width="300" height="300">';
        echo '</div>';

        $count++;

        if ($count % 3 === 0) {
            // Si trois images ont été affichées, commencez un nouveau groupe
            echo '</div><div class="image-container">';
        }
    }

    echo '</div>'; // Fermez le dernier conteneur

    $conn->close();
    ?>
    <script src="./index.js"></script>
</body>
</html>
