/**
 * @license jquery.zoom-svg.js v1.0
 * Updated: Mon Feb 20 2017
 * First Release
 * Copyright (c) Laurent SOUEF Consulting
 * Released under the MIT license
 * https://github.com/LaurentSouefConsulting/jquery.zoom-svg/blob/master/MIT-License.txt
 */
$.fn.zoomSvg = function(options) 
{
	// Merge with default options
	var options = $.extend({
		step :  5,
	}, options);
	// Return This to implement Chaining Design Pattern
	return this.each(function(){
		// Elements
		var svg = $(this);
		var div = $(this).parent();
		var zoomIn  = $(div).find(".zoom-svg-zoom-in");
		var zoomOut = $(div).find(".zoom-svg-zoom-out");
		var zoomRst = $(div).find(".zoom-svg-zoom-rst");

		// ViewBox Ratio
		var viewBox = $(svg).prop("viewBox");
		var viewRatio = viewBox.baseVal.height / viewBox.baseVal.width;

		// Params
		var step = options.step;
		var zoom = 100;
		var width  = $(svg).width();								//w

		// Fix div size
		var height = Math.round(width * viewRatio);					//h
		$(div).css("width", width); /* Takes the width of the svg, same for the height */
		$(div).css("height", height);

		// Drag
		$(svg).draggable(); /* Allow the svg to move */

		// Zooms
		/* Add a condition to avoid infinite zoom */
		$(zoomIn).click(function() {
            if(zoom+step <=350) {
                zoom += step;
            }

			scale();
		});

		$(zoomOut).click(function() {
            if(zoom-step >=25) {
                zoom -= step;
            }
			scale();
		});

		$(zoomRst).click(function() {
			zoom = 100; /* zoom retake its initial value */
			$(svg).css({"top": "0px", "left": "0px"}); /* take the map back of its initial position*/
			scale();
		});

		// Resize
		$(window).resize(function() {
			$(div).css("width", "100%");
			$(div).css("height", "auto");
			width  = $(div).width();
			height = Math.round(width * viewRatio);
			$(div).css("height", height);
		});

		// Wheel
		//No need of this features, inconvenient for some laptop
		/*
		$(div).mousewheel(function(event) {
			//console.log("Wheel", event.deltaY);
			if (event.deltaY > 0)
				$(zoomIn).trigger("click");
			else
				$(zoomOut).trigger("click");
		});
		*/


		// Functions
		var scale = function() {

            $(svg).css("width", zoom + "%");
            $(svg).css("height", zoom + "%");

            var zoom_1 = (zoom / 100) - 1;


            var delta_top = Math.round((zoom_1 * height)/2);
            var delta_left = Math.round((zoom_1 * width)/2);

            var div_pos = $(div).offset();

            var new_top = div_pos.top - delta_top;
            var new_left = div_pos.left - delta_left;

			$(svg).offset({"top" : new_top, "left" : new_left});



		};

        window.onresize = function () {
            var map_frame = $("#map_frame");
            $(map_frame).css("width", "70%");
			$(map_frame).css("height", "auto");
        };


	})
};
