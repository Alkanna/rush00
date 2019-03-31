<?php

include 'sqlib.php';

function install_bd()
{
    $con = connect_mysql_serveur();
    create_db($con);

    $con = connect_db();

    create_users_table($con);
    create_produit_table($con);
    create_categorie_principale_table($con);
    create_categorie_secondaire_table($con);

    create_relation_categorie_table($con);

    create_relation_table($con);

    create_order_table($con);
    create_panier_table($con);
    create_detail_panier_table($con);

    register_root($con);

    $pseudo_user = "user";
    $passwd_user = "pass";
    $email_user = "mail";
    $address_user = "address";

    for ($i = 0; $i < 10; $i++) {
        register($pseudo_user . $i, $passwd_user . $i, $email_user . $i);
    }

    $nom_produit = "produit";
    $prix_produit = 24;
    $qt_produit = 42;
    $description_produit = "description";
 

    for ($i = 0; $i < 10; $i++) {
        add_produit($con, $nom_produit . $i, $prix_produit . $i, $qt_produit . $i, $description_produit . $i);


    }
    $cat = "categorie";
    for ($i = 0; $i < 4; $i++) {
        add_categorieP($con, $cat.$i);
    }

    for ($i = 0; $i < 12; $i++) {
        add_categorieS($con, $cat.$i);
    }

//   var_dump($description_produit);
$id_catS=1;
    for ($id_catP=1; $id_catP <= 4; $id_catP++) 
    { 
        var_dump($id_catP);
        

        while ($id_catS <= ($id_catP * 3) )
        { 
           var_dump($id_catS);
            make_categori_relation($id_catS, $id_catP);
            $id_catS++;
        }
    }
    
    echo "BD Successfully installed";

    




}

install_bd();
?>
