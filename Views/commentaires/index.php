<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../../CSS/styles.css">
    <title>Liste des Commentaires</title>
</head>
<body>
<nav>
        <ul id="ul_nav">
            <a href="../Accueil/index.php">
                <li id="li_nav">Accueil</li>
            </a>
            <a href="../index.php">
                <li id="li_nav">Article</li>
            </a>
            <a href="../commentaires/index.php">
                <li id="li_nav">Commentaires</li>
            </a>
        </ul>
    </nav>
    <h1>Liste des Commentaires</h1>
    <a href="index.php?controller=commentaire&action=create">Créer un nouveau commentaire</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Contenu</th>
            <th>Date de publication</th>
            <th>ID Utilisateur</th>
            <th>ID Article</th>
            <th>Actions</th>
        </tr>
        <?php if (!empty($commentaires)): ?>
            <?php foreach ($commentaires as $commentaire): ?>
                <tr>
                    <td><?php echo $commentaire['id']; ?></td>
                    <td><?php echo $commentaire['contenu']; ?></td>
                    <td><?php echo $commentaire['date_publication']; ?></td>
                    <td><?php echo $commentaire['utilisateur_id']; ?></td>
                    <td><?php echo $commentaire['article_id']; ?></td>
                    <td>
                        <a href="index.php?controller=commentaire&action=show&id=<?php echo $commentaire['id']; ?>">Voir</a>
                        <a href="index.php?controller=commentaire&action=edit&id=<?php echo $commentaire['id']; ?>">Modifier</a>
                        <a href="index.php?controller=commentaire&action=delete&id=<?php echo $commentaire['id']; ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce commentaire ?');">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="6">Aucun commentaire trouvé.</td>
            </tr>
        <?php endif; ?>
    </table>
</body>
</html>
