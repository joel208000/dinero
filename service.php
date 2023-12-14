<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paiement Canal Dinero</title>
    <link rel="stylesheet" href="./style.css">
   
</head>
<body>
<header>
        <nav  id="nav">
            <a href="#"><img src="./Images/capture.png" alt="" class="logo"></a>
            <ul id="nav-list" class="whitez">
                <li><a href="acc.php">Accueil</a></li>
                <li><a href="ut.php">Historique de gain</a></li>
                <li><a href="#">A propos</a></li>
                <li><a href="#">Service</a></li>
            </ul>
            <div id="icons"></div>
        </nav>
    </header>
<div>
   <h1 class="paie">Passer au paiement</h1>
    <p class="faites">Faites un bon choix et integrer mon canal pour maximiser vos gains comme moi </p>
    <div class="numero-de-depot">
        <span>Choisissez l'un des numeros sur lequel fait le depot</span>
        <p>+225 XXXXXXX  <span><img src="./Images/wave-logo.png" alt="" style="width: 70px; height: auto;"></span></p>
        <p>+225 XXXXXXX  <span><img src="./Images/orange-money.png" alt="" style="width: 70px; height: auto;"></span></p>
        <p>+225 XXXXXXX  <span><img src="./Images/Moov_Africa_logo.png" alt="" style="width: 70px; height: auto;"></span></p>  
    </div>
    <div class="formule">
        <span class="gold">Formule I : <h5>100.000 Fcfa</h5></span>
        <span class="diamond">Formule II : <h5>100.000 Fcfa</h5></span>
        <span class="argent">Formule III : <h5>100.000 Fcfa</h5></span>
    </div>
   </div>
    <form action="#" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" placeholder="Dinero"  required>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" placeholder="John" required>

        <label for="numero">Numéro sur lequel vous avez effectué le Dépôt :</label>
        <input type="text" id="numero" name="numero" required placeholder="+225 xxxxxxx"><br>
        <label for="numero_depot">Numero ayant effectué le depot: </label>
        <input type="text" name="numero_depot" id="numero_depot" placeholder="+225 xxxxxxx" required>
        <label for="numero_whatsapp">Numéro WhatsApp :</label>
        <input type="text" id="numero_whatsapp" name="numero_whatsapp" placeholder="+225 xxxxxxx" required>
        <input type="submit" value="Envoyer">
    </form>
   
    <script src="./index.js"></script>
</body>
</html>
