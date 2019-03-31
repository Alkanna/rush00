<?php 

    include ('sqlib.php');
    $con = connect_db();

/*    for ($id_produit=0; $id_produit < 3; $id_produit++) 
    { 
        var_dump(get_produit($con, $id_produit));    
    }*/

//    print_r(get_categorie($con));

    $id_iser = 1;
    passer_comamnde($id_iser, $date);
?>