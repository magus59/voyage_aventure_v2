<?php

function readArticles($db) {
    $query = "SELECT * FROM Article";
    $stmt = $db->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function createArticle($db, $data) {
    $query = "INSERT INTO Article (titre, contenu, image_url, date_publication, utilisateur_id, categorie_id)
              VALUES (:titre, :contenu, :image_url, :date_publication, :utilisateur_id, :categorie_id)";
    $stmt = $db->prepare($query);

    $stmt->bindParam(':titre', $data['titre']);
    $stmt->bindParam(':contenu', $data['contenu']);
    $stmt->bindParam(':image_url', $data['image_url']);
    $stmt->bindParam(':date_publication', $data['date_publication']);
    $stmt->bindParam(':utilisateur_id', $data['utilisateur_id']);
    $stmt->bindParam(':categorie_id', $data['categorie_id']);

    return $stmt->execute();
}


function readArticle($db, $id) {
    $query = "SELECT * FROM Article WHERE id = ?";
    $stmt = $db->prepare($query);
    $stmt->bindParam(1, $id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function updateArticle($db, $id, $data) {
    $query = "UPDATE Article
              SET titre = :titre, contenu = :contenu, image_url = :image_url, categorie_id = :categorie_id
              WHERE id = :id";
    $stmt = $db->prepare($query);
    $data['id'] = $id;
    return $stmt->execute($data);
}

function deleteArticle($db, $id) {
    $query = "DELETE FROM Article WHERE id = ?";
    $stmt = $db->prepare($query);
    $stmt->bindParam(1, $id, PDO::PARAM_INT);
    return $stmt->execute();
}
?>
