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
        die(' Connexion serveur impossible : ');
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
        die(' Connexion db impossible : ');
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
    if (!mysqli_query($con, $req)) {
        die('Error exec req : ' . mysqli_error($con));
    }

    $query = mysqli_query($con, $req);
    while ($row = mysqli_fetch_assoc($query)) {
        $result[] = $row;
    }
    return $result;
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
    echo $req . "\n" .
    run_req($con, $req);
    echo "ajout user succeed\n";
}

function add_produit($con, $nom_produit, $prix_produit, $qt_produit, $description_produit)
{
    $req = "INSERT INTO produit";
    $req .= "( nom_produit, prix_produit, qt_produit, description_produit) ";
    $req .= "VALUES ('" . test_input($nom_produit) . "','" . test_input($prix_produit) . "','" . test_input($qt_produit) . "','" . test_input($description_produit) . "')";
    echo $req . "\n" .
    run_req($con, $req);
    echo "ajout produit succeed\n";
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
