<!DOCTYPE html>
<html>
<head>
    <title>Liste des articles</title>
</head>
<body>
    <h1>Liste des articles</h1>
    <a href="index.php?controller=article&action=create">Créer un nouvel article</a>
    <ul>
        <?php foreach ($articles as $article): ?>
            <li>
                <a href="index.php?controller=article&action=show&id=<?= $article['id'] ?>"><?= $article['titre'] ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
