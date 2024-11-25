
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOS PRODUITS</title>
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
            <?php include "index.php" ?>
  
</head>
<body>

<h1>NOS PRODUITS</h1>

<div style="margin-bottom:20px;">
   
</div>
<form id="produitForm" method="post">
    <input type="text" id="nom" name="nom" placeholder="Nom du produit"require>
    <input type="number" id="quantite" name="quantite" placeholder="Quantité"require> 
    <input type="number" id="prix" name="prix" placeholder="Prix"require>
    
         
    <button type="submit" name="send">Ajouter Produit</button>
    <p style="color:red;text-align:center;">
      
    </p>
</form>

</body>
</html>