<?php
require_once '../Models/commentaire.php';
require_once '../Models/BDD.php';

function index() {
    $dbInstance = new BDD();
    $db = $dbInstance->connect();
    $commentaires = readCommentaires($db);
    include '../Views/commentaires/index.php';
}


function create() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $dbInstance = new BDD();
        $db = $dbInstance->connect();

        $contenu = $_POST['contenu'] ?? '';
        $utilisateur_id = $_POST['utilisateur_id'] ?? '';
        $article_id = $_POST['article_id'] ?? '';

        if (empty($contenu) || empty($utilisateur_id) || empty($article_id)) {
            echo "Tous les champs doivent être remplis.";
            exit;
        }

        $data = [
            'contenu' => $contenu,
            'date_publication' => date('Y-m-d H:i:s'),
            'utilisateur_id' => $utilisateur_id,
            'article_id' => $article_id,
        ];

        if (createCommentaire($db, $data)) {
            header("Location: index.php?controller=commentaire&action=index");
            exit;
        } else {
            echo "Erreur lors de la création du commentaire.";
        }
    } else {
        include '../Views/commentaires/create.php';
    }
}

function show($id) {
    $dbInstance = new BDD();
    $db = $dbInstance->connect();
    $commentaire = readCommentaire($db, $id);
    include '../Views/commentaires/show.php';
}

function edit($id) {
    $dbInstance = new BDD();
    $db = $dbInstance->connect();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $contenu = $_POST['contenu'] ?? '';
        $utilisateur_id = $_POST['utilisateur_id'] ?? '';
        $article_id = $_POST['article_id'] ?? '';

        if (empty($contenu) || empty($utilisateur_id) || empty($article_id)) {
            echo "Tous les champs doivent être remplis.";
            exit;
        }

        $data = [
            'contenu' => $contenu,
            'utilisateur_id' => $utilisateur_id,
            'article_id' => $article_id,
        ];

        if (updateCommentaire($db, $id, $data)) {
            header("Location: index.php?controller=commentaire&action=show&id=$id");
            exit;
        } else {
            echo "Erreur lors de la mise à jour du commentaire.";
        }
    } else {
        $commentaire = readCommentaire($db, $id);
        include '../Views/commentaires/edit.php';
    }
}

function delete($id) {
    $dbInstance = new BDD();
    $db = $dbInstance->connect();
    if (deleteCommentaire($db, $id)) {
        header("Location: index.php?controller=commentaire&action=index");
        exit;
    } else {
        echo "Erreur lors de la suppression du commentaire.";
    }
}

function readCommentaires($db) {
    $query = "SELECT * FROM Commentaire";
    $stmt = $db->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
