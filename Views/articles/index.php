<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../CSS/article.css">
    <title>Liste des articles</title>
</head>

<body>
    <h1 id="title_article">Liste des articles</h1>
    <a id="create_article" href="index.php?controller=article&action=create">Créer un nouvel article</a>
    <ul>
        <?php foreach ($articles as $article) : ?>
            <li>
                <a id="article" href="index.php?controller=article&action=show&id=<?= $article['id'] ?>"><?= $article['titre'] ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>