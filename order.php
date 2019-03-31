<head>
    <meta charset="utf-8" />
    <title>Order</title>
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
                            <li><a href="search.php" class="current">Summer dress</a></li>
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
                <a href="sign_in.php">Login/Register</a> //
                <a href="viewbasket.php">Your bag (3) &nbsp; &euro;148</a>
            </div>
        </div>
    </aside>
    <article id="address">
        <form>
            <h1>Billing address</h1>
            <p>
                <label for="billFName">First name:</label>
                <input id="billFName" name="billFName" type="text" required="true" /><span class="alert">*</span>
            </p>
            <p>
                <label for="billLName">Last name:</label>
                <input id="billLName" name="billLName" type="text" required="true" /><span class="alert">*</span>
            </p>
            <p>
                <label for="billAddress1">Address:</label>
                <input id="billAddress1" name="billAddress1" type="text" required="true" /><span class="alert">*</span>
            </p>
            <p>
                <label for="billAddress2">&nbsp;</label>
                <input id="billAddress2" name="billAddress2" type="text" />
            </p>
            <p>
                <label for="billCity">City:</label>
                <input id="billCity" name="billCity" type="text" required="true" /><span class="alert">*</span>
            </p>
            <p>
                <label for="billCountry">Country:</label>
                <select id="billCountry" name="billCountry" required="true">
                    <option value="AR">Argentina</option>
                    <option value="AW">Aruba</option>
                    <option value="AU">Australia</option>
                    <option value="BS">Bahamas</option>
                    <option value="BB">Barbados</option>
                    <option value="BE">Belgium</option>
                    <option value="BM">Bermuda</option>
                    <option value="BR">Brazil</option>
                    <option value="CA">Canada</option>
                    <option value="KY">Cayman Islands</option>
                    <option value="CL">Chile</option>
                    <option value="CN">China (People's Republic)</option>
                    <option value="CX">Christmas Island</option>
                    <option value="CR">Costa Rica</option>
                    <option value="CY">Cyprus</option>
                    <option value="DK">Denmark</option>
                    <option value="EG">Egypt</option>
                    <option value="FI">Finland</option>
                    <option value="FR" selected="selected">France</option>
                    <option value="DE">Germany</option>
                    <option value="GR">Greece</option>
                    <option value="GU">Guam</option>
                    <option value="GT">Guatemala</option>
                    <option value="HK">Hong Kong</option>
                    <option value="IS">Iceland</option>
                    <option value="IE">Ireland (Republic of Ireland)</option>
                    <option value="IL">Israel</option>
                    <option value="IT">Italy</option>
                    <option value="JM">Jamaica</option>
                    <option value="JP">Japan</option>
                    <option value="KW">Kuwait</option>
                    <option value="LU">Luxembourg</option>
                    <option value="MW">Malawi</option>
                    <option value="MX">Mexico</option>
                    <option value="MC">Monaco</option>
                    <option value="NL">Netherlands (Holland)</option>
                    <option value="AN">Netherlands Antilles</option>
                    <option value="NZ">New Zealand</option>
                    <option value="NO">Norway</option>
                    <option value="PA">Panama</option>
                    <option value="PE">Peru</option>
                    <option value="PH">Philippines</option>
                    <option value="PL">Poland</option>
                    <option value="PT">Portugal</option>
                    <option value="PR">Puerto Rico</option>
                    <option value="SA">Saudi Arabia</option>
                    <option value="SG">Singapore</option>
                    <option value="ZA">South Africa</option>
                    <option value="KP">South Korea (Republic of Korea)</option>
                    <option value="ES">Spain</option>
                    <option value="SE">Sweden</option>
                    <option value="CH">Switzerland</option>
                    <option value="TW">Taiwan</option>
                    <option value="TH">Thailand</option>
                    <option value="TT">Trinidad and Tobago</option>
                    <option value="TR">Turkey</option>
                    <option value="AE">United Arab Emirates</option>
                    <option value="GB">United Kingdom</option>
                    <option value="US">United States</option>
                    <option value="UM">United States Minor Outlying Islands</option>
                    <option value="VE">Venezuela</option>
                    <option value="VG">Virgin Islands (British)</option>
                </select>
            </p>
            <p>
                <label for="billZip">Post code:</label>
                <input id="billZip" name="billZip" type="text" required="true" /><span class="alert">*</span>
            </p>
            <p>
                <label for="billEqualShip">Ship to this address</label>
                <input name="billEqualShip" type="checkbox" id="billEqualShip" value="Y" checked />
            </p>
            <p>
                <label for="email">Email:</label>
                <input id="email" name="email" type="email" required="true" /><span class="alert">*</span>
            </p>
            <p>
                <label for="phone">Phone:</label>
                <span style="display: none;" class="helper">Please enter your <strong>phone number</strong>.<br />We
                    might need
                    to contact you with regards to your order.</span>
                <input id="phone" name="phone" type="tel" required="true" /><span class="alert">*</span>
            </p>
        </form>
        <form id="ship">
            <h1>Shipping address</h1>
            <p>
                <label for="shipFName">First name:</label>
                <input name="shipFName" type="text" id="shipFName" required="true" /><span class="alert">*</span>
            </p>
            <p>
                <label for="shipLName">Last name:</label>
                <input id="shipLName" type="text" name="shipLName" required="true" /><span class="alert">*</span>
            </p>
            <p>
                <label for="shipAddress1">Address:</label>
                <input name="shipAddress1" type="text" id="shipAddress1" required="true" /><span class="alert">*</span>
            </p>
            <p>
                <label for="shipAddress2">&nbsp;</label>
                <input name="shipAddress2" type="text" id="shipAddress2" />
            </p>
            <p>
                <label for="shipCity">City:</label>
                <input name="shipCity" type="text" id="shipCity" required="true" /><span class="alert">*</span>
            </p>
            <p>
                <label for="shipCountry">Country:</label>
                <select id="shipCountry" name="shipCountry" required="true">
                    <option value="AR">Argentina</option>
                    <option value="AW">Aruba</option>
                    <option value="AU">Australia</option>
                    <option value="BS">Bahamas</option>
                    <option value="BB">Barbados</option>
                    <option value="BE">Belgium</option>
                    <option value="BM">Bermuda</option>
                    <option value="BR">Brazil</option>
                    <option value="CA">Canada</option>
                    <option value="KY">Cayman Islands</option>
                    <option value="CL">Chile</option>
                    <option value="CN">China (People's Republic)</option>
                    <option value="CX">Christmas Island</option>
                    <option value="CR">Costa Rica</option>
                    <option value="CY">Cyprus</option>
                    <option value="DK">Denmark</option>
                    <option value="EG">Egypt</option>
                    <option value="FI">Finland</option>
                    <option value="FR" selected="selected">France</option>
                    <option value="DE">Germany</option>
                    <option value="GR">Greece</option>
                    <option value="GU">Guam</option>
                    <option value="GT">Guatemala</option>
                    <option value="HK">Hong Kong</option>
                    <option value="IS">Iceland</option>
                    <option value="IE">Ireland (Republic of Ireland)</option>
                    <option value="IL">Israel</option>
                    <option value="IT">Italy</option>
                    <option value="JM">Jamaica</option>
                    <option value="JP">Japan</option>
                    <option value="KW">Kuwait</option>
                    <option value="LU">Luxembourg</option>
                    <option value="MW">Malawi</option>
                    <option value="MX">Mexico</option>
                    <option value="MC">Monaco</option>
                    <option value="NL">Netherlands (Holland)</option>
                    <option value="AN">Netherlands Antilles</option>
                    <option value="NZ">New Zealand</option>
                    <option value="NO">Norway</option>
                    <option value="PA">Panama</option>
                    <option value="PE">Peru</option>
                    <option value="PH">Philippines</option>
                    <option value="PL">Poland</option>
                    <option value="PT">Portugal</option>
                    <option value="PR">Puerto Rico</option>
                    <option value="SA">Saudi Arabia</option>
                    <option value="SG">Singapore</option>
                    <option value="ZA">South Africa</option>
                    <option value="KP">South Korea (Republic of Korea)</option>
                    <option value="ES">Spain</option>
                    <option value="SE">Sweden</option>
                    <option value="CH">Switzerland</option>
                    <option value="TW">Taiwan</option>
                    <option value="TH">Thailand</option>
                    <option value="TT">Trinidad and Tobago</option>
                    <option value="TR">Turkey</option>
                    <option value="AE">United Arab Emirates</option>
                    <option value="GB">United Kingdom</option>
                    <option value="US">United States</option>
                    <option value="UM">United States Minor Outlying Islands</option>
                    <option value="VE">Venezuela</option>
                    <option value="VG">Virgin Islands (British)</option>
                </select>
            </p>
            <p>
                <label for="shipZip">Post code:</label>
                <input name="shipZip" type="text" id="shipZip" required="true" /><span class="alert">*</span>
            </p>
            <p>
                <label>&nbsp;</label><button type="submit" class="continue">Continue</button>
            </p>
        </form>
        <form id="myform">
  <header>Shipping Order Form</header>
  <div class="area">
    <div class="row">
      <div class="col2">
        <input type="text" name="firstname">
        <label for="fistname">First Name</label>
      </div>
      <div class="col2">
        <input type="text" name="lastname">
        <label for="lastname">Last Name</label>
      </div>
    </div>
    <div class="row">
      <input type="text" name="phone" id="phone">
      <label for="phone">Phone</label>
    </div>
    <div class="row">
      <input type="text" name="address" id="address">
      <label for="address">Address</label>
    </div>

  </div>
  <div class="area">
    <div class="ckeckarea">
      <input type="checkbox" name="checkbox1" id="checkbox1" onclick="autofilling(this.form)">
      <label for="checkbox1">Check this box if order info and sending info are the same.</label>
    </div>
    <div class="row">
      <div class="col2">
        <input type="text" name="newfirstname">
        <label for="newfistname">First Name</label>
      </div>
      <div class="col2">
        <input type="text" name="newlastname">
        <label for="newlastname">Last Name</label>
      </div>
    </div>
    <div class="row">
      <input type="text" name="newaddress" id="newaddress">
      <label for="newaddress">Sending Address</label>
    </div>
  </div>
  <div class="row">
    <input type="submit" value="Submit" class="btn">
    <input type="submit" value="cancel" class="btn">
  </div>
</form>
        <p>
            <button type="button">Go back</button>
        </p>
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

</php>
