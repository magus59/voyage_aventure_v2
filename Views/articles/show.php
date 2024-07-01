<!DOCTYPE html>
<html>
<head>
    <title><?= $article['titre'] ?></title>
</head>
<body>
    <h1><?= $article['titre'] ?></h1>
    <p><?= $article['contenu'] ?></p>
    <img src="<?= $article['image_url'] ?>" alt="Image de l'article">
    <p>Publié le: <?= $article['date_publication'] ?></p>
    <p>
        <a href="index.php?controller=article&action=edit&id=<?= $article['id'] ?>">Éditer</a>
        <a href="index.php?controller=article&action=delete&id=<?= $article['id'] ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet article?');">Supprimer</a>
    </p>
</body>
</html>
