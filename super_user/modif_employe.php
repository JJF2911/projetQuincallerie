

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Employé</title>
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

<h1>Modifier Employé</h1>
<form method="post">
    <input type="text" id="nom" name="nom" placeholder="Nom de l'employé" value="<?= htmlspecialchars($employeToUpdate['employe_nom'] ?? '') ?>" required>
    <input type="text" id="prenom" name="prenom" placeholder="Prénom de l'employé" value="<?= htmlspecialchars($employeToUpdate['employe_prenom'] ?? '') ?>" required>
    <input type="text" id="adresse" name="adresse" placeholder="Adresse" value="<?= htmlspecialchars($employeToUpdate['employe_adresse'] ?? '') ?>" required>
    <input type="text" id="tel" name="tel" placeholder="Tel" value="<?= htmlspecialchars($employeToUpdate['employe_tel'] ?? '') ?>" required pattern="\+[0-9]*">
    
    <button type="submit" name="update">Mettre à jour</button>
    <p class="message"><?= $message ?></p>
</form>

</body>
</html>