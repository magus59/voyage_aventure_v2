<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../CSS/article.css">
    <link rel="stylesheet" href="../CSS/styles.css">
    <title>Créer un article</title>
</head>

<body>
<nav>
        <ul id="ul_nav">
            <a href="./Accueil/index.php">
                <li id="li_nav">Accueil</li>
            </a>
            <a href="./index.php">
                <li id="li_nav">Article</li>
            </a>
            <a href="./commentaires/index.php">
                <li id="li_nav">Commentaires</li>
            </a>
        </ul>
    </nav>
    <h1>Créer un article</h1>
    <form id="form_create_articles" action="index.php?controller=article&action=create" method="POST">
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