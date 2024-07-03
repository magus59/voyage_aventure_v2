<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../CSS/article.css">
    <link rel="stylesheet" href="../CSS/styles.css">
    <title>Éditer l'article</title>
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
    <h1>Éditer l'article</h1>
    <form action="index.php?controller=article&action=edit&id=<?= $article['id'] ?>" method="POST">
        <label for="titre">Titre:</label>
        <input type="text" id="titre" name="titre" value="<?= $article['titre'] ?>" required>
        <br>
        <label for="contenu">Contenu:</label>
        <textarea id="contenu" name="contenu" required><?= $article['contenu'] ?></textarea>
        <br>
        <label for="image_url">URL de l'image:</label>
        <input type="text" id="image_url" name="image_url" value="<?= $article['image_url'] ?>">
        <br>
        <label for="categorie_id">Catégorie:</label>
        <input type="text" id="categorie_id" name="categorie_id" value="<?= $article['categorie_id'] ?>" required>
        <br>
        <button type="submit">Éditer</button>
    </form>
</body>

</html>