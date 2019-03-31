<head>
    <meta charset="utf-8" />
    <title>Produit</title>
    <link rel="stylesheet" href="css/style.css" />
    <link href="http://fonts.googleapis.com/css?family=Terminal+Dosis" rel="stylesheet" type="text/css" />
</head>

<body>
    <header>
        <div class="wrapper">
            <h1><a href="index.php" id="brand" title="Produit">Produit</a></h1>
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
                    <a href="#" class="facebook" title="like us us on Facebook">like us us on Facebook</a>
                </li>
                <li>
                    <a href="#" class="twitter" title="follow us on twitter">follow us on twitter</a>
                </li>
            </ul>
            <form>
                <input type="text" placeholder="Search Produit..." /><button type="submit">
                    Search
                </button>
            </form>
            <div id="action-bar">
            <?php if (isset($_SESSION['loggued_on_user']) && !empty($_SESSION['loggued_on_user'])) : ?>
                <a href="administration.php">My Account</a> /
                <a href="logout.php">Logout</a> /
            <?php else : ?>
                <a href="sign_in.php">Login/Register</a> /
            <?php endif;?>
                <a href="viewbasket.php">Your bag (0)</a>
            </div>
        </div>
    </aside>
    <article id="mainview">
        <div id="breadcrumb">
            <a href="index.php">Home</a> > <a href="search.php">Dresses</a> >
            <a href="search.php">Summer Dress</a> > Summer Dress
        </div>
        <div id="description">
            <h1>Elegant evening Dress</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
                volutpat ultricies fringilla. Suspendisse iaculis tristique leo, id
                adipiscing massa aliquet ut. Etiam adipiscing auctor enim nec
                tincidunt. Suspendisse non orci id nisi cursus accumsan id vitae urna.
                Donec sit amet elit interdum eros venenatis viverra. Quisque placerat,
                nunc quis tristique congue, ante urna semper eros, eleifend tincidunt
                metus lacus sed nunc. Aliquam erat volutpat.
            </p>
            <p>
                <select>
                    <option value="1" selected="selected">Select size</option>
                    <option value="Small">Small</option>
                    <option value="Medium">Medium</option>
                    <option value="Large">Large</option>
                    <option value="XLarge">X-Large</option>
                    <option value="XXLarge">XX-Large</option>
                </select>
            </p>
            <p>
                <button type="button">Size guide</button>
            </p>
            <p><button type="submit" class="continue">Add to bag</button></p>
            <p><button type="button">Tell a friend</button></p>
        </div>
        <div id="images" style="padding-bottom: 12px;">
            <a href="images/main.jpg"><img src="images/main.jpg" /></a>
        </div>
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
