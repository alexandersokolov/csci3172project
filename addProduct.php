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
    <link rel="stylesheet" type="text/css" href="css/addProduct.css">

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


<h1>Add a Product</h1>
<div class="productContainer">

    <form class="ui form" action="<?php echo  htmlentities($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">


        <div class="field">
            <label>Product Name</label>
            <input type="text" name="productName" placeholder="Product Name" required>
        </div>
        <div class="field">
            <label>Price</label>
            <input type="text" name="price" placeholder="$CAD" required>
        </div>

        <div class="field">
            <label>Category</label>
            <select name="category" class="ui fluid dropdown" required>
                <option value="television">Television</option>
                <option value="laptop">Laptop</option>
                <option value="mobilePhone">Mobile Phone</option>

            </select>
        </div>

        <div class="field">
            <label>Description</label>
            <textarea name="description" rows="2" required></textarea>
        </div>

        <div class="field">
            <label for="file" class="ui icon button">
                <i class="image icon"></i>
                Upload Image</label>
            <input type="file" id="file" name="file" style="display:none">
        </div>

        <button class="ui button" type="submit" name="prodSubmit">Add Product</button>
    </form>


</div>

<?php


    include_once "include/dbConnect.php";
    include_once "include/utilities.php";


    if(isset($_POST['prodSubmit'])) {
        $productName = mysql_fix_string($_POST['productName']);
        $price = mysql_fix_string($_POST['price']);
        $category = mysql_fix_string($_POST['category']);
        $description = mysql_fix_string($_POST['description']);

        $query = "INSERT INTO products (category,name,description,price) VALUES (?,?,?,?)";
        $statement = $pdo->prepare($query);
        $statement->execute(array($category, $productName, $description, $price));


        //File upload
        $target_dir = "media/productImages";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            //if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }


        }

    }


?>







<!-- Semantic UI Javascript -->
<script src="js/semanticFuncionality.js"></script>
</body>

<footer>


    <?php
     //include "include/footer.html"
    ?>

</footer>
</html>
