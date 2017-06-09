(function ($) {

    var bxSlider = jQuery.fn.bxSlider;
    var $window = $(window);

    jQuery.fn.bxSlider = function () {

        var slider = bxSlider.apply(this, arguments);

        if (!this.length || !arguments[0].mouseDrag) {
            return slider;
        }

        var posX;
        var $viewport = this.parents('.bx-viewport');

        $viewport
            .on('dragstart', dragHandler)
            .on('mousedown', mouseDownHandler);

        function dragHandler(e) {
            e.preventDefault();
        }

        function mouseDownHandler(e) {

            posX = e.pageX;

            $window.on('mousemove.bxSlider', mouseMoveHandler);
        }

        function mouseMoveHandler(e) {

            if (posX < e.pageX) {
                slider.goToPrevSlide();
            } else {
                slider.goToNextSlide();
            }

            $window.off('mousemove.bxSlider');
        }

        return slider;
    };

})(jQuery);