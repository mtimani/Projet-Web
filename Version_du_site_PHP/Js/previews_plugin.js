/*$('.preview_close').click( function (){
    $('.preview').css({ "visibility": "hidden"});

});*/

$.fn.previewedBy = function(preview, options)
{

    return this.each(function() {

        var launch_prev = $(this);
        var prev = $(preview);

        $(launch_prev).mouseenter(function (e) {
            clearTimeout(launch_prev);
            launch_prev = setTimeout(function () {
                var posY = e.pageY - 300; //300 is 3/4 of the preview's height
                console.log("Hello !" + preview);
                $(prev).css({"visibility": "visible", "left": e.pageX, "top": posY});
            }, 500);

        });

        $(launch_prev).click(function (e) {
            var posY = e.pageY - 300;
            console.log("Hello !" + preview);
            $(prev).css({"visibility": "visible", "left": e.pageX, "top": posY});
        });


        $(launch_prev).mouseout(function () {
            clearTimeout(launch_prev);

            launch_prev = setTimeout(function () {
                $(prev).css({"visibility": "hidden"});
                console.log("Olleh ! " + preview);
            }, 500);

            $(prev).mouseenter(function () {
                clearTimeout(launch_prev);
                $(prev).css({"visibility": "visible"});
                console.log("Hello HOLY WORK !" + preview);
            });
        });


        $(launch_prev).mouseout(function () {
            clearTimeout(launch_prev);
            launch_prev = setTimeout(function () {
                $(prev).css({"visibility": "hidden"});
                console.log("Olleh !" + preview);
            }, 500);

        });

    })

};

/*var country_BF = document.getElementById('launch_prev');

country_BF.addEventListener('mouseenter', function() {
    console.log('Salut');
});*/
