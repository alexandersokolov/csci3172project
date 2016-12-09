<div class="ui modal cart">
    <i class="close icon"></i>
    <div class="ui middle aligned center aligned grid">
        <div class="column">
            <h2 class="ui teal image header">

                <div class="content" id="logHeader">
                    Shopping Cart
                </div>
            </h2>
            <form class="ui large form">
                <div class="ui stacked segment">


                    <!-- Div that contains all the items -->


                    <div class="cartContainer">
                        <div class="cartItem">

                         <div class="productImage">
                             <img src="../csci3172project/media/productImageExample.jpg" alt="product Image"  style="width: 100px;height: 100px;">
                          </div>

                         <!--- Product Title --->

                         <div class="productTitle">
                            <p>iPhone 6S Space Grey</p>
                        </div>

                         <!-- Product Description -->

                          <!-- Will remove description entirely from the shopping cart later as it is redundant and also causes a bunch of problems -->
                         <div class="productDescription">
                            <p>Lorem ipsum dolor sit amet, magna vitae. Et porttitor urna eu nulla,Et porttitor urna eu nulla,Et porttitor urna eu nulla</p>
                          </div>

                         <div class="productPrice">
                             <p><b>Price:</b> $CAD 99999</p>
                         </div>

                            <div class="productPrice">
                                <p><b>Quantity:</b> 1</p>
                            </div>

                            <button class="negative ui button itemButton">Remove</button>

                        </div>
                    </div>

                    <div class="cartContainer">
                        <div class="cartItem">

                            <div class="productImage">
                                <img src="../csci3172project/media/macbook.png" alt="product Image"  style="width: 100px;height: 100px;">
                            </div>

                            <!--- Product Title --->

                            <div class="productTitle">
                                <p>15" Gold MacBook</p>
                            </div>

                            <!-- Product Description -->

                            <!-- Will remove description entirely from the shopping cart later as it is redundant and also causes a bunch of problems -->
                            <div class="productDescription">
                                <p>Lorem ipsum dolor sit amet, magna vitae. Et porttitor urna eu nulla,Et porttitor urna eu nulla,Et porttitor urna eu nulla</p>
                            </div>

                            <div class="productPrice">
                                <p><b>Price:</b> $CAD 99999</p>
                            </div>

                            <div class="productPrice">
                                <p><b>Quantity:</b> 1</p>
                            </div>

                            <button class="negative ui button itemButton">Remove</button>

                        </div>
                    </div>

                    <!-- The entire cart right now is a lie and will break apart, this just a front-end thing for a presentation screenshot -->
                    <!-- Things that are needed tp fix the cart are relative measurements, fix css and remove description -->

                    <div class="cartContainer">
                        <div class="cartItem">

                            <div class="productImage">
                                <img src="../csci3172project/media/samsung.jpg" alt="product Image"  style="width: 100px;height: 100px;">
                            </div>

                            <!--- Product Title --->

                            <div class="productTitle">
                                <p>Samsung 50" Television</p>
                            </div>

                            <!-- Product Description -->

                            <div class="productDescription">
                                <p>Lorem ipsum dolor sit amet, magna vitae. Et porttitor urna eu nulla,Et porttitor urna eu nulla,Et porttitor urna eu nulla</p>
                            </div>

                            <div class="productPrice">
                                <p><b>Price:</b> $CAD 99999</p>
                            </div>

                            <div class="productPrice">
                                <p><b>Quantity:</b> 1</p>
                            </div>

                            <button class="negative ui button itemButton">Remove</button>

                        </div>
                    </div>




                    <div class="ui fluid large teal submit button">Checkout</div>
                </div>


            </form>


        </div>
    </div>
</div>