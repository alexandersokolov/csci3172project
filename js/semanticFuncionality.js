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

    updateCart();
}



//Submitting review functionality
function submitReview(username,rating,text)
{
    //Replace this with session variable later on


    alert(text);
}
