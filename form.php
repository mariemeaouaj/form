<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription Administrateur</title>
    <link rel="stylesheet" href="css.css">
    <style>
        .success-message {
            color: green;
            margin-top: 10px;
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Inscription Administrateur</h2>
        <form id="inscriptionForm" action="traitement_abonnement.php" method="POST">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" placeholder="Ajouter votre nom" required><br><br>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" placeholder="Ajouter votre prénom" required><br><br>

            <label for="adresse">Adresse :</label>
            <input type="text" id="adresse" name="adresse" placeholder="Ajouter votre adresse" required><br><br>

            <label for="telephone">Téléphone :</label>
            <input type="tel" id="telephone" name="telephone" placeholder="Ajouter votre numéro de téléphone" required><br><br>

            <button type="submit" class="orange-btn" id="inscrireBtn">Inscrire</button>
        </form>
        <?php if (isset($_GET['success']) && $_GET['success'] == '1'): ?>
            <p id="successMessage" class="success-message" style="display: block;">Inscription successful</p>
        <?php endif; ?>
    </div>
</body>
</html>
