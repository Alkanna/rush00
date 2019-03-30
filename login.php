<?php
include("./auth.php");
    function start_login()
    {
        if (auth($_POST['login'], $_POST['passwd']))
        {
            $_SESSION['loggued_on_user'] = $_POST['login'];
            return 1;
        }
        else if ($_POST['OK'] == "OK" && $_POST['login'] || $_POST['passwd'])
        {
            $_SESSION['loggued_on_user'] = "";
            return 2;
        }
        else
            return 3;
    }
?>
