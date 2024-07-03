<?php
class Commentaire {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllCommentaires() {
        $query = "SELECT * FROM commentaire";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCommentaireById($id) {
        $query = "SELECT * FROM commentaire WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createCommentaire($data) {
        $query = "INSERT INTO commentaire (contenu, date_publication, utilisateur_id, article_id) VALUES (:contenu, :date_publication, :utilisateur_id, :article_id)";
        $stmt = $this->db->prepare($query);
        return $stmt->execute($data);
    }

    public function updateCommentaire($id, $data) {
        $query = "UPDATE commentaire SET contenu = :contenu, utilisateur_id = :utilisateur_id, article_id = :article_id WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $data['id'] = $id;
        return $stmt->execute($data);
    }

    public function deleteCommentaire($id) {
        $query = "DELETE FROM commentaire WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
?>
