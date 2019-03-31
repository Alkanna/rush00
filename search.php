<?php
session_start();
include 'sqlib.php';
$con = connect_db();
if (isset($_GET['cat'])) {
    $products = get_produit_categoriep($_GET['cat']);
} else if (isset($_GET['subcat'])) {
    $products = get_produit_categories($_GET['subcat']);
}
$products = get_list_produit($con);
$main_cat = get_categoriep();
$sub_cat = get_categories();
$test = get_categories_related_to_P(1);
var_dump($main_cat, $sub_cat, $test);
?>
<html>

<head>
    <meta charset="utf-8" />
    <title>Products</title>
    <link rel="stylesheet" href="css/style.css" />
    <link href="http://fonts.googleapis.com/css?family=Terminal+Dosis" rel="stylesheet" type="text/css" />
</head>

<body>
    <header>
        <div class="wrapper">
            <h1><a href="index.php" id="brand" title="Rush00">Rush00</a></h1>
            <nav>
                <?php foreach ($main_cat as $key => $value) {
                    ?><ul>
                    <li>
                        <a href="search.php?cat=<?php echo $main_cat[$key]['id_categoriep'];?>">
                            <?php echo $main_cat[$key]['description_categoriep']; ?></a>
                        <?php $sscat = get_categories_related_to_P($main_cat[$key]['id_categoriep']); ?>
                        <ul class="sub-menu"><?php
                            foreach ($sscat as $key => $value) {
                                ?>
                            <li><a href="search.php?subcat=<?php echo $sscat[$key]['id_categories']; ?>">
                                    <?php echo $sscat[$key]['description_categories']; ?></a></li>
                            <?php } ?>
                        </ul>

                    </li>
                </ul>
                <?php } ?>
            </nav>
        </div>
    </header>
    <aside id="top">
        <div class="wrapper">
            <ul id="social">
                <li>
                    <a href="https://www.facebook.com/42born2code/" class="facebook" title="like us us on Facebook">like
                        us us on Facebook</a>
                </li>
                <li>
                    <a href="https://twitter.com/42born2code" class="twitter" title="follow us on twitter">follow us on
                        twitter</a>
                </li>
            </ul>
            <form>
                <input type="text" placeholder="Search Rush00..." /><button type="submit">
                    Search
                </button>
            </form>
            <div id="action-bar">
                <?php if (isset($_SESSION['loggued_on_user']) && !empty($_SESSION['loggued_on_user'])): ?>
                <a href="administration.php">My Account</a> /
                <a href="logout.php">Logout</a> /
                <?php else: ?>
                <a href="sign_in.php">Login/Register</a> /
                <?php endif;?>
                <a href="viewbasket.php">Your bag (0)</a>
            </div>
        </div>
    </aside>
    <article id="grid">
        <div id="breadcrumb">
            <a href="index.php">Home</a> > <a href="search.php">Dresses</a> >
            <h1>Summer Dress</h1>
        </div>
        <header>
            <strong>Sort by Price: </strong>
            <a href="search.php?sort=asc">Ascending</a>
            <strong> / </strong>
            <a href="search.php?sort=desc">Descending</a>
            </form>
        </header>
        <ul id="items">
            <?php
foreach ($products as $key => $value) {?>
            <li>
                <a href="product.php?id=<?php echo $value['id_produit'] ?>"><img src="images/thumb.png"
                        alt="<?php echo $value['nom_produit'] ?>" />
                </a>
                <a href="product.php?id=<?php $value['id_produit']?>" class="title"><?php echo $value['nom_produit'] ?>
                </a>
                <strong>
                    <?php echo $value['prix_produit']; ?>&euro;
                </strong>
            </li>
            <?php
}
?>
            <!-- THIS IS THE PRODUCT DISPLAY MODEL DONT REMOVE
            <li>
                <a href="product.php"><img src="images/thumb.png" alt="Elegant evening Dress" /></a>
                <a href="product.php" class="title">Elegant evening Dress</a>
                <strong>&euro;499</strong>
            </li>
                THIS WAS THE PRODUCT DISPLAY MODEL THANKS -->
        </ul>
    </article>
    <footer>
        <div class="wrapper">
            <span class="logo">Rush00</span>
            <a href="#" target="_blank" title="title" class="right">Web Design 42</a>
            &copy; Rush00 <a href="#">Sitemap</a>
            <a href="#">Terms &amp; Conditions</a>
            <a href="#">Shipping &amp; Returns</a> <a href="#">Size Guide</a><a href="#">Help</a> <br />
        </div>
    </footer>
</body>

</html>
