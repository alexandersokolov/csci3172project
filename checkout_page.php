
<html>

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Semantic UI CSS -->
    <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
    <!-- Super Simple Slider CSS -->
    <link rel="stylesheet" type="text/css" href="sss/sss.css">
    <!-- Stylesheet Link -->
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
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


  </body>

  <footer>
    <!-- Footer -->
    <?php
        include "include/footer.html"
    ?>
  </footer>
</html>
