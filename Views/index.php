<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/article.css">
    <link rel="stylesheet" href="/CSS/commentaire.css">
    <link rel="stylesheet" href="/CSS/utilisateur.css">
    <title>Document</title>
</head>
<body>
<?php
session_start();
require_once '../Controllers/ArticleController.php';

$controller = $_GET['controller'] ?? 'article';
$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;

if ($controller === 'article') {
    switch ($action) {
        case 'index':
            index();
            break;
        case 'create':
            create();
            break;
        case 'show':
            if ($id) show($id);
            break;
        case 'edit':
            if ($id) edit($id);
            break;
        case 'delete':
            if ($id) delete($id);
            break;
        default:
            index();
            break;
    }
} else {
    echo "Contrôleur inconnu.";
}
?>

</body>
</html>