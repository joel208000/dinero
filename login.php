<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {
      background-color: #f5f5f5;
      font-family: Arial, sans-serif;
        display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
    
    }

    form {
      margin: 0 auto;
      width: 300px;
      border: 1px solid #ddd;
      border-radius: 5px;
      padding: 20px;
      background-color: #fff;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 3px;
      font-size: 16px;
    }

    button {
      margin-top: 10px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background-color: #3E8E41;
    }
  </style>
</head>
<body>
  <form action="loginn.php" method="post">
    <label for="username">Nom d'utilisateur :</label>
    <input type="text" name="username" required>
    <br>
    <label for="password">Mot de passe :</label>
    <input type="password" name="password" required>
    <br>
    <button type="submit">Se connecter</button>
  </form>
</body>
</html>
