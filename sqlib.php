<?php

/*********************************************************************/
/*********************************************************************/
/****                                                             ****/
/****              Connection and request functions               ****/
/****                                                             ****/
/*********************************************************************/
/*********************************************************************/

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function connect_mysql_serveur()
{
    $url = 'localhost';
    $user = 'wisk_rush00';
    $pass = 'Dzse21?0';

    $con = mysqli_connect($url, $user, $pass);
    if (!$con) {
        die(' Connexion serveur impossible : ' . mysqli_error($con));
    }

    return ($con);
}

function connect_db()
{
    $url = 'localhost';
    $user = 'wisk_rush00';
    $pass = 'Dzse21?0';
    $dbname = "wisk_rush00";

    $con = mysqli_connect($url, $user, $pass, $dbname);
    if (!$con) {
        die(' Connexion db impossible : ' . mysqli_error($con));
    }

    return ($con);
}

function run_req($con, $req)
{
    if (!mysqli_query($con, $req)) {
        die('Error exec req : ' . mysqli_error($con));
    }

}

function return_req_result($con, $req)
{
    $result = array();

    if (!mysqli_query($con, $req)) {
        die('Error exec req : ' . mysqli_error($con));
    }

    $query = mysqli_query($con, $req);
    while ($row = mysqli_fetch_assoc($query)) {
        $result[] = $row;
    }
    return $result;
}

function create_db($con)
{
    $name_BD = "wisk_rush00";

    $req = "DROP DATABASE IF EXISTS " . $name_BD;
    if (!mysqli_query($con, $req)) {
        die('Error DROP DATABASE IF EXISTS : ' . mysqli_error($con));
    }
    $req = "CREATE DATABASE " . $name_BD;
    if (!mysqli_query($con, $req)) {
        die('Error creating database : ' . mysqli_error($con));
    }

    return ($con);
}

function create_users_table($con)
{
    $req = "CREATE TABLE IF NOT EXISTS users (id_user INTEGER NOT NULL AUTO_INCREMENT, ";
    $req .= "pseudo_user VARCHAR(255) NOT NULL, ";
    $req .= "passwd_user VARCHAR(255) NOT NULL, ";
    $req .= "email_user VARCHAR(255), ";
    $req .= "address_user VARCHAR(255), ";
    $req .= "permission TINYINT DEFAULT 0, ";
    $req .= "PRIMARY KEY (id_user))";
//        echo $req."\n".
    run_req($con, $req);
//        echo "Table User Created\n";
}

function create_order_table($con)
{
    $req = "CREATE TABLE IF NOT EXISTS orders (id_orders INTEGER NOT NULL AUTO_INCREMENT, ";
    $req .= "date_orders VARCHAR(255) NOT NULL, ";
    $req .= "id_user INTEGER NOT NULL, ";
    $req .= "PRIMARY KEY (id_orders), ";
    $req .= "FOREIGN KEY (id_user) REFERENCES users(id_user)) ";
//        echo $req."\n".
    run_req($con, $req);
//        echo "Table Order Created\n";
}

//$req .= "id_detail_panier INTEGER NOT NULL, ";
function create_panier_table($con)
{
    $req = "CREATE TABLE IF NOT EXISTS panier (id_panier INTEGER NOT NULL AUTO_INCREMENT, ";
    $req .= "id_orders INTEGER NOT NULL, ";
    $req .= "PRIMARY KEY (id_panier), ";
    $req .= "FOREIGN KEY (id_orders) REFERENCES orders(id_orders)) ";
//        echo $req."\n".
    run_req($con, $req);
//        echo "Table panier Created\n";
}

function create_detail_panier_table($con)
{
    $req = "CREATE TABLE IF NOT EXISTS detail_panier (id_detail_panier INTEGER NOT NULL AUTO_INCREMENT, ";
    $req .= "qt_produit INTEGER NOT NULL, ";
    $req .= "id_produit INTEGER NOT NULL, ";
    $req .= "id_panier INTEGER NOT NULL, ";
    $req .= "PRIMARY KEY (id_detail_panier), ";
    $req .= "FOREIGN KEY (id_produit) REFERENCES produit(id_produit), ";
    $req .= "FOREIGN KEY (id_panier) REFERENCES panier(id_panier)) ";
//        echo $req."\n".
    run_req($con, $req);
//        echo "Table details panier Created\n";
}

function create_produit_table($con)
{
    $req = "CREATE TABLE IF NOT EXISTS produit (id_produit INTEGER NOT NULL AUTO_INCREMENT, ";
    $req .= "nom_produit VARCHAR(255) NOT NULL, ";
    $req .= "prix_produit INTEGER NOT NULL, ";
    $req .= "qt_produit INTEGER NOT NULL, ";
    $req .= "description_produit VARCHAR(255) NOT NULL, ";
//        $req .= "image_produit INTEGER NOT NULL, ";
    $req .= "PRIMARY KEY (id_produit))";
//        echo $req."\n".
    run_req($con, $req);
//        echo "Table Produit Created\n";
}

