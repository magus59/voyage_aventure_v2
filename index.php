<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="utilisateur.css">
</head>
<body>

<div class="container">
        <h1>Bienvenue</h1>
        <div class="buttons">
            <button  class="btn" onclick="redirectToCreateAccount()">
                Créer un compte
            </button>
            <button  class="btn" onclick="redirectToConnect()">
                Se connecter
            </button>
        </div>
    </div>

<script type="text/javascript">

    // Function pour rediriger vers le fichier ClientController
    function redirectToCreateAccount() {
        // window.location est une function JS déjà crée qui nous permet avec le replace d'être rediriger vers un autre URL
        window.location.replace('./Views/register.php');
    }

    function redirectToConnect() {
        window.location.replace('./Controllers/CompteController.php');
    }



</script>
</body>
</html>