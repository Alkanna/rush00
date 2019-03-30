<?php
if ($_POST['login'] != null && $_POST['oldpw'] != null && $_POST['newpw'] != null && $_POST['submit'] && $_POST['submit'] === "OK" && file_exists('../private/passwd')) {
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
    if (!$exist) {
        echo "ERROR\n";
    } else {
        $success = false;
        $tmp['login'] = $_POST['login'];
        $tmp['oldpw'] = hash('whirlpool', $_POST['oldpw']);
        $tmp['newpw'] = hash('whirlpool', $_POST['newpw']);
        foreach ($account as $key => $value) {
            if (($value['login'] == $tmp['login']) && ($value['passwd'] == $tmp['oldpw'])) {
                $account[$key]['passwd'] = $tmp['newpw'];
                $success = true;
                break;
            }
        }
        if ($success == true) {
            file_put_contents('../private/passwd', serialize($account), LOCK_EX);
            header("Location: index.html");
            echo "OK\n";
        } else {
            echo "ERROR\n";
        }
    }
} else {
    echo "ERROR\n";
}
