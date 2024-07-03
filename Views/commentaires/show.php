<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../../CSS/styles.css">
    <title>Afficher le Commentaire</title>
</head>
<body>
<h1>Afficher le Commentaire</h1>
<p>ID: <?php echo htmlspecialchars($commentaire['id']); ?></p>
<p>Contenu: <?php echo htmlspecialchars($commentaire['contenu']); ?></p>
<p>Date de publication: <?php echo htmlspecialchars($commentaire['date_publication']); ?></p>
<p>ID Utilisateur: <?php echo htmlspecialchars($commentaire['utilisateur_id']); ?></p>
<p>ID Article: <?php echo htmlspecialchars($commentaire['article_id']); ?></p>
<a href="index.php?controller=commentaire&action=edit&id=<?php echo htmlspecialchars($commentaire['id']); ?>">Modifier</a>
<a href="index.php?controller=commentaire&action=delete&id=<?php echo htmlspecialchars($commentaire['id']); ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce commentaire ?');">Supprimer</a>
</body>
</html>
