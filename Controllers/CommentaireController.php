<?php
// require_once __DIR__ . '/../Models/Commentaire.php';
// require_once __DIR__ . '/../Models/BDD.php';

require_once '../../Models/BDD.php';
require_once '../../Models/commentaire.php';

$controller = new CommentaireController();
$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;

if ($id) {
    $controller->$action($id);
} else {
    $controller->$action();
}

class CommentaireController
{
    private $commentaireModel;

    public function __construct()
    {
        $dbInstance = new BDD();
        $db = $dbInstance->connect();
        $this->commentaireModel = new Commentaire($db);
    }

    public function index()
    {
        $commentaires = $this->commentaireModel->getAllCommentaires();
        include '../../Views/commentaires/index.php';
   
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'contenu' => $_POST['contenu'] ?? '',
                'date_publication' => date('Y-m-d H:i:s'),
                'utilisateur_id' => $_POST['utilisateur_id'] ?? '',
                'article_id' => $_POST['article_id'] ?? '',
            ];

            if ($this->commentaireModel->createCommentaire($data)) {
                header("Location: index.php?controller=commentaire&action=index");
                exit;
            } else {
                echo "Erreur lors de la création du commentaire.";
            }
        } else {
            include '../../Views/commentaires/create.php';
        }
    }

    public function show($id)
    {
        $commentaire = $this->commentaireModel->getCommentaireById($id);
        include '../../Views/commentaires/show.php';
    }

    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'contenu' => $_POST['contenu'] ?? '',
                'utilisateur_id' => $_POST['utilisateur_id'] ?? '',
                'article_id' => $_POST['article_id'] ?? '',
            ];

            if ($this->commentaireModel->updateCommentaire($id, $data)) {
                header("Location: index.php?controller=commentaire&action=show&id=$id");
                exit;
            } else {
                echo "Erreur lors de la mise à jour du commentaire.";
            }
        } else {
            $commentaire = $this->commentaireModel->getCommentaireById($id);
            include '../../Views/commentaires/edit.php';
        }
    }

    public function delete($id)
    {
        if ($this->commentaireModel->deleteCommentaire($id)) {
            header("Location: index.php?controller=commentaire&action=index");
            exit;
        } else {
            echo "Erreur lors de la suppression du commentaire.";
        }
    }
}

// $controller = new CommentaireController();
// $action = $_GET['action'] ?? 'index';
// $id = $_GET['id'] ?? null;

// if ($id) {
//     $controller->$action($id);
// } else {
//     $controller->$action();
// }