function create_categorie_table($con)
{
    $req = "CREATE TABLE IF NOT EXISTS categorie (id_categorie INTEGER NOT NULL AUTO_INCREMENT, ";
    $req .= "description_categorie VARCHAR(255) NOT NULL, ";
    $req .= "PRIMARY KEY (id_categorie))";
//       echo $req."\n".
    run_req($con, $req);
//        echo "Table categorie Created\n";
}

function create_relation_table($con)
{
    $req = "CREATE TABLE IF NOT EXISTS relation (id_produit INTEGER NOT NULL, ";
    $req .= "id_categorie  INTEGER NOT NULL, ";
    $req .= "PRIMARY KEY (id_categorie, id_produit), ";
    $req .= "FOREIGN KEY (id_categorie) REFERENCES categorie(id_categorie), ";
    $req .= "FOREIGN KEY (id_produit) REFERENCES produit(id_produit))";
//        echo $req."\n".
    run_req($con, $req);
//        echo "Table relaton Created\n";
}

function register_root($con)
{
    $req = "INSERT INTO users";
    $req .= "( pseudo_user, passwd_user, email_user, address_user, permission) ";
    $req .= "VALUES ('" . test_input("root") . "','" . test_input("root") . "','" . test_input("root42.fr") . "','" . test_input("4242") . "'," . test_input("1") . ")";
    echo $req . "\n" .
    run_req($con, $req);
//        echo "ajout root succeed\n";
}

function auth($login, $passwd)
{
    $con = connect_db();

    $req = "SELECT id_user FROM users WHERE";
    $req .= " pseudo_user = '" . test_input($login) . "' and passwd_user = '" . test_input($passwd) . "'";
    echo $req . "\n";
    $ret = return_req_result($con, $req);

    return ($ret);

}

/*********************************************************************/
/*********************************************************************/
/****                                                             ****/
/****                      Get data functions                     ****/
/****                                                             ****/
/*********************************************************************/
/*********************************************************************/

function is_pseudo_exist($con, $pseudo)
{
    $req = "SELECT id_user FROM users WHERE pseudo_user = '" . test_input($pseudo) . "'";
    $ret = return_req_result($con, $req);
    var_dump($ret);
    return (count($ret) > 0 ? 1 : 0);
}

function is_mail_exist($con, $mail)
{
    $req = "SELECT id_user FROM users WHERE email_user = '" . test_input($mail) . "'";
    $ret = return_req_result($con, $req);
    return (count($ret) > 0 ? 1 : 0);
}

function register($con, $pseudo_user, $passwd_user, $email_user, $address_user)
{
    $req = "INSERT INTO users";
    $req .= "( pseudo_user, passwd_user, email_user, address_user) ";
    $req .= "VALUES ('" . test_input($pseudo_user) . "','" . test_input($passwd_user) . "','" . test_input($email_user) . "','" . test_input($address_user) . "')";
//        echo $req."\n".
    run_req($con, $req);
//        echo "ajout user succeed\n";
}

function add_produit($con, $nom_produit, $prix_produit, $qt_produit, $description_produit)
{
    $req = "INSERT INTO produit";
    $req .= "( nom_produit, prix_produit, qt_produit, description_produit) ";
    $req .= "VALUES ('" . test_input($nom_produit) . "','" . test_input($prix_produit) . "','" . test_input($qt_produit) . "','" . test_input($description_produit) . "')";
//        echo $req."\n".
    run_req($con, $req);
//        echo "ajout produit succeed\n";
}

function add_categorie($con, $description_categorie)
{
    $req = "INSERT INTO categorie";
    $req .= "( description_categorie) ";
    $req .= "VALUES ('" . test_input($description_categorie). "')";
//        echo $req."\n".
    run_req($con, $req);
//        echo "ajout produit succeed\n";
}

function get_list_produit($con)
{
    $req = "SELECT * FROM produit";
    $ret = return_req_result($con, $req);
    return ($ret);
}

function get_list_produit_order_by_prix($con)
{
    $req = "SELECT * FROM produit ORDER BY prix_produit";
    $ret = return_req_result($con, $req);
    return ($ret);
}

function get_produit($con, $id_produit)
{
    $req = "SELECT * FROM produit WHERE id_produit = " . test_input($id_produit);
    $ret = return_req_result($con, $req);
    return ($ret);
}

function get_categorie($con)
{
    $req = "SELECT * FROM categorie";
    $ret = return_req_result($con, $req);
    return ($ret);
}
