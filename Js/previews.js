/*$('.preview_close').click( function (){
    $('.preview').css({ "visibility": "hidden"});

});*/


var c_BF = $('#c_BF');
//var prev = $('#preview_BF');

c_BF.mouseenter(function (e){
    clearTimeout(c_BF);
    c_BF=setTimeout(function(){
        var posY = e.pageY-300; //300 is 3/4 of the preview's height
        console.log("Hello !");
        $('#preview_BF').css({ "visibility": "visible", "left": e.pageX, "top": posY});
    }, 500);


});

c_BF.click(function (e){
    var posY = e.pageY-300;
    console.log("Hello !");
    $('#preview_BF').css({ "visibility": "visible", "left": e.pageX, "top": posY});
});



c_BF.mouseout(function (){
    clearTimeout(c_BF);

    c_BF=setTimeout(function(){
        $('#preview_BF').css({ "visibility": "hidden"});
        console.log("Olleh !");
    }, 500);

    $('#preview_BF').mouseenter(function (e){
        clearTimeout(c_BF);
        $('#preview_BF').css({ "visibility": "visible"});
        console.log("Hello HOLY WORK !");
    });
});




c_BF.mouseout(function (){
    clearTimeout(c_BF);
    c_BF=setTimeout(function(){
        $('#preview_BF').css({ "visibility": "hidden"});
        console.log("Olleh !");
    }, 500);

});






/*var country_BF = document.getElementById('c_BF');

country_BF.addEventListener('mouseenter', function() {
    console.log('Salut');
});*/
