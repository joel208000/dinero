<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Contact</title>
</head>
<body>
    <h1>Formulaire de Contact</h1>
    <form action="/submit" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required><br>

        <label for="numero_depot">Numéro du Dépôt :</label>
        <input type="text" id="numero_depot" name="numero_depot" required><br>

        <label for="numero_whatsapp">Numéro WhatsApp :</label>
        <input type="text" id="numero_whatsapp" name="numero_whatsapp" required><br>

        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
