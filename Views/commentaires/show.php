<!DOCTYPE html>
<html>
<head>
    <title>Afficher le Commentaire</title>
</head>
<body>
    <h1>Afficher le Commentaire</h1>
    <p>ID: <?php echo $commentaire['id']; ?></p>
    <p>Contenu: <?php echo $commentaire['contenu']; ?></p>
    <p>Date de publication: <?php echo $commentaire['date_publication']; ?></p>
    <p>ID Utilisateur: <?php echo $commentaire['utilisateur_id']; ?></p>
    <p>ID Article: <?php echo $commentaire['article_id']; ?></p>
    <a href="index.php?controller=commentaire&action=index">Retour à la liste</a>
</body>
</html>
