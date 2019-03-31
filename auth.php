<?php
    include('Db.php');
/*
    function is_pseudo_exist($con, $pseudo)
    {
        $req = "SELECT id_user FROM users WHERE pseudo_user = '".test_input($pseudo)."'";
        $ret = return_req_result($con, $req);
        //return (count($ret) > 0 ? $ret : 0);
        return ($ret);
    }

    function is_mail_exist($con, $mail)
    {
        $req = "SELECT id_user FROM users WHERE email_user = '".test_input($mail)."'";
        $ret = return_req_result($con, $req);
        return (count($ret) > 0 ? 1 : 0);
    }*/

    function auth($login, $passwd)
    {
        $con = connect_db();

            
        $req = "SELECT id_user FROM users WHERE";
        $req .= " pseudo_user = '".test_input($login)."' and passwd_user = '".test_input($passwd)."'";
        echo $req."\n";
        $ret = return_req_result($con, $req);
        
        return ($ret);
            
    }
/*    $con = connect_db();
    $id = auth("user", "pass");
   
    if (count($id) > 0 )
    {
        print_r($id);
        echo "il est vivant ".$id[0]["id_user"]." \t";
    }
    else
    {
        echo "n'existe pas \n";
    }
*/

/*
    if ($_POST['login'] != "" && $_POST['passwd'] != "" && $_POST['submit'] == "OK")
    {
        creat_file ($dir, $url_file);
        if (add_compt($url_file, $_POST['login'], hash("whirlpool", $_POST['passwd'])))
            echo "OK\n";
        else
        {
            header('Location: create.html');
            echo "EROOR\n";
        }
    }
    else
        echo "EROOR\n";

  */  
    

?>
