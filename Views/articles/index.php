<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../CSS/article.css">
    <link rel="stylesheet" href="../CSS/styles.css">
    <title>Liste des articles</title>
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
    <h1 id="title_article">Liste des articles</h1>
    <a id="create_article" href="./index.php?controller=article&action=create">Créer un nouvel article</a>
    <ul>
        <?php foreach ($articles as $article) : ?>
            <li>
                <a id="article" href="index.php?controller=article&action=show&id=<?= $article['id'] ?>"><?= $article['titre'] ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>