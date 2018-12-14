/*$('.preview_close').click( function (){
    $('.preview').css({ "visibility": "hidden"});

});*/

$.fn.previewedBy = function(preview, options)
{
    console.log("Hello !");
    return this.each(function() {
        console.log("Hello !");
        var launch_prev = $(this);
        var prev = $(preview);
        console.log("Hello !");
        this.mouseenter(function (e) {
            console.log("Hello !");
            clearTimeout(launch_prev);
            launch_prev = setTimeout(function () {
                //var posY = e.pageY - 300; //300 is 3/4 of the preview's height
                console.log("Hello !");
                // prev.css({"visibility": "visible", "left": e.pageX, "top": posY});
                prev.css({"visibility": "visible", "left": e.pageX, "top": e.pageY});
            }, 500);

        });

        launch_prev.click(function (e) {
            var posY = e.pageY;
            console.log("Hello !");
            //prev.css({"visibility": "visible", "left": e.pageX, "top": posY});
            prev.css({"visibility": "visible", "left": e.pageX, "top": e.pageY});
        });


        launch_prev.mouseout(function () {
            clearTimeout(launch_prev);

            launch_prev = setTimeout(function () {
                prev.css({"visibility": "hidden"});
                console.log("Olleh !");
            }, 500);

            prev.mouseenter(function (e) {
                clearTimeout(launch_prev);
                prev.css({"visibility": "visible"});
                console.log("Hello HOLY WORK !");
            });
        });


        launch_prev.mouseout(function () {
            clearTimeout(launch_prev);
            launch_prev = setTimeout(function () {
                prev.css({"visibility": "hidden"});
                console.log("Olleh !");
            }, 500);

        });
    })


};

/*var country_BF = document.getElementById('launch_prev');

country_BF.addEventListener('mouseenter', function() {
    console.log('Salut');
});*/
