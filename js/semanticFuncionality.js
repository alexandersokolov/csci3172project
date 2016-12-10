//Allows semantic UI javascript for dropdown menus
$(document).ready(function(){
    $('.right.menu.open').on("click",function(e){
        e.preventDefault();
        $('.ui.vertical.menu').toggle();
    });

    $('.ui.dropdown').dropdown();
});


//Function that makes the login modal show-up
function onClickLogin()
{
    $('.ui.modal.login').modal({closeable:true})
        .modal('show')
    ;
}

//Function that makes the shopping cart show-up
function onClickCart()
{
    $('.ui.modal.cart').modal({closeable:true})
        .modal('show')
    ;
}

//Get current date function
function getDate()
{
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var yyyy = today.getFullYear();

    if(dd<10) {
        dd='0'+dd
    }

    if(mm<10) {
        mm='0'+mm
    }

    return today = yyyy+'-'+mm+'-'+dd;
}




//Adds product to cart
function onClickAddCart()
{
    //Insert code that will add product to the cart
    alert("Added item");
}

//Submitting review functionality
function submitReview(username,rating,productId)
{
    //If user leaves default rating
    if (typeof rating == 'undefined')
    {
        rating = 4;
    }

    //Getting the text from the text box
    var text = $('#inputText').val();

    //Getting the current date
    var date = getDate();

    //Turning the data into json
    var reviewData = new Object();
    reviewData.username = username;
    reviewData.rating = rating;
    reviewData.text = text;
    reviewData.date = date;
    reviewData.id = productId;
    var jsonString = JSON.stringify(reviewData);

    //Sending http request to the php file for validation
    request = new XMLHttpRequest();
    request.open("POST", "include/addReview.php", true);
    request.setRequestHeader("Content-type", "application/json");
    request.send(jsonString);

    //Alerts the user
    alert("Your review has been added!");

    //Refresh the page
    location.reload();
}

function gotoPage(page){
  window.location.replace(page);
}
