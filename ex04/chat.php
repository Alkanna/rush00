<?php
date_default_timezone_set('CET');
if (file_exists("../private/chat") == true) {
    $filelock = fopen('../private/chat', 'r');
    @flock($filelock, LOCK_SH);
    $test = unserialize(file_get_contents("../private/chat"));
    @flock($filelock, LOCK_UN);
    fclose($filelock);
    foreach ($test as $value) {
        echo "[";
        echo date("H:i", $value['time']);
        echo "] ";
        echo "<b>";
        echo $value['login'];
        echo "</b>: ";
        echo $value['msg'];
        echo "<br />";
    }
}
