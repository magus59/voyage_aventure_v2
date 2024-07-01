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

        // Vérification des champs obligatoires
        $titre = $_POST['titre'] ?? '';
        $contenu = $_POST['contenu'] ?? '';
        $image_url = $_POST['image_url'] ?? '';
        $categorie_id = $_POST['categorie_id'] ?? '';

        // Vérifiez si les champs obligatoires sont remplis
        if (empty($titre) || empty($contenu) || empty($categorie_id)) {
            echo "Tous les champs doivent être remplis.";
            exit;
        }

        // Créez le tableau de données à passer à createArticle()
        $data = [
            'titre' => $titre,
            'contenu' => $contenu,
            'image_url' => $image_url,
            'date_publication' => date('Y-m-d H:i:s'),
            'categorie_id' => $categorie_id,
        ];

        // Appel de la fonction createArticle() du modèle
        if (createArticle($db, $data)) {
            header("Location: index.php?controller=article&action=index");
            exit;
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
        // Vérification des champs obligatoires
        $titre = $_POST['titre'] ?? '';
        $contenu = $_POST['contenu'] ?? '';
        $image_url = $_POST['image_url'] ?? '';
        $categorie_id = $_POST['categorie_id'] ?? '';

        // Vérifiez si les champs obligatoires sont remplis
        if (empty($titre) || empty($contenu) || empty($categorie_id)) {
            echo "Tous les champs doivent être remplis.";
            exit;
        }

        $data = [
            'titre' => $titre,
            'contenu' => $contenu,
            'image_url' => $image_url,
            'categorie_id' => $categorie_id,
        ];

        // Appel de la fonction updateArticle() du modèle
        if (updateArticle($db, $id, $data)) {
            header("Location: index.php?controller=article&action=show&id=$id");
            exit;
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
        exit;
    } else {
        echo "Erreur lors de la suppression de l'article.";
    }
}
?>
