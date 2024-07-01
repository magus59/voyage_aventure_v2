<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="/voyage_aventure_v2/CSS/utilisateur.css">
</head>
<body>
    <div class="container">
        <h1>Inscription</h1>
        <form action="submit.php" method="POST">
            <div class="form-group">
                <label for="userName">Nom d'utilisateur :</label>
                <input type="text" id="userName" name="userName" required>
            </div>
           
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirmer le mot de passe :</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
            </div>
            <button type="submit" class="btn">S'inscrire</button>
        </form>
        <p>Déjà inscrit ? <a href="login.html">Connectez-vous ici</a>.</p>
    </div>
</body>
</html>