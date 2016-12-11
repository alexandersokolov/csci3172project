<?php

if($_GET['id'])
{
    $id = $_GET['id'];


    //Connecting to the database
    include_once "include/dbConnect.php";

    //Executing the query and fetching the results
    $query = "SELECT * FROM products WHERE id=$id";
    $result = $pdo->query($query);



    $row = $result->fetch();

    $name = $row['name'];
    $imagePath = $row['imagePath'];
    $description = $row['description'];
    $price = $row['price'];




}

?>


<html lang="en">
<head>

    <!-- Title -->
    <title>Electronic Super Shop</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Semantic UI CSS -->
    <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">

    <!-- Super Simple Slider CSS -->
    <link rel="stylesheet" type="text/css" href="sss/sss.css">

    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="description" content="Web Centric Project">
    <meta name="keywords" content="Web,Centric,Project">
    <meta name="author" content="Team Squad">


    <!-- Stylesheet Link -->
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">

    <!-- Product Link -->
    <link rel="stylesheet" type="text/css" href="css/individualProduct.css">

</head>


<body>

<!-- START OF NAVBAR MENU -->

<?php include "include/navBar.php"; ?>

<!-- END OF NAVBAR -->



<!-- Login Modal -->
<?php
include "include/loginModal.html"
?>

<!-- Shopping Cart Modal -->
<?php
include "include/shoppingModal.html"
?>

<!-- jQuery -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>

<!-- Semantic UI jQuery -->
<script src="semantic/dist/semantic.min.js"></script>





<div class="productView">
    <div class="ui stackable grid newGrid productBase">
        <div class="four wide column">
            <img src="../csci3172project/<?php echo $imagePath; ?>" alt="product Image"  class="individualImage">

            <div class="priceDiv">
                <p>$CAD <?php echo $price; ?></p>
            </div>

            <div class="ui vertical button addCart" onclick="onClickAddCart()" tabindex="0">
                <div class="visible content">
                    Add to Cart <i class="shop icon" ></i>
                </div>
            </div>
        </div>
        <div class="twelve wide column">
            <div class="itemName">
                <p><?php echo "$name";?></p>
            </div>

            <div class="itemDescription">
                <p><?php echo $description;?></p>
            </div>
        </div>
    </div>


    <!-- Submitting a review -->
    <div class="ui stackable grid newGrid leaveReview">
        <div class="sixteen wide column">
            <div class="reviewTitle">
                <p>Leave a Review</p>
            </div>
            <div class="ui form">

                <div class="field">
                    <label>Rating</label>
                    <div class="ui massive star rating itemRating" data-rating="4" data-max-rating="5"></div>
                </div>


                <div class="field">
                    <label>Description</label>
                    <textarea rows="2" id="inputText"></textarea>
                </div>

                <div class="field">


                    <button class="ui green button submitReview" onclick="submitReview(username,rating,productId)">Submit</button>
                </div>


            </div>

        </div>
    </div>


    <!-- Javascript that gets all of the information needed for a review -->
    <script>
        //Username and id needs to be replaced later with real session variable
        var username = "<?php if(isset($_SESSION['username'])){echo $_SESSION['username'];} else{echo '';} ?>";
        var productId = "<?php echo $id; ?>";
        var rating;

    </script>


    <!-- User reviews -->

    <div class="ui stackable grid newGrid">
        <div class="sixteen wide column">
            <div class="reviewTitle">
                <p>Reviews</p>
            </div>


        </div>
    </div>



    <!-- Fetched User Reviews -->
    <?php
        include "include/fetchReviews.php";
    ?>

    <script>
        $('.ui.rating')
            .rating('setting', 'onRate', function(value)
            {
                rating = value;
            });

        $('.ui.rating.review')
            .rating('disable')
        ;


    </script>

</div>





<!-- Semantic UI Javascript -->
<script src="js/semanticFuncionality.js"></script>

</body>

<footer>


    <?php
   // include "include/footer.html"
    ?>

</footer>
</html>
