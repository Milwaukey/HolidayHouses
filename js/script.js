$(".burger-menu").click(function(){

    $('.burger-menu').toggleClass("burger-menu--opened");
    $('.burger-menu').toggleClass("burger-menu--closed");

    $('.navigation').toggleClass('show');

})

$('#linkHouse').click(function(){
    location.href = 'create-house';
})

