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
    const billingCountryInput = $('#billing_country');
    const shippingCountryInput = $('#shipping_country');
    const shippingAddressSection = $('.shipping_address');
    const customerDetailsSection = document.getElementById('customer_details');
    let alertMessage = null;
    let createdPopup = null;

    callGenericBackend()
        .then((res) => {
            if (res.status === 200 && res.msg.show_alert === 'true') {
                alertMessage = res.msg.alert_message;

                inputHandlerInit();

                if (shippingAddressSection.is(':visible')) {
                    if (!isValueUSA(shippingCountryInput.val())) {
                        showPopup();
                    }
                } else if (billingCountryInput.val() !== 'US') {
                    showPopup();
                }
            }
        });

    function inputHandlerInit() {
        billingCountryInput.on("select2:select", function(e) {
            shippingHandler();
        });
        shippingCountryInput.on("select2:select", function(e) {
            shippingHandler();
        });

        $('#ship-to-different-address').click(function(){
            setTimeout(function(){
                if (shippingAddressSection.is(':visible')) {
                    if (!isValueUSA(shippingCountryInput.val())) {
                        showPopup();
                    } else {
                        hidePopup();
                    }
                } else {
                    if (!isValueUSA(billingCountryInput.val())) {
                        showPopup();
                    } else {
                        hidePopup();
                    }
                }
            }, 800);
        })

    }
    function buildPopup(message) {
        const contentMessage = (message)?message:alertMessage;
        const container = document.createElement('div');
        const containerHeader = document.createElement('h3');
        const containerMessage = document.createElement('p');

        container.classList.add('international-shipping-alert-container');

        containerHeader.innerText = 'Attention International Users';

        containerMessage.innerText = contentMessage;
        container.appendChild(containerHeader);
        container.appendChild(containerMessage);
        customerDetailsSection.parentNode.insertBefore(container, customerDetailsSection.nextSibling);
        createdPopup = document.getElementsByClassName('international-shipping-alert-container')[0];
    }
    function shippingHandler() {
        if (shippingAddressSection.is(':visible')) {
            if (!isValueUSA(shippingCountryInput.val())) {
                showPopup();
            } else {
                hidePopup();
            }
        } else {
            if (!isValueUSA(billingCountryInput.val())) {
                showPopup();
            } else {
                hidePopup();
            }
        }
    }

    function isValueUSA(value) {
        return (value === 'US');
    }

    function showPopup() {
        if (!createdPopup) {
            buildPopup()
        } else {
            createdPopup.style.display = 'block';
        }
    }
    function hidePopup() {
        createdPopup.style.display = 'none';
    }

    function callGenericBackend() {
        return new Promise((resolve,reject)=>{
            jQuery.ajax({
                type:'post',
                async: true,
                url:myAjax.ajaxurl,
                data : {action: "checkout_international_alert"},
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
                        reject(data);
                    }
                }
            })
        })
    }
});