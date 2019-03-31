<?php

include 'sqlib.php';

function install_bd()
{
    $con = connect_mysql_serveur();
    create_db($con);

    $con = connect_db();

    create_users_table($con);
    create_produit_table($con);
    create_categorie_table($con);
    create_relation_table($con);

    create_order_table($con);
    create_panier_table($con);
    create_detail_panier_table($con);

    register_root($con);

/*
if (is_pseudo_exist($con, "root"))
echo "il est vivant\t";
else
echo "oups";

if (is_mail_exist($con, "root42.fr"))
echo "vraiemnt !!!!!!!!\n";
else
echo "oups";

 */

    $pseudo_user = "user";
    $passwd_user = "pass";
    $email_user = "mail";
    $address_user = "address";

    for ($i = 0; $i < 10; $i++) {
        register($con, $pseudo_user . $i, $passwd_user . $i, $email_user . $i, $address_user . $i);
    }

    $nom_produit = "produit";
    $prix_produit = 24;
    $qt_produit = 42;
    $description_produit = "description";

    for ($i = 0; $i < 10; $i++) {
        add_produit($con, $nom_produit . $i, $prix_produit . $i, $qt_produit . $i, $description_produit . $i);
    }

/*
$list_produit = get_list_produit($con);
echo "\\************************************\\";
echo "liste produit";
echo "\\************************************\\\n";

print_r($list_produit);

$id_produit=1;

echo "\\************************************\\";
echo "produit id num ".$id_produit;
echo "\\************************************\\\n";

$list_produit = get_produit($con, $id_produit);
print_r($list_produit);

$list_produit = get_list_produit_order_by_prix($con);
echo "\\************************************\\";
echo "liste produit ordreded by prix";
echo "\\************************************\\\n";

print_r($list_produit);
 */

    echo "BD Successfully installed";

}
