<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../../CSS/styles.css">
    <title>Créer un Commentaire</title>
</head>
<body>
<h1>Créer un Commentaire</h1>
<form action="index.php?controller=commentaire&action=create" method="POST">
    <label for="contenu">Contenu:</label>
    <textarea id="contenu" name="contenu" required></textarea><br>

    <label for="utilisateur_id">ID Utilisateur:</label>
    <input type="number" id="utilisateur_id" name="utilisateur_id" required><br>

    <label for="article_id">ID Article:</label>
    <input type="number" id="article_id" name="article_id" required><br>

    <input type="submit" value="Créer">
</form>
</body>
</html>
