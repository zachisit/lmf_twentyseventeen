/**
 * File mobileMenu.js
 *
 * Trigger, open, close logic for mobile only menu
 *
 * @dependecies javascript
 * @version 1.1.1
 * @package lmf
 *
 */

document.addEventListener("DOMContentLoaded", function(){
    const menuTrigger = document.getElementsByClassName('mobileMenuTrigger')[0];
    const mobileMenu = document.getElementsByClassName('mobile-menu')[0];

    menuTrigger.addEventListener('click',menuHandler);
    function menuHandler() {
        if (mobileMenu.classList.contains('active')) {
            mobileMenu.classList.remove('active');
            menuTrigger.classList.remove('active');
        } else {
            mobileMenu.classList.add('active');
            menuTrigger.classList.add('active');
        }
    }
});