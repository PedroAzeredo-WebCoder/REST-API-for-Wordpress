require('jquery');
require('bootstrap');
require('@fortawesome/fontawesome-free');
require('slick-carousel')
require('jquery-mask-plugin/dist/jquery.mask.min')

window._ = require('lodash');

try {
    window.Popper = require('@popperjs/core').default;
    window.$ = window.jQuery = require('jquery');
} catch (e) {}

jQuery(function () {
    mainHeight()
    themeColor()
    $(window).scroll(function () {
        mainHeight()
        themeColor()
    })

    $(window).on('resize', function () {
        mainHeight()
        themeColor()
    })

    $(window).ready(function () {
        mainHeight()
        themeColor()
    })

    $(window).on('load', function () {
        mainHeight()
        themeColor()
    })

    function mainHeight() {
        $('header').next().not($('.behind')).css('margin-top', $('header').outerHeight());
    }

    function themeColor() {
        const themeColor = $('[name="theme-color"], [name="msapplication-navbutton-color"]');
        const value = getComputedStyle(document.documentElement).getPropertyValue('--bs-primary');
        themeColor.attr('content', value);
    }

    //Oculta Copyright NitroPack Plugin
    document.addEventListener("DOMContentLoaded", function () {
        let divc = document.querySelectorAll('div[style]');
        for (let i = 0, len = divc.length; i < len; i++) {

            let actdisplay = window.getComputedStyle(divc[i], null).display;
            let actclear = window.getComputedStyle(divc[i], null).clear;

            if (actdisplay == 'block' && actclear == 'both') {
                divc[i].remove();
            }
        }
    });
});