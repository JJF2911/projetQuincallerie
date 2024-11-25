<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Client</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f4f4f4;
        }
        h1 {
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
            max-width: 300px;
            margin: auto;
        }
        input, button {
            padding: 10px;
            margin: 5px 0;
            font-size: 16px;
        }
        .message {
            color: red;
            text-align: center;
        }
    </style>
    
     
</head>
<body>

<h1>Modifier Client</h1>
<form method="post">
    <input type="text" name="nom" placeholder="Nom du client" value="<?= htmlspecialchars($clientToUpdate['client_nom'] ?? '') ?>" required>
    <input type="text" name="prenom" placeholder="Prénom du client" value="<?= htmlspecialchars($clientToUpdate['client_prenom'] ?? '') ?>" required>
    <input type="text" name="adresse" placeholder="Adresse" value="<?= htmlspecialchars($clientToUpdate['client_adresse'] ?? '') ?>" required>
    <input type="text" name="tel" placeholder="Téléphone" value="<?= htmlspecialchars($clientToUpdate['client_tel'] ?? '') ?>" required>
    <button type="submit" name="update">Mettre à jour</button>
    <p class="message"><?= $message ?></p>
</form>

</body>
</html>