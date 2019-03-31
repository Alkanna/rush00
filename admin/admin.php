<!--/*
session_start();
if (isset($_SESSION['login']) and !empty($_SESSION['login'])) {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'add_product') {
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
} elseif ($_GET['action'] == 'add_user') {
            }


    } else {

    }
} else {
    header("Location:index.php");
}
*/-->

<html>

<head>
    <link rel="stylesheet" href="../css/style_admin.css" />
    <link href="http://fonts.googleapis.com/css?family=Terminal+Dosis" rel="stylesheet" type="text/css" />
</head>

</html>
<div class="admin_container">
    <div class="admin_block">
    </br>
        <h1 class="active">Produits</h1></br></br>
        <ul>
                <li><a href="?action=add_product">Ajouter un produit</a></li>
                 <?php if ($_GET['action'] == "add_product") : ?>
                    <form style="margin-top:1.2vw" action="" method="post">
                        <input required placeholder="Titre" type="text" name="pseudo" />
                        <input required placeholder="Description" type="text" name="mail" />
                        <input required placeholder="Quantité" type="number" name="mdp" />
                        <input required placeholder="Image" type="text" name="perm" />
                        <input type="submit" name="submit" value="ajouter"/>
                     </form>
                     <?php endif;?>
                <li><a href="?action=modify_product">Modifier un produit</a></li>
                    <?php if ($_GET['action'] == "modify_product") : ?>
                         <form style="margin-top:1.2vw" action="" method="post">
                            <input required placeholder="ID Produit" type="text" name="pseudo" />
                            <input placeholder="Titre" type="text" name="pseudo" />
                            <input placeholder="Description" type="text" name="mail" />
                            <input placeholder="Quantité" type="number" name="mdp" />
                            <input placeholder="Image" type="text" name="perm" />
                            <input type="submit" name="submit" value="modifier" />
                         </form>
                         <?php endif;?>
                <li><a href="?action=delete_product">Supprimer un produit</a></li>
                <?php if ($_GET['action'] == "delete_product") : ?>
                         <form style="margin-top:1.2vw" action="" method="post">
                            <input required placeholder="ID Produit" type="text" name="pseudo" />
                            <input type="submit" name="submit" value="supprimer" />
                         </form>
                         <?php endif;?>
        </ul>
</br></br></br><h1 class="active">Utilisateurs</h1></br></br>
        <ul>
            <li><a href="?action=add_user">Ajouter un utilisateur</a></li>
            <?php if ($_GET['action'] == "add_user") : ?>
                <form style="margin-top:1.2vw" action="" method="post">
                    <input required type="text" name="nom" placeholder="Name" />
                    <input required type="text" name="prenom" placeholder="Lastname" />
                    <input required type="mail" pattern=".+@.+.com" name="mail" placeholder="Mail" />
                    <input required type="text" name="login" minlength="5" placeholder="Login" />
                    <input required type="password" name="passwd" minlength="8" placeholder="Password" />
                    <input type="submit" name="submit" value="ajouter" />
                     </form>
                     <?php endif;?>
            <li><a href="?action=modify_user">Modifier un utilisateur</a></li>
            <?php if ($_GET['action'] == "modify_user") : ?>
                <form style="margin-top:1.2vw" action="" method="post">
                    <input required type="text" name="login" minlength="5" placeholder="Login" />
                    <input required type="text" name="nom" placeholder="Name" />
                    <input required type="text" name="prenom" placeholder="Lastname" />
                    <input required type="mail" pattern=".+@.+.com" name="mail" placeholder="Mail" />
                    <input required type="password" name="passwd" minlength="8" placeholder="Password" />
                    <input type="submit" name="submit" value="modifier"/>
                     </form>
                     <?php endif;?>
            <li><a href="?action=delete_user">Supprimer un utilisateur</a></li>
            <?php if ($_GET['action'] == "delete_user") : ?>
                <form style="margin-top:1.2vw" action="" method="post">
                    <input required type="text" name="login" minlength="5" placeholder="Login" />
                    <input required type="mail" pattern=".+@.+.com" name="mail" placeholder="Mail" />
                    <input type="submit" name="submit" value="supprimer" />
                     </form>
                     <?php endif;?>
         </ul>
         </br></br></br><h1 class="active">Catégories</h1></br></br>
        <ul>
            <li><a href="?action=add_categorie">Ajouter une catégorie</a></li>
                <?php if ($_GET['action'] == "add_categorie") : ?>
                <li><a>Ajouter une catégorie principale</a></li>
                    <form style="margin-top:1.2vw" method="post">
                        <input required type="text" name="category_name_p" placeholder="Nom de la catégorie" />
                        <input type="submit" name="submit" value="ajouter" />
                     </form>
                    <li><a>Ajouter une catégorie secondaire</a></li>
                    <form style="margin-top:1.2vw;" action="" method="post">
                        <select>
                        <option value="" disabled selected>Catégorie Parent</option>
                        <option>1</option>
                        <option>1</option>
                        </select>
                        <input required type="text" name="category_name_s" placeholder="Nom de la catégorie" />
                        <input type="submit" name="submit" value="ajouter" />
                     </form> 
                    <?php endif;?>
            <li><a href="?action=modify_categorie">Modifier une catégorie</a></li>
                <?php if ($_GET['action'] == "modify_categorie") : ?>
                    <form style="margin-top:1.2vw" action="" method="post">
                    <select>
                        <option value="" disabled selected>Nom de la catégorie</option>
                        <option>1</option>
                        <option>1</option>
                        </select>
                        <input required type="text" name="category_name_p" placeholder="Nouveau nom" />
                        <input type="submit" name="submit" value="modifier" />
                     </form>
                <?php endif ;?>
            <li><a href="?action=delete_categorie">Supprimer une catégorie</a></li>
            <?php if ($_GET['action'] == "delete_categorie") : ?>
                    <form style="margin-top:1.2vw" action="" method="post">
                    <select>
                        <option value="" disabled selected>Choisir une catégorie</option>
                        
                        
                        
                        <option>1</option>
                        <option>1</option>
                        
                    
                    
                    
                        </select>
                        <input type="submit" name="submit" value="surpprimer" />
                     </form>
                <?php endif ;?>
        </ul>
        </div>
</div></br></br></br></br>
