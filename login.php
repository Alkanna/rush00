<?php
include ('sqlib.php');
echo "bsr";
function start_login()
{
    if ($_POST['submit'] == "OK") {
        $id_user = auth($_POST['login'], $_POST['passwd']);

//            print_r($id_user);

        if (count($id_user) > 0) {
            $_SESSION['loggued_on_user'] = $_POST['login'];
            $_SESSION['id_user'] = $id_user[0]["id_user"];
//            header('Location: sign_in.php');
        } else {
            return (-2);
        }

    }
}

function start_register()
{
    if ($_POST['submit'] == "OK") {
        if (is_pseudo_exist($con, "root")) {
            echo "il est vivant\t";
        } else {
            echo "oups";
        }

        if (is_mail_exist($con, "root42.fr")) {
            echo "vraiemnt !!!!!!!!\n";
        } else {
            echo "oups";
        }

    }
}
