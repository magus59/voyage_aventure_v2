<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../CSS/article.css">
    <link rel="stylesheet" href="../CSS/styles.css">
    <title><?= $article['titre'] ?></title>
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
    <h1><?= $article['titre'] ?></h1>
    <p><?= $article['contenu'] ?></p>
    <img src="<?= $article['image_url'] ?>" alt="Image de l'article">
    <p>Publié le: <?= $article['date_publication'] ?></p>
    <p>
        <a id="edit" href="index.php?controller=article&action=edit&id=<?= $article['id'] ?>">Éditer</a>
        <a id="suppr" href="index.php?controller=article&action=delete&id=<?= $article['id'] ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet article?');">Supprimer</a>
        <a id="back" href="../../Views/index.php">Revenir aux articles</a>
    </p>
</body>

</html>