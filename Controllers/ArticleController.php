<?php
require_once '../models/Article.php';
require_once '../Models/BDD.php';

function index() {
    $dbInstance = new BDD();
    $db = $dbInstance->connect();
    $articles = readArticles($db);
    include '../views/articles/index.php';
}

function create() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $dbInstance = new BDD();
        $db = $dbInstance->connect();
        $data = [
            'titre' => $_POST['titre'],
            'contenu' => $_POST['contenu'],
            'image_url' => $_POST['image_url'],
            'date_publication' => date('Y-m-d H:i:s'),
            'utilisateur_id' => $_SESSION['user_id'],
            'categorie_id' => $_POST['categorie_id'],
        ];
        if (createArticle($db, $data)) {
            header("Location: index.php?controller=article&action=index");
        } else {
            echo "Erreur lors de la création de l'article.";
        }
    } else {
        include '../views/articles/create.php';
    }
}

function show($id) {
    $dbInstance = new BDD();
    $db = $dbInstance->connect();
    $article = readArticle($db, $id);
    include '../views/articles/show.php';
}

function edit($id) {
    $dbInstance = new BDD();
    $db = $dbInstance->connect();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = [
            'titre' => $_POST['titre'],
            'contenu' => $_POST['contenu'],
            'image_url' => $_POST['image_url'],
            'categorie_id' => $_POST['categorie_id'],
        ];
        if (updateArticle($db, $id, $data)) {
            header("Location: index.php?controller=article&action=show&id=$id");
        } else {
            echo "Erreur lors de la mise à jour de l'article.";
        }
    } else {
        $article = readArticle($db, $id);
        include '../views/articles/edit.php';
    }
}

function delete($id) {
    $dbInstance = new BDD();
    $db = $dbInstance->connect();
    if (deleteArticle($db, $id)) {
        header("Location: index.php?controller=article&action=index");
    } else {
        echo "Erreur lors de la suppression de l'article.";
    }
}
?>
