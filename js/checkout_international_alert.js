/**
 * File checkout_international_alert.js
 *
 * Alert logic if user selects a country other than USA
 *  from checkout dropdown
 *
 * @dependecies javascript
 * @version 1.1.1
 * @package lmf
 *
 */

jQuery(document).ready(function($){
    console.log('internalal alert')
    const billingCountryInput = $('#billing_country');
    const shippingCountryInput = $('#shipping_country');
    const shippingAddressSection = $('.shipping_address');
    const customerDetailsSection = document.getElementById('customer_details');

    billingCountryInput.on("select2:select", function(e) {
        shippingHandler();
    });
    shippingCountryInput.on("select2:select", function(e) {
        shippingHandler();
    });

    $('#ship-to-different-address').click(function(){
        console.log('clicked')
        if (shippingAddressSection.is(':visible')) {
            if (!isValueUSA(billingCountryInput.val())) {
                console.log('shipping NOT shown; billing value is not Usa - show popup')
                showPopup();
            }
        }
    })

    function shippingHandler() {
        if (shippingAddressSection.is(':visible')) {
            if (!isValueUSA(shippingCountryInput.val())) {
                console.log('shipping shown; value is not Usa - show popup')
                showPopup();
            }
        } else {
            console.log('nope')
            if (!isValueUSA(billingCountryInput.val())) {
                console.log('shipping NOT shown; billing value is not Usa - show popup')
                showPopup();
            }
        }
    }

    function isValueUSA(value) {
        return (value === 'US');
    }

    function showPopup() {
        if (document.getElementsByClassName('international-shipping-alert-container').length < 1) {
            console.log('container does not exist')

            //@TODO hide if value is then US

            callGenericBackend()
                .then((res)=>{
                    console.log(res)
                    if (res.status === 200 && res.msg.show_alert === 'true') {
                        console.log('sucvess ajax returned')
                        const container = document.createElement('div');
                        const containerHeader = document.createElement('h3');
                        const containerMessage = document.createElement('p');

                        container.classList.add('international-shipping-alert-container');

                        containerHeader.innerText = 'Attention International Users';

                        containerMessage.innerText = res.msg.alert_message;
                        container.appendChild(containerHeader);
                        container.appendChild(containerMessage);
                        customerDetailsSection.parentNode.insertBefore(container, customerDetailsSection.nextSibling);
                    }
                })
        }

    }

    function callGenericBackend(dataArray) {
        return new Promise((resolve,reject)=>{
            jQuery.ajax({
                type:'post',
                //processData:!(dataArray instanceof FormData),
                async: true,
                url:myAjax.ajaxurl,
                //data : {action: "my_user_vote", nonce: nonce},
                data : {action: "checkout_international_alert"},
                //contentType:false,
                dataType: 'json',
                error:(xhr)=>{
                    console.warn('ajax error');
                    console.log(xhr)
                    reject(xhr);
                    return false;
                },
                success:(data)=>{
                    console.log(data)
                    if (data.status === 200) {
                        resolve(data);
                    } else {
                        console.log('else')
                        reject(data);
                    }
                }
            })
        })
    }
});