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
                <a href="#" class="item login" onclick="onClickLogin()"><i class="sign in icon"></i>Login</a>
                <a href="#" class="item cart" onclick="onClickCart()"><i class="shopping basket icon"></i>Cart</a>
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
        <div class="ui vertical navbar menu" style="margin-top: 10%;">
            <div class="ui item">
               <a href="index.php" class="item" style="padding-left: 0;">Home</a>

                <div class="text">Products</div>
                <div class="menu">
                    <a class="item">Laptops</a>
                    <a class="item">Televisions</a>
                    <a class="item">Mobile Phones</a>
                </div>
            </div>
            <div class="menu">
                <a href="#" class="item login" onclick="onClickLogin()">Login</a>
                <a href="#" class="item cart" onclick="onClickCart()">Cart</a>
            </div>


        </div>
    </div>
</div>
