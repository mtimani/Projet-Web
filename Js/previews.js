/*$('.preview_close').click( function (){
    $('.preview').css({ "visibility": "hidden"});

});*/


var c_BF = $('#c_BF');

c_BF.mouseenter(function (e){
    c_BF=setTimeout(function(){
        console.log("Hello !");
        $('#preview_BF').css({ "visibility": "visible", "left": e.pageX, "right": e.pageX, "background": "white"});
    }, 2000);

});




c_BF.mouseout(function (e){

    console.log("Olleh !");
    clearTimeout(c_BF);

});



/*var country_BF = document.getElementById('c_BF');

country_BF.addEventListener('mouseenter', function() {
    console.log('Salut');
});*/
