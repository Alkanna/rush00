<?php

include 'sqlib.php';

if (connect_mysql_serveur()) {
    echo "[Server connect : Success !]\n";
} else {
    echo "[Server connect :Failure !]\n";
}

if ($con = connect_db()) {
    echo "[DB Connect : Success !]\n";
} else {
    echo "[DB Connect : Failure !]\n";
}

if (is_pseudo_exist($con, 'root')) {
    echo "[We can read data !]";
} else {
    echo "[We can't read data :(]";
}
