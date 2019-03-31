<?php 

    include ('sqlib.php');
    $con = connect_db();


    print_r(get_categorie($con));

    passer_comamnde($id_iser, $date);
?>