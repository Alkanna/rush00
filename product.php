<html>

<head>
    <meta charset="utf-8" />
    <title>Rush00</title>
    <link rel="stylesheet" href="css/style.css" />
    <link href="http://fonts.googleapis.com/css?family=Terminal+Dosis" rel="stylesheet" type="text/css" />
</head>

<body id="home">
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
                <input type="text" placeholder="Search Rush00..." /><button type="submit">
                    Search
                </button>
            </form>
            <div id="action-bar">
                <a href="login.php">Login/Register</a> //
                <a href="viewbasket.php">Your bag (0)</a>
            </div>
        </div>
    </aside>
    <article id="mainview">
      <div id="breadcrumb">
        <a href="index.html">Home</a> > <a href="search.html">Dresses</a> >
        <a href="search.html">Summer Dress</a> > Summer Dress
      </div>
      <div id="description">
        <h1>Elegant evening Dress</h1>
        <strong id="price"
          ><span>previously &euro;299.00</span> &euro;249.00</strong
        >
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
            <option value="1" selected="selected">Select colour</option>
            <option value="Blue">Blue</option>
            <option value="Beige">Beige</option>
          </select>
        </p>
        <p>
          <select disabled="disabled">
            <option value="-1">First select a colour</option>
          </select>
          <button type="button">Size guide</button>
        </p>
        <p><button type="submit" class="continue">Add to bag</button></p>
        <p><button type="button">Tell a friend</button></p>
        <div id="tabs">
          <ul>
            <li><a href="#tabs-1" class="first">Delivery</a></li>
            <li><a href="#tabs-2">Returns</a></li>
            <li><a href="#tabs-3">Info &amp; Care</a></li>
          </ul>
          <section id="tabs-1">
            <p><strong>FR Style Saver:</strong> Within 6 working days – FREE</p>
            <p>
              <strong>FR Standard:</strong> Within 3 working days – €3.95 or
              FREE if you spend over €75.00
            </p>
            <p>
              <strong>FR Next Day: </strong>Order by 6pm Weekdays or 2pm Sunday
              - €5.95 or FREE if you spend over €100
            </p>
            <p>
              <strong>FR Same day delivery:</strong> Order by 10am Monday -
              Sunday you will receive your goods the same day - €7.95
            </p>
            <p>
              <a
                shape="rect"
                href="#"
                title="View more information on International and FR delivery times"
                >More info on International and FR delivery times</a
              >
            </p>
          </section>
          <section id="tabs-2">
            <p>
              If you are not completely satisfied with your purchase, simply
              return the items to us in their original condition and packaging
              within 28 days of receipt and we will issue a full refund
              (excluding original delivery charge), or exchange the item for a
              different size / colour, if preferred.
            </p>
            <p>Please <a href="#">click here</a> for further information</p>
          </section>
          <section id="tabs-3">
            <p>Dry clean only, cashmere or silk so be careful, mkaybi</p>
          </section>
        </div>
      </div>
      <div id="images">
        <a href="images/main.jpg"><img src="images/main.jpg"/></a>
        <p>Rollover to zoom. Click to enlarge.</p>
        <span class="sale">Sale</span>
        <div id="productthumbs">
          <a href="#"><img src="images/thumb1.jpg"/></a
          ><a href="#"><img src="images/thumb2.jpg"/></a
          ><a href="#"><img src="images/thumb3.jpg"/></a>
        </div>
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
