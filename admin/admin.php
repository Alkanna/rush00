<html>

<head>
    <link rel="stylesheet" href="../css/style_admin.css" />
    <link href="http://fonts.googleapis.com/css?family=Terminal+Dosis" rel="stylesheet" type="text/css" />
</head>

</html>
<?php
session_start();
if (isset($_SESSION['login']) and !empty($_SESSION['login'])) {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'addproduct') {
            if (isset($_POST['submit'])) {
                $title = $_POST['title']; // 255 char
                $description = $_POST['description']; //500 char
                $price = $_POST['price']; // only digit et only positif
                $image = $_POST['img'];
                $quantite = $_POST['qt'];

                if (!($title && $description && $price && $quantite && $ID)) {
                    echo "Veuillez remplir tous les champs\n";
                }
                if (strlen($title) >= 50) {
                    echo "Titre supérieur à 50 char\n";
                } elseif (strlen($description) >= 500) {
                    echo "Description supérieur à 500 char\n";
                } elseif ($price < 0) {
                    echo "Tu veux vraiment lui donner du biff?\n";
                } elseif ($quantite <= 0) {
                    echo "Quantité strictement positive\n";
                }

            }
            ?>
<form action="" method="post">
    <h3>Titre du produit:</h3><input type="text" name="title" />
    <h3>Description du produit:</h3><input type="text" name="description" />
    <h3>Quantité:</h3><input type="number" name="qt" />
    <h3>Prix:</h3><input type="number" name="price" /><br /><br />
    <h3>Image:</h3><input type="text" name="img" />
    <input type="submit" name="submit" />
</form>
<?php
} elseif ($_GET['action'] == 'adduser') {
            if (isset($_POST['submit'])) {

                $pseudo = $POST['pseudo'];
                $mdp = $_POST['mdp'];
                $email = $_POST['mail'];
                $adresse = $_POST['addr'];
                $perm = $_POST['perm'];

                if (!($ID_utilisateur && $pseudo && $mdp && $email && $adresse && $perm)) {
                    echo "Veuillez remplir tous les champs\n";
                }
                if (strlen($pseudo) >= 20) {
                    echo "Pseudo supérieur à 20 char\n";
                } elseif (strlen($adresse) >= 500) {
                    echo "Description supérieur à 500 char\n";
                }

            }
            ?>
<form action="" method="post">
    <h3>Pseudo:</h3><input type="text" name="pseudo" />
    <h3>Email:</h3><input type="text" name="mail" />
    <h3>Adresse:</h3><input type="text" name="addr" />
    <h3>Mot de passe:</h3><input type="number" name="mdp" /><br /><br />
    <h3>Permission:</h3><input type="text" name="perm" />
    <input type="submit" name="submit" />
</form>

<?php
} else if ($_GET['action'] == 'modify') {

        } else if ($_GET['action'] == 'delete') {

        } else {
            die('Une erreur s\'est produite.');
        }

    } else {

    }
} else {
    header("Location:index.php");
}
?>

<div class="admin_container">
    <h1 id="title"> Bienvenue <h1>
            <ul>
                <li><a href="?action=addproduct">Ajouter un produit</a></li>
                <li><a href="?action=modify">Modifier un produit</a></li>
                <li><a href="?action=delete">Supprimer un produit</a></li>
            </ul>
            <ul>
                <li><a href="?action=adduser">Ajouter un utilisateur</a></li>
                <li><a href="?action=modify">Modifier un utilisateur</a></li>
                <li><a href="?action=delete">Supprimer un utilisateur</a></li>
            </ul>
            <ul>
                <li><a href="?action=addcat">Ajouter un catégorie</a></li>
                <li><a href="?action=modify">Modifier un catégorie</a></li>
                <li><a href="?action=delete">Supprimer un catégorie</a></li>
            </ul>
</div>
