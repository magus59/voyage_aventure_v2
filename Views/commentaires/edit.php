<!DOCTYPE html>
<html>
<head>
    <title>Modifier le Commentaire</title>
</head>
<body>
    <h1>Modifier le Commentaire</h1>
    <form action="index.php?controller=commentaire&action=edit&id=<?php echo $commentaire['id']; ?>" method="POST">
        <label for="contenu">Contenu:</label>
        <textarea id="contenu" name="contenu" required><?php echo $commentaire['contenu']; ?></textarea><br>

        <label for="utilisateur_id">ID Utilisateur:</label>
        <input type="number" id="utilisateur_id" name="utilisateur_id" value="<?php echo $commentaire['utilisateur_id']; ?>" required><br>

        <label for="article_id">ID Article:</label>
        <input type="number" id="article_id" name="article_id" value="<?php echo $commentaire['article_id']; ?>" required><br>

        <input type="submit" value="Modifier">
    </form>
</body>
</html>
