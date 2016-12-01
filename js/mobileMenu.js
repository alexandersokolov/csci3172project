
$(document).ready(function(){
    $('.right.menu.open').on("click",function(e){
        e.preventDefault();
        $('.ui.vertical.menu').toggle();
    });

    $('.ui.dropdown').dropdown();
});


//Function that makes the login modal show-up
$(".login").click(function()
{
    $('.ui.modal.login')
        .modal('show')
    ;
});


$(".cart").click(function()
{
    $('.ui.modal.cart')
        .modal('show')
    ;
});
