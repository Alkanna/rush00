<?php
session_start();
if ($_POST["submit"] == "OK" AND !empty($_POST["login"]) AND !empty($_POST["passwd"]))
{
    $account = array("login" => $_POST["login"], "passwd" => hash("whirlpool", $_POST["passwd"]));
    $login = $_POST["login"];
    $_SESSION["new_user"] = $login;
    if (!file_exists("../private"))
        mkdir("../private");
    else
        $login_tab = unserialize(file_get_contents("../private/passwd"));
    if ($login_tab)
        foreach($login_tab as $key => $value)
        {
             if ($key == "$login")
            {
                echo '<script type="text/javascript"> window.location = "./sign_in.php?register=true&login=used"; </script>';
                exit(0);
            }
        }
    $login_tab["$login"] = $account;
    file_put_contents("../private/passwd", serialize($login_tab));
    echo '<script type="text/javascript"> window.location = "./index.php?success=true"; </script>';
}
else
{
    echo "ERROR\n";
}
?>