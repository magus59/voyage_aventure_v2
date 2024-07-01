<!DOCTYPE html>
<html>
<head>
    <title>Créer un article</title>
</head>
<body>
    <h1>Créer un article</h1>
    <form action="index.php?controller=article&action=create" method="POST">
        <label for="titre">Titre:</label>
        <input type="text" id="titre" name="titre" required>
        <br>
        <label for="contenu">Contenu:</label>
        <textarea id="contenu" name="contenu" required></textarea>
        <br>
        <label for="image_url">URL de l'image:</label>
        <input type="text" id="image_url" name="image_url">
        <br>
        <label for="categorie_id">Catégorie:</label>
        <input type="text" id="categorie_id" name="categorie_id" required>
        <br>
        <button type="submit">Créer</button>
    </form>
</body>
</html>
