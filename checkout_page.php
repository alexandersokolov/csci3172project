
<html>

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Semantic UI CSS -->
    <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
    <!-- Super Simple Slider CSS -->
    <link rel="stylesheet" type="text/css" href="sss/sss.css">
    <!-- Stylesheet Link -->
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">

    <link rel="stylesheet" type="text/css" href="css/style.css">

  </head>

  <body>


  </head>

  <body>

    <div class="ui grid">
        <div class="computer tablet only row">
            <div class="ui inverted fixed menu navbar page grid">
                <a href="" class="brand item">Awesome Store</a>
                <a href="index.php" class="active item"><i class="home icon"></i>Home</a>
                <a class="ui dropdown item"><i class="shopping bag icon"></i>Products
                    <i class="dropdown icon"></i>
                    <div class="menu">
                        <div class="item">Laptops</div>
                        <div class="item">Televisions</div>
                        <div class="item">Mobile Phones</div>
                    </div>
                </a>
                <div class="right menu">
                    <a href="#" class="item login"><i class="sign in icon"></i>Login</a>
                    <a href="#" class="item cart"><i class="shopping basket icon"></i>Cart</a>
                </div>
            </div>
        </div>
        <div class="mobile only row">
            <div class="ui fixed inverted navbar menu">
                <a href="" class="brand item">Awesome Store</a>
                <div class="right menu open">
                    <a href="" class="menu item">
                        <i class="content icon"></i>
                    </a>
                </div>
            </div>
            <div class="ui vertical navbar menu">
                <a href="" class="active item">Home</a>
                <div class="ui item">
                    <div class="text">Products</div>
                    <div class="menu">
                        <a class="item">Laptops</a>
                        <a class="item">Televisions</a>
                        <a class="item">Mobile Phones</a>
                    </div>
                </div>
                <div class="menu">
                    <a href="#" class="item login">Login</a>
                    <a href="#" class="item cart">Cart</a>
                </div>
            </div>
        </div>
    </div>
    <!-- **********This is the black version of the checkout page************
    *********      in case you guys wanted to choose it      ****************
    *************************************************************************
    <!-- <div class="ui inverted segment">
      <h4 class="ui left floated header">Deliver To</h4>
      <div class="ui clearing divider"></div>
      <p>Firstname Lastname</p>
      <p>1111 00 Streetname st</p>
      <p>City, Province, X1X2Y2, Country</p>
      <div class="right floated content">
          <div class="ui button">Edit</div>
      </div>
      <div class="ui hidden divider"></div>
      <div class="ui hidden divider"></div>
      <h4 class="ui left floated header">Shipping Priority</h4>
      <div class="ui clearing divider"></div>

      <div class="ui form">
        <div class="grouped fields">
          <div class="field">
            <div class="ui radio checkbox">
              <input type="radio" name="example2" checked="checked">
              <label>FREE Standard Shipping: 1-2 weeks</label>
            </div>
          </div>
          <div class="field">
            <div class="ui radio checkbox">
              <input type="radio" name="example2">
              <label>Priority Shipping: 2-3 days</label>
            </div>
          </div>
          <div class="field">
            <div class="ui radio checkbox">
              <input type="radio" name="example2">
              <label>Free Ship to Store</label>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="ui inverted segment">
      <h4 class="ui left floated header">Place Order</h4>
    </div> -->

