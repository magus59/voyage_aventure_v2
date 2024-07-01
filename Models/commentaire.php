<?php

function readCommentaires($db) {
    $query = "SELECT * FROM Commentaire";
    $stmt = $db->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function createCommentaire($db, $data) {
    $query = "INSERT INTO Commentaire (contenu, date_publication, utilisateur_id, article_id) VALUES (:contenu, :date_publication, :utilisateur_id, :article_id)";
    $stmt = $db->prepare($query);
    return $stmt->execute($data);
}

function readCommentaire($db, $id) {
    $query = "SELECT * FROM Commentaire WHERE id = :id";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function updateCommentaire($db, $id, $data) {
    $query = "UPDATE Commentaire SET contenu = :contenu, utilisateur_id = :utilisateur_id, article_id = :article_id WHERE id = :id";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':id', $id);
    return $stmt->execute($data);
}

function deleteCommentaire($db, $id) {
    $query = "DELETE FROM Commentaire WHERE id = :id";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':id', $id);
    return $stmt->execute();
}

?>
