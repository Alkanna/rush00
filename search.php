<?php
session_start();
include 'sqlib.php';
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
                <ul>
                    <li>
                        <a href="search.php">Tops</a>
                        <ul class="sub-menu">
                            <li><a href="search.php">Tshirts</a></li>
                            <li><a href="search.php">Jumpers</a></li>
                            <li><a href="search.php">Cardigans</a></li>
                            <li><a href="search.php">Knitwear</a></li>
                        </ul>
                    </li>
                    <li><a href="search.php">Trousers</a></li>
                    <li>
                        <a href="search.php">Dresses</a>
                        <ul class="sub-menu">
                            <li><a href="search.php">Bridal dress</a></li>
                            <li><a href="search.php">Cocktail dress</a></li>
                            <li><a href="search.php">Maxi dress</a></li>
                            <li><a href="search.php">Shift dress</a></li>
                            <li><a href="search.php">Summer dress</a></li>
                            <li><a href="search.php">Warp dress</a></li>
                        </ul>
                    </li>
                </ul>
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
            <form action="#">
                <select name="sortBy" id="sortBy">
                    <option value="">Default</option>
                    <option value="PriceHiLo">Price (High to Low)</option>
                    <option value="PriceLoHi">Price (Low to High)</option>
                </select>
                &nbsp; Showing 26 - 50 of 78 Product(s)
            </form>
        </header>
        <ul id="items">
            <?php
$con = connect_db();
$products = get_list_produit($con);
var_dump($products);
foreach ($products as $key => $value) {
    ?><li><a href="product.php?id=<?php echo $value['id_produit'] ?>"><img src="images/thimb.png"
                        alt="<?php echo $value['nom_produit'] ?>" /></a>
                <a href="product.php?id=<?php $value['id_produit']?>"
                    class="title"><?php echo $value['nom_produit'] ?></a>
                <stong><?php echo $value['prix_produit']; ?>&euro;</strong>
            </li><?php
}
?>
            <li>
                <a href="product.php"><img src="images/thumb.png" alt="Elegant evening Dress" /></a>
                <a href="product.php" class="title">Elegant evening Dress</a>
                <strong>&euro;499</strong>
            </li>
            <li>
                <a href="product.php"><img src="images/thumb.png" alt="Elegant evening Dress" /></a>
                <a href="product.php" class="title">Elegant evening Dress</a>
                <strong>&euro;499</strong>
            </li>
            <li>
                <a href="product.php"><img src="images/thumb.png" alt="Elegant evening Dress" /></a>
                <a href="product.php" class="title">Longer title Elegant evening Dress</a>
                <strong>&euro;499</strong>
            </li>
            <li>
                <a href="product.php"><img src="images/thumb.png" alt="Elegant evening Dress" /></a>
                <a href="product.php" class="title">Elegant evening Dress</a>
                <strong>&euro;499</strong>
            </li>
            <li>
                <a href="product.php"><img src="images/thumb.png" alt="Elegant evening Dress" /></a>
                <a href="product.php" class="title">Elegant evening Dress</a>
                <strong>&euro;499</strong>
            </li>
            <li>
                <a href="product.php"><img src="images/thumb.png" alt="Elegant evening Dress" /></a>
                <a href="product.php" class="title">Longer title Elegant evening Dress</a>
                <strong>&euro;499</strong>
            </li>
            <li>
                <a href="product.php"><img src="images/thumb.png" alt="Elegant evening Dress" /></a>
                <a href="product.php" class="title">Elegant evening Dress</a>
                <strong>&euro;499</strong>
            </li>
            <li>
                <a href="product.php"><img src="images/thumb.png" alt="Elegant evening Dress" /></a>
                <a href="product.php" class="title">Elegant evening Dress</a>
                <strong>&euro;499</strong>
            </li>
            <li>
                <a href="product.php"><img src="images/thumb.png" alt="Elegant evening Dress" /></a>
                <a href="product.php" class="title">Elegant evening Dress</a>
                <strong>&euro;499</strong>
            </li>
            <li>
                <a href="product.php"><img src="images/thumb.png" alt="Elegant evening Dress" /></a>
                <a href="product.php" class="title">Elegant evening Dress</a>
                <strong>&euro;499</strong>
            </li>
            <li>
                <a href="product.php"><img src="images/thumb.png" alt="Elegant evening Dress" /></a>
                <a href="product.php" class="title">Elegant evening Dress</a>
                <strong>&euro;499</strong>
            </li>
            <li>
                <a href="product.php"><img src="images/thumb.png" alt="Elegant evening Dress" /></a>
                <a href="product.php" class="title">Elegant evening Dress</a>
                <strong>&euro;499</strong>
            </li>
            <li>
                <a href="product.php"><img src="images/thumb.png" alt="Elegant evening Dress" /></a>
                <a href="product.php" class="title">Elegant evening Dress</a>
                <strong>&euro;499</strong>
            </li>
            <li>
                <a href="product.php"><img src="images/thumb.png" alt="Elegant evening Dress" /></a>
                <a href="product.php" class="title">Elegant evening Dress</a>
                <strong>&euro;499</strong>
            </li>
            <li>
                <a href="product.php"><img src="images/thumb.png" alt="Elegant evening Dress" /></a>
                <a href="product.php" class="title">Longer title Elegant evening Dress</a>
                <strong>&euro;499</strong>
            </li>
            <li>
                <a href="product.php"><img src="images/thumb.png" alt="Elegant evening Dress" /></a>
                <a href="product.php" class="title">Elegant evening Dress</a>
                <strong>&euro;499</strong>
            </li>
            <li>
                <a href="product.php"><img src="images/thumb.png" alt="Elegant evening Dress" /></a>
                <a href="product.php" class="title">Elegant evening Dress</a>
                <strong>&euro;499</strong>
            </li>
            <li>
                <a href="product.php"><img src="images/thumb.png" alt="Elegant evening Dress" /></a>
                <a href="product.php" class="title">Longer title Elegant evening Dress</a>
                <strong>&euro;499</strong> </li>
            <li>
                <a href="product.php"><img src="images/thumb.png" alt="Elegant evening Dress" /></a>
                <a href="product.php" class="title">Elegant evening Dress</a>
                <strong>&euro;499</strong>
            </li>
            <li>
                <a href="product.php"><img src="images/thumb.png" alt="Elegant evening Dress" /></a>
                <a href="product.php" class="title">Elegant evening Dress</a>
                <strong>&euro;499</strong>
            </li>
            <li>
                <a href="product.php"><img src="images/thumb.png" alt="Elegant evening Dress" /></a>
                <a href="product.php" class="title">Elegant evening Dress</a>
                <strong>&euro;499</strong>
            </li>
            <li>
                <a href="product.php"><img src="images/thumb.png" alt="Elegant evening Dress" /></a>
                <a href="product.php" class="title">Elegant evening Dress</a>
                <strong>&euro;499</strong>
            </li>
            <li>
                <a href="product.php"><img src="images/thumb.png" alt="Elegant evening Dress" /></a>
                <a href="product.php" class="title">Elegant evening Dress</a>
                <strong>&euro;499</strong>
            </li>
            <li>
                <a href="product.php"><img src="images/thumb.png" alt="Elegant evening Dress" /></a>
                <a href="product.php" class="title">Elegant evening Dress</a>
                <strong>&euro;499</strong>
            </li>
            <li>
                <a href="product.php"><img src="images/thumb.png" alt="Elegant evening Dress" /></a>
                <a href="product.php" class="title">Elegant evening Dress</a>
                <strong>&euro;499</strong>
            </li>
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
