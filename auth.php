<?php
function auth($login, $passwd)
{
    if (file_exists("../private/passwd") == FALSE)
        return FALSE;
    $login_tab = unserialize(file_get_contents("../private/passwd"));
    if ($login_tab)
        foreach($login_tab as $key => $value)
            if ($key == "$login")
                if ($login_tab[$key]['passwd'] === hash('whirlpool', $passwd))
                {
                    if (hash('whirlpool', $_POST["newpw"]) == hash('whirlpool', $_POST["oldpw"]))
                    {
                        $i = 1;
                        return TRUE;
                    }
                }
    return FALSE;
}
?>