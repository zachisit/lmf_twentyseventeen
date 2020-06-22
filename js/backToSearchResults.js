/**
 * File mobileMenu.js
 *
 * Shows 'back to search results' button if user
 *  landed on single product from a search result
 *
 * @dependecies javascript
 * @version 1.1.1
 * @package lmf
 *
 */

document.addEventListener("DOMContentLoaded", function(){
    const doesContainSearchQuery = document.referrer.includes('?s=');
    const siteMain = document.getElementsByClassName('site-main')[0];

    if (doesContainSearchQuery) {
        const backButton = document.createElement('a');
        backButton.classList.add('button','backToSearch');
        backButton.innerText = 'Back To Search Results';
        backButton.setAttribute('href',document.referrer);
        siteMain.prepend(backButton);
    }
});