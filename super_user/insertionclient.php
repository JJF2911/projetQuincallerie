

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos clients</title>
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
            margin-bottom: 20px;
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
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #e2e2e2;
        }
    </style>
    
</head>
<body>

<h1>Client</h1>
<form id="clientForm" method="post">
    <input type="text" id="nom" name="nom" placeholder="Nom du client" pattern="[A-Za-zÀ-ÿ\s]{2,20}">
    <input type="text" id="prenom" name="prenom" placeholder="Prenom du client" pattern="[A-Za-zÀ-ÿ\s]{2,20}">
    <input type="text" id="adresse" name="adresse" placeholder="Adresse">
    <input type="text" id="tel" name="tel" placeholder="Tel" pattern="\+[0-9]*">
    <button type="submit" name="send">Ajouter client</button>
    <p style="color:red;text-align:center;">
    
    </p>
</form>
<a href="client.php">Voir...</a>

</body>
</html>