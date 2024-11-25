
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Produit</title>
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
        input, button, select {
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

<h1>Modifier Produit</h1>
<form method="post">
    <input type="text" id="nom" name="nom" placeholder="Nom du produit" value="<?= htmlspecialchars($produitToUpdate['produit_nom'] ?? '') ?>" required>
    <input type="number" id="quantite" name="quantite" placeholder="Quantité" value="<?= htmlspecialchars($produitToUpdate['produit_quantite'] ?? '') ?>" required>
    <input type="number" step="0.01" id="prix" name="prix" placeholder="Prix" value="<?= htmlspecialchars($produitToUpdate['produit_prix'] ?? '') ?>" required>

    <button type="submit" name="update">Mettre à jour</button>
    <p class="message"><?= $message ?></p>
</form>

</body>
</html>