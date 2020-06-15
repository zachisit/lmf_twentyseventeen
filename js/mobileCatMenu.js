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
    const catMenu = document.getElementsByClassName('product-categories')[0];
    const catArray = [];

    catMenuHandler();
    window.addEventListener("resize", catMenuHandler);
    console.log('hi')

    function catMenuHandler() {
        if (document.documentElement.clientWidth < 770) {
            if (document.getElementsByClassName('product-categories')[0]) {
                if (!document.getElementsByClassName('category-dropdown')[0]) {
                    catMenu.querySelectorAll('li').forEach((item) => {
                        const aLink = item.querySelector('a');
                        catArray.push({'link':aLink.getAttribute("href"),'title':aLink.innerText})
                    })

                    const select = document.createElement('select');
                    select.classList.add('category-dropdown');

                    catArray.forEach((value, index) => {
                        const option = document.createElement('option');
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
        } else {
            catMenu.style.display = 'block';
            if (document.getElementsByClassName('category-dropdown')[0]) {
                document.getElementsByClassName('category-dropdown')[0].remove();
            }
        }
    }

    function selectChange(event) {
        if (event.target.options[event.target.selectedIndex].dataset.linkto) {
            window.location.replace(event.target.options[event.target.selectedIndex].dataset.linkto);
        }
    }

});