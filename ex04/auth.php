<?php
function auth($login, $passwd)
{
    if ($login && $passwd) {
        $filelock = fopen('../private/passwd', 'r');
        @flock($filelock, LOCK_SH);
        $account = unserialize(file_get_contents('../private/passwd'));
        @flock($filelock, LOCK_UN);
        fclose($filelock);
        if ($account) {
            foreach ($account as $key => $value) {
                if (($value['login'] == $login) && ($value['passwd'] == hash('whirlpool', $passwd))) {
                    return (true);
                }
            }
        }
    } else {
        return (false);
    }
}
