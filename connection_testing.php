<?php

include 'sqlib.php';

if (connect_mysql_serveur()) {
    echo "Success !";
} else {
    echo "Failure !";
}
