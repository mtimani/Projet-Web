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
		$(div).css("width", width);
		$(div).css("height", height);

		// Drag
		$(svg).draggable();

		// Zooms
		$(zoomIn).click(function() {
            if(zoom+step <=200) {
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
			zoom = 100;
			$(svg).css({"top": "0px", "left": "0px"});
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
		$(div).mousewheel(function(event) {
			//console.log("Wheel", event.deltaY);
			if (event.deltaY > 0)
				$(zoomIn).trigger("click");
			else
				$(zoomOut).trigger("click");			
		});
        var svg_width = $(svg).css("width");
        var svg_height = $(svg).css("height");
		console.log("initially svg_size " + svg_width + " " + svg_height);

		// Functions
		var scale = function() {
			$(svg).css("width", zoom + "%");
			$(svg).css("height", zoom + "%");

            svg_width = $(svg).css("width");
            svg_height = $(svg).css("height");

            var zoom_1 = (zoom / 100) - 1;

            console.log("after zoom svg_size " + svg_width + " " + svg_height);



            var delta_top = Math.round((zoom_1 * height)/2);
            var delta_left = Math.round((zoom_1 * width)/2);

            console.log("delta => " + delta_left + " " + delta_top);

            var div_pos = $(div).offset();

            console.log("initially  div&svg_pos " + div_pos.left + " " + div_pos.top);

            var new_top = div_pos.top - delta_top;
            var new_left = div_pos.left - delta_left;

			$(svg).offset({"top" : new_top, "left" : new_left});

            console.log("after zoom  div&svg_pos " + new_left+ " " + new_top);
			//alert(width + " " + height);

			//alert(new_top+ " " + new_left);
			//alert(svg_width+ " " +svg_height);
           // $(svg).css({"top": new_top, "left": new_left});

		};

	})
};
