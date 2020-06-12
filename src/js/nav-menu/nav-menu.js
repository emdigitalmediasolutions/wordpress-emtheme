(function() {
    'use strict';

    var menuBreakpoint = 1024;

    var resizeHandle = function() {
        if (!document.querySelector('.emtheme-menu')) {
            return;
        }
        var width = window.innerWidth;

        if (width >= menuBreakpoint) {
            // Force the menu to be displayed
            document.querySelector('.emtheme-menu').style.marginTop = '';
            return;
        }
    };

    var menuToggle = function() {
        if (!document.querySelector('.emtheme-menu')) {
            return;
        }

        var marginTop = document.querySelector('.emtheme-menu').style.marginTop === '' ? '0' : '';
        document.querySelector('.emtheme-menu').style.marginTop = marginTop;
    };

    window.addEventListener('resize', resizeHandle);

    var menuToggleTimer = setInterval(function() {
        if (!document.querySelector('.nav-menu-toggle')) {
            return;
        }

        document.querySelector('.nav-menu-toggle').addEventListener('click', menuToggle);
        clearInterval(menuToggleTimer);
    }, 50);
})();