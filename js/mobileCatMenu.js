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

    if (document.documentElement.clientWidth < 673) {
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
            select.classList.add('category-dropdown');

            catArray.forEach((value, index) => {
                const option = document.createElement('option');
                //console.log(value.title)
                //console.log(value)
                option.value = value.title;
                option.text = value.title;
                option.setAttribute('data-linkto',value.link);
                select.appendChild(option);
            })
            catMenu.parentNode.insertBefore(select, catMenu.nextSibling);
            document.getElementsByClassName('category-dropdown')[0].addEventListener('change',(event)=>selectChange(event));

            catMenu.style.display = 'none';
        }
    }

    function selectChange(event) {
        if (event.target.options[event.target.selectedIndex].dataset.linkto) {
            window.location.replace(event.target.options[event.target.selectedIndex].dataset.linkto);
        }
    }

});