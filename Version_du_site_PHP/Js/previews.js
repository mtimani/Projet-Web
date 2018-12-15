/*$('.preview_close').click( function (){
    $('.preview').css({ "visibility": "hidden"});

});*/



//=============================================================================================



var c_US = $("#c_US");
//var prev = $('#preview_US');

c_US.mouseenter(function (e){
    clearTimeout(c_US);
    c_US=setTimeout(function(){
        var posY = e.pageY-300; //300 is 3/4 of the preview's height
        console.log("Hello !");
        $('#preview_US').css({ "visibility": "visible", "left": e.pageX, "top": posY});
    }, 500);


});

c_US.click(function (e){
    var posY = e.pageY-300;
    console.log("Hello !");
    $('#preview_US').css({ "visibility": "visible", "left": e.pageX, "top": posY});
});



c_US.mouseout(function (){
    clearTimeout(c_US);

    c_US=setTimeout(function(){
        $('#preview_US').css({ "visibility": "hidden"});
        console.log("Olleh !");
    }, 500);

    $('#preview_US').mouseenter(function (e){
        clearTimeout(c_US);
        $('#preview_US').css({ "visibility": "visible"});
        console.log("Hello HOLY WORK !");
    });
});




c_US.mouseout(function (){
    clearTimeout(c_US);
    c_US=setTimeout(function(){
        $('#preview_US').css({ "visibility": "hidden"});
        console.log("Olleh !");
    }, 500);

});


//==================================================================================

/*$(document).mouseover(function(event) {
    console.log("X : ", event.pageX);
});*/


var c_CN = $("#c_CN");
//var prev = $('#preview_CN');

c_CN.mouseenter(function (e){
    clearTimeout(c_CN);

    c_CN=setTimeout(function(){
        var docWidth = $(document).width();
        var posX = e.pageX;
        var posY = e.pageY-300; //300 is 3/4 of the preview's height

        if(posX+350 > docWidth-50){
            posX = posX-100;
        }


        console.log("H doc: ", $(document).height());
        console.log("W doc: ", $(document).width());
        console.log("H win: ", $(window).height());
        console.log("W win: ", $(window).width());



        console.log("Hello !");
        $('#preview_CN').css({ "visibility": "visible", "left": posX, "top": posY});
    }, 500);


});

c_CN.click(function (e){
    var posY = e.pageY-300;

    console.log("Hello !");
    $('#preview_CN').css({ "visibility": "visible", "left": e.pageX, "top": posY});
});



c_CN.mouseout(function (){
    clearTimeout(c_CN);

    c_CN=setTimeout(function(){
        $('#preview_CN').css({ "visibility": "hidden"});
        console.log("Olleh !");
    }, 500);

    $('#preview_CN').mouseenter(function (e){
        clearTimeout(c_CN);
        $('#preview_CN').css({ "visibility": "visible"});
        console.log("Hello HOLY WORK !");
    });
});




c_CN.mouseout(function (){
    clearTimeout(c_CN);
    c_CN=setTimeout(function(){
        $('#preview_CN').css({ "visibility": "hidden"});
        console.log("Olleh !");
    }, 500);

});




//=============================================================================================



var c_DE = $("#c_DE");
//var prev = $('#preview_DE');

c_DE.mouseenter(function (e){
    clearTimeout(c_DE);
    c_DE=setTimeout(function(){
        var posY = e.pageY-300; //300 is 3/4 of the preview's height
        console.log("Hello !");
        $('#preview_DE').css({ "visibility": "visible", "left": e.pageX, "top": posY});
    }, 500);


});

c_DE.click(function (e){
    var posY = e.pageY-300;
    console.log("Hello !");
    $('#preview_DE').css({ "visibility": "visible", "left": e.pageX, "top": posY});
});



c_DE.mouseout(function (){
    clearTimeout(c_DE);

    c_DE=setTimeout(function(){
        $('#preview_DE').css({ "visibility": "hidden"});
        console.log("Olleh !");
    }, 500);

    $('#preview_DE').mouseenter(function (e){
        clearTimeout(c_DE);
        $('#preview_DE').css({ "visibility": "visible"});
        console.log("Hello HOLY WORK !");
    });
});




c_DE.mouseout(function (){
    clearTimeout(c_DE);
    c_DE=setTimeout(function(){
        $('#preview_DE').css({ "visibility": "hidden"});
        console.log("Olleh !");
    }, 500);

});


//==================================================================================

/*var country_BF = document.getElementById('c_BF');

country_BF.addEventListener('mouseenter', function() {
    console.log('Salut');
});*/