<div class="ui grid">
<div class = "content-container">
<form class="ui form">
  <h4 class="ui dividing header">Shipping Information</h4>
  <div class="field">
    <label>Name</label>
    <div class="two fields">
      <div class="field">
        <input type="text" name="shipping[first-name]" placeholder="First Name">
      </div>
      <div class="field">
        <input type="text" name="shipping[last-name]" placeholder="Last Name">
      </div>
    </div>
  </div>
  <div class="field">
    <label>Billing Address</label>
    <div class="fields">
      <div class="twelve wide field">
        <input type="text" name="shipping[address]" placeholder="Street Address">
      </div>
      <div class="four wide field">
        <input type="text" name="shipping[address-2]" placeholder="Apt #">
      </div>
    </div>
  </div>
  <div class="two fields">
    <div class="field">
      <label>State</label>
      <select class="ui fluid dropdown">
        <option value="">State</option>
    <option value="ON">Ontario</option>
    <option value="QC">Quebec</option>
    <option value="NS">Nova Scotia</option>
    <option value="NB">New Brunswick</option>
    <option value="MB">Manitoba</option>
    <option value="BC">British Columbia</option>
    <option value="PE">Prince Edward Island</option>
    <option value="SK">Saskatchewan</option>
    <option value="AB">Alberta</option>
    <option value="NL">Newfoundland and Labrador</option>
      </select>
    </div>
    <div class="field">
      <label>Country</label>
      <select class="ui fluid dropdown">
        <option value="">Country</option>
    <option value="CA">Canada</option>
      </select>
    </div>
  </div>
  <h4 class="ui dividing header">Billing Information</h4>
  <div class="field">
    <label>Card Type</label>
    <select class="ui fluid dropdown">
        <option value="">Card Type</option>
    <option value="M">Mastercard</option>
    <option value="V">Visa</option>
    <option value="P">Paypal</option>
      </select>
  </div>
  <div class="fields">
    <div class="seven wide field">
      <label>Card Number</label>
      <input type="text" name="card[number]" maxlength="16" placeholder="Card #">
    </div>
    <div class="three wide field">
      <label>CVC</label>
      <input type="text" name="card[cvc]" maxlength="3" placeholder="CVC">
    </div>
    <div class="six wide field">
      <label>Expiration</label>
      <div class="two fields">
        <div class="field">
          <select class="ui fluid search dropdown" name="card[expire-month]">
            <option value="">Month</option>
            <option value="1">January</option>
            <option value="2">February</option>
            <option value="3">March</option>
            <option value="4">April</option>
            <option value="5">May</option>
            <option value="6">June</option>
            <option value="7">July</option>
            <option value="8">August</option>
            <option value="9">September</option>
            <option value="10">October</option>
            <option value="11">November</option>
            <option value="12">December</option>
          </select>
        </div>
        <div class="field">
          <input type="text" name="card[expire-year]" maxlength="4" placeholder="Year">
        </div>
      </div>
    </div>
  </div>
 <div class="ui clearing divider"></div>
  <div class="ui button" tabindex="0">Submit Order</div>
</form>




        <div class="ui center aligned segment">
          <h4 class="ui left floated header">Deliver To</h4>
          <div class="ui clearing divider"></div>
          <p>Firstname Lastname</p>
          <p>1111 00 Streetname st</p>
          <p>City, Province, X1X2Y2, Country</p>
          <div class="right floated content">
            <div class="ui button">Edit</div>
          </div>
          <div class="ui hidden divider"></div>
          <div class="ui hidden divider"></div>
          <h4 class="ui left floated header">Shipping Priority</h4>
          <div class="ui clearing divider"></div>

          <div class="ui form">
            <div class="grouped fields">
              <div class="field">
                <div class="ui radio checkbox">
                  <input type="radio" name="example2" checked="checked">
                  <label>FREE Standard Shipping: 1-2 weeks</label>
                </div>
              </div>
              <div class="field">
                <div class="ui radio checkbox">
                  <input type="radio" name="example2">
                  <label>Priority Shipping: 2-3 days</label>
                </div>
              </div>
              <div class="field">
                <div class="ui radio checkbox">
                  <input type="radio" name="example2">
                  <label>Free Ship to Store</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="ui center aligned segment">
          <h3 class="ui left floated header">Continue to payment</h3>
          <div class="ui hidden divider"></div>
        </div>
      </div>
    </div>

  </div>
</div>


  </body>

  <footer>
    <!-- Footer -->
    <?php
        include "include/footer.html"
    ?>
  </footer>
</html>
