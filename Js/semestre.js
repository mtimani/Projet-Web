(function Image_Carousel() {

    function Slideshow( element ) {
        this.el = document.querySelector( element );
        this.init();
    }

    Slideshow.prototype = {
        init: function() {
            this.wrapper = this.el.querySelector( ".slider-wrapper" );
            this.slides = this.el.querySelectorAll( ".slide" );
      
            this.index = 0;
            this.total = this.slides.length;
            this.timer = null;

            this.action();
            this.stopStart();
        },
        _slideTo: function( slide ) {
            var currentSlide = this.slides[slide];
            currentSlide.style.opacity = 1;

            for( var i = 0; i < this.slides.length; i++ ) {
                var slide = this.slides[i];
                if( slide !== currentSlide ) {
                    slide.style.opacity = 0;
                }
            }
        },
        action: function() {
            var self = this;
            self.timer = setInterval(function() {
                self.index++;
                if( self.index === self.slides.length ) {
                    self.index = 0;
                }
                self._slideTo( self.index );

            }, 3000);
        },
        stopStart: function() {
            var self = this;
            self.el.addEventListener( "mouseover", function() {
                clearInterval( self.timer );
                self.timer = null;

            }, false);
            self.el.addEventListener( "mouseout", function() {
                self.action();

            }, false);
        }


    };

    document.addEventListener( "DOMContentLoaded", function() {

        var slider = new Slideshow( "#main-slider" );

    });


})Image_Carousel();


function showText_Mic() {
    document.getElementById('Info_Imacs').style.display = "none";
    document.getElementById('Info_Icbe').style.display = "none";
    document.getElementById('Info_Ic').style.display = "none";
    document.getElementById('Info_Mic').style.display = "block";
}
function showText_Imacs() {
    document.getElementById('Info_Icbe').style.display = "none";
    document.getElementById('Info_Ic').style.display = "none";
    document.getElementById('Info_Mic').style.display = "none";
    document.getElementById('Info_Imacs').style.display = "block";
}
function showText_Icbe() {
    document.getElementById('Info_Imacs').style.display = "none";
    document.getElementById('Info_Ic').style.display = "none";
    document.getElementById('Info_Mic').style.display = "none";
    document.getElementById('Info_Icbe').style.display = "block";
}
function showText_Ic() {
    document.getElementById('Info_Imacs').style.display = "none";
    document.getElementById('Info_Icbe').style.display = "none";
    document.getElementById('Info_Mic').style.display = "none";
    document.getElementById('Info_Ic').style.display = "block";
}