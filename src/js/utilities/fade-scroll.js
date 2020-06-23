// This utility takes all element that have the class .fade-on-scroll and they are gradually faded in based on their document position
// and the current scroll position.

(function() {
    'use strict';

    var scrollPadding = '50';          // The number of pixels into the screen the element must be before the element starts to fade in
    var scrollComplete = '150';         // The number of pixels into the screen the element must be for the element to be at full opacity
    var className = '.fade-to-scroll';

    var scrollHandle = function() {
        var clientHeight = window.innerHeight;

        // Get all elements that match the class
        document.querySelectorAll(className).forEach(function(element) {
            // Get the top position of the element
            var rect = element.getBoundingClientRect();
            var distanceFromBottom = clientHeight - rect.y;

            if (distanceFromBottom < scrollPadding) {
                element.style.opacity = '0';
                return;
            }

            if (distanceFromBottom > scrollComplete) {
                element.style.opacity = '1';
                return;
            }

            var lerpVal = (distanceFromBottom - scrollPadding) / (scrollComplete - scrollPadding);
            element.style.opacity = lerpVal;
        });
    };

    window.addEventListener('scroll', scrollHandle);
    window.addEventListener('resize', scrollHandle);
})();