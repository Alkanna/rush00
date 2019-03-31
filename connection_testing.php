<?php

include 'sqlib.php';

if (connect_mysql_serveur()) {
    echo "[Server connect : Success !][[ $con ]]\n";
} else {
    echo "[Server connect :Failure !][[ $con ]]\n";
}

if ($con = connect_db()) {
    echo "[DB Connect : Success !][[ $con ]]\n";
} else {
    echo "[DB Connect : Failure !][[ $con ]]\n";
}

if (is_pseudo_exist($con, 'root')) {
    echo "[We can read data !]";
} else {
    echo "[We can't read data :(]";
}
