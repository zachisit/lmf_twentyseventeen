/**
 * File mobileCatMenu.js
 *
 * Change category selection to select dropdown only for mobile
 *
 * @dependecies javascript
 * @version 1.1.1
 * @package lmf
 *
 */

document.addEventListener("DOMContentLoaded", function(){
    console.log('cat menu handler')

    //window.addEventListener("resize", displayWindowSize);

    if (document.documentElement.clientWidth < 500) {
        if (document.getElementsByClassName('product-categories')[0]) {
            console.log('-- has cat menu')
            const catMenu = document.getElementsByClassName('product-categories')[0];
            //let catArray = catMenu.querySelectorAll('li').forEach((item) => {console.log(item)})
            const catArray = [];
            catMenu.querySelectorAll('li').forEach((item) => {
                //console.log(item)
                const aLink = item.querySelector('a');
                //console.log(aLink)
                catArray.push({'link':aLink.getAttribute("href"),'title':aLink.innerText})
            })
            //console.log(catArray)

            const select = document.createElement('select');

            catArray.forEach((value, index) => {
                const option = document.createElement('option');
                //console.log(value.title)
                option.setAttribute('title',value.title)
                option.setAttribute('text',value.title)
                select.appendChild(option)
            })
            catMenu.parentNode.insertBefore(select, catMenu.nextSibling);

            catMenu.style.display = 'none';
        }
    }

});