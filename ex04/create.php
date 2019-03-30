<?php
if ($_POST['login'] != null && $_POST['passwd'] != null && $_POST['submit'] && $_POST['submit'] === "OK") {
    if (!file_exists('../private')) {
        mkdir("../private");
    }
    if (!file_exists('../private/passwd')) {
        file_put_contents('../private/passwd', null, LOCK_EX);
    }
    $filelock = fopen('../private/passwd', 'r');
    @flock($filelock, LOCK_SH);
    $account = unserialize(file_get_contents('../private/passwd'));
    @flock($filelock, LOCK_UN);
    fclose($filelock);
    if ($account) {
        $exist = 0;
        foreach ($account as $key => $value) {
            if ($value['login'] === $_POST['login']) {
                $exist = 1;
            }
        }
    }
    if ($exist) {
        echo "ERROR\n";
    } else {
        $tmp['login'] = $_POST['login'];
        $tmp['passwd'] = hash('whirlpool', $_POST['passwd']);
        $account[] = $tmp;
        file_put_contents('../private/passwd', serialize($account), LOCK_EX);
        header("Location: index.html");
        echo "OK\n";
    }
} else {
    echo "ERROR\n";
}
