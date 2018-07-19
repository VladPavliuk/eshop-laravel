//
// /**
//  * First we will load all of this project's JavaScript dependencies which
//  * includes Vue and other libraries. It is a great starting point when
//  * building robust, powerful web applications using Vue and Laravel.
//  */
//
// require('./bootstrap');
//
// window.Vue = require('vue');
//
// /**
//  * Next, we will create a fresh Vue application instance and attach it to
//  * the page. Then, you may begin adding components to this application
//  * or customize the JavaScript scaffolding to fit your unique needs.
//  */
//
// Vue.component('product-item', require('./components/single-product/SingleProduct'));
//
// const app = new Vue({
//     el: '#app',
// });

window.$ = window.jQuery = require('jquery');
window.axios = require('axios');

let helpers = {
    generateRandomString() {
        let text = "";
        let possible = "abcdefghijklmnopqrstuvwxyz0123456789";

        for (let i = 0; i < 15; i++)
            text += possible.charAt(Math.floor(Math.random() * possible.length));

        return text;
    }
};

let serverRoutes = {
    discounts: {
        getActiveDiscounts() {
            return {
                method: 'get',
                url: '/api/get-active-discounts'
            }
        },
        getInActiveDiscounts() {
            return {
                method: 'get',
                url: '/api/get-in-active-discounts'
            }
        }
    },
    products: {
        getImages(id) {
            return {
                method: 'get',
                url: '/api/get-products-images/' + id
            }
        }
    },
    shoppingCart: {
        getAllShoppingCartInfo() {
            return {
                method: 'get',
                url: '/api/get-all-shopping-cart-info'
            }
        },
        getTotalPriceWithoutPrice() {
            return {
                method: 'get',
                url: '/api/get-total-price-without-discount'
            }
        },
        getTotalPrice() {
            return {
                method: 'get',
                url: '/api/get-total-price'
            }
        },
        getTotalAmount() {
            return {
                method: 'get',
                url: '/api/get-total-amount'
            }
        },
        add(data) {
            return {
                method: 'post',
                url: '/api/shopping-cart',
                data
            }
        },
        list() {
            return {
                method: 'get',
                url: '/api/shopping-cart'
            }
        },
        single(id) {
            return {
                method: 'get',
                url: '/api/shopping-cart/' + id
            }
        },
        update(id, data) {
            return {
                method: 'put',
                url: '/api/shopping-cart/' + id,
                data
            }
        },
        delete(id) {
            return {
                method: 'delete',
                url: '/api/shopping-cart/' + id
            }
        }
    }
};

let photosCarousel = {
    actions: {
        getImages(id) {
            return new Promise((resolve, reject) => {
                resolve(axios(serverRoutes.products.getImages(id)));
            })
        }
    },
    rendering: {
        renderLabel: function (label) {
            let productsPhotosCarouselLabelElement = document.getElementById('products-photos-carousel-label');

            productsPhotosCarouselLabelElement.innerHTML = label;
        },
        renderImages: function (images) {
            let productsPhotosListElement = document.getElementById('products-photos-list');
            productsPhotosListElement.innerHTML = '';

            for (var i = 0; i < images.length; i++) {
                productsPhotosListElement.innerHTML += `
                    <div class="carousel-item ${i === 0 ? 'active' : ''}">
                        <img class="d-block w-100" src="${images[i]['image_path']}">
                    </div>
                `;
            }
        }
    }
};

let discounts = {
    actions: {
        getActiveDiscounts() {
            return new Promise((resolve, reject) => {
                resolve(axios(serverRoutes.discounts.getActiveDiscounts()));
            })
        },
        getInActiveDiscounts() {
            return new Promise((resolve, reject) => {
                resolve(axios(serverRoutes.discounts.getInActiveDiscounts()));
            })
        },
    },
    rendering: {
        renderActiveDiscounts(discountsList) {
            for (let i = 0; i < discountsList.length; i++) {
                $('#discount-id-' + discountsList[i].id).addClass('list-group-item-success');
                $('#discount-id-icon-' + discountsList[i].id).removeClass('invisible');
            }
        },
        renderInActiveDiscounts(discountsList) {
            for (let i = 0; i < discountsList.length; i++) {
                $('#discount-id-' + discountsList[i].id).removeClass('list-group-item-success');
                $('#discount-id-icon-' + discountsList[i].id).addClass('invisible');
            }
        }
    }
};

let loadingBar = {
    checkQueue() {
        if(amountOfQueuedShoppingCartProducts > 0) {
            this.show();
        } else {
            this.hide();
        }
    },
    show() {
        $('#data-shopping-cart-stub').removeClass('invisible');
        $('#data-shopping-cart-stub-header').removeClass('invisible');
        $('*[data-product-details-link]').hide();
    },
    hide() {
        $('#data-shopping-cart-stub').addClass('invisible');
        $('#data-shopping-cart-stub-header').addClass('invisible');
        $('*[data-product-details-link]').show();
    }
};

let shoppingCart = {
    shoppingCartList: [],
    actions: {

        setShoppingCartList(list) {
            shoppingCart.shoppingCartList = list;
        },

        getProductPriceSum(productId) {
            for (let item in shoppingCart.shoppingCartList) {
                if (item['id'] === productId) {
                    return item['id'] * item['amount'];
                }
            }
        },

        getAllShoppingCartInfo() {
            return new Promise((resolve, reject) => {
                resolve(axios(serverRoutes.shoppingCart.getAllShoppingCartInfo()));
            });
        },
        getTotalPriceWithoutPrice() {
            return new Promise((resolve, reject) => {
                resolve(axios(serverRoutes.shoppingCart.getTotalPriceWithoutPrice()));
            });
        },

        getTotalPrice() {
            return new Promise((resolve, reject) => {
                resolve(axios(serverRoutes.shoppingCart.getTotalPrice()));
            });
        },

        getTotalAmount() {
            return new Promise((resolve, reject) => {
                resolve(axios(serverRoutes.shoppingCart.getTotalAmount()));
            });
        },

        has(id) {
            return new Promise((resolve => {
                this.list()
                    .then(shoppingCart => {
                        shoppingCart = shoppingCart.data;

                        for (let i = 0; i < shoppingCart.length; i++)
                            if (shoppingCart[i].id === id)
                                resolve(true);

                        resolve(false);
                    });
            }))
        },
        async add(data) {
            return await axios(serverRoutes.shoppingCart.add({
                id: data.id,
                title: data.title,
                hasDiscount: data.hasDiscount,
                amount: data.amount,
                price: data.price
            }));
        },
        delete(productId) {
            return new Promise(resolve => {
                resolve(axios(serverRoutes.shoppingCart.delete(productId)));
            });
        },
        list() {
            return axios(serverRoutes.shoppingCart.list());
        }
    },
    rendering: {
        setProductsPriceSum(shoppingCart) {
            for (let product of shoppingCart) {
                $(`*[data-product-price-sum=${product['id']}]`).html(`
                   <span>${(product['price'] * product['amount']).toFixed(2)}</span>
                `);
            }
        },
        showBottomInfoBlock() {
            $('[data-shopping-cart-info]').css('display', 'block');
        },

        hideBottomInfoBlock() {
            $('[data-shopping-cart-info]').css('display', 'none');
        },

        setTotalPrice(price) {
            if (price > 0) {
                $('[data-shopping-cart-total-sum]').html(price);
                this.showBottomInfoBlock();
            } else
                this.hideBottomInfoBlock();
        },

        setTotalPriceWithoutPrice(priceWithoutDiscount, price) {
            let priceWithoutDiscountElement = $('#price-without-discounts');

            if (priceWithoutDiscount !== price) {
                priceWithoutDiscountElement.text('(' + priceWithoutDiscount + ' грн.)');
                priceWithoutDiscountElement.removeClass('invisible');
            } else {
                priceWithoutDiscountElement.addClass('invisible');
            }
        },

        setTotalAmount(amount) {
            if (amount > 0) {
                $('[data-shopping-cart-total-amount]').html(amount);
                this.showBottomInfoBlock();
            } else
                this.hideBottomInfoBlock();
        },

        update(response) {
            this.setTotalPrice(response['data']['total-price']);
            this.setTotalAmount(response['data']['total-amount']);
            this.setTotalPriceWithoutPrice(response['data']['total-price-without-discounts'], response['data']['total-price']);
            this.setProductsPriceSum(response['data']['shopping-cart']);
            discounts.rendering.renderActiveDiscounts(response['data']['active-discounts']);
            discounts.rendering.renderInActiveDiscounts(response['data']['in-active-discounts'])
        }
    }
};

let amountOfQueuedShoppingCartProducts = 0;

$(document).ready(function () {

    shoppingCart.actions.getAllShoppingCartInfo()
        .then(res => {
            shoppingCart.rendering.update(res);
        });

    // $('#on-app-loading').addClass('invisible');
    // $('#app').removeClass('invisible');

    $('.error-alert-wrapper').on('click', function () {
        $(this).addClass('invisible');
    });

    // queueOfShoppingCartManipulations.commitRequests();
    loadingBar.checkQueue();

    //> Scroll to menu position
    window.scroll(0, 700);
    //<

    //> Set default value to products.
    shoppingCart.actions.list()
        .then(response => {
            for (let i = 0; i < response.data.length; i++) {
                $(`input[data-product-id="${response.data[i].id}"]`).val(response.data[i].amount);
            }
        });
    //<


});

$('input[data-product]').on('input', function (event) {
    let amount = parseInt(event.target.value) || 0;
    let minAmount = event.target.hasAttribute('data-min-number') ? event.target.getAttribute('data-min-number') : 0;

    amount = minAmount < amount ? amount : minAmount;

    amount = amount > 9999 ? 9999 : amount;

    if (amount >= minAmount) {
        // let queueId = helpers.generateRandomString();

        let data = {
            // queue_id: queueId,
            id: parseInt(event.target.attributes['data-product-id'].nodeValue),
            title: event.target.attributes['data-product-title'].nodeValue,
            amount,
            price: parseFloat(event.target.attributes['data-product-price'].nodeValue)
        };

        // queueOfShoppingCartManipulations.addToQueue(data);

        amountOfQueuedShoppingCartProducts++;
        loadingBar.checkQueue();
        shoppingCart.actions.add(data)
            .then(res => {
                amountOfQueuedShoppingCartProducts--;
                loadingBar.checkQueue();
                shoppingCart.rendering.update(res);
                // queueOfShoppingCartManipulations.removeFromQueue(queueId);
            });
    }

    event.target.value = amount;
});

$('*[product-photos-carousel-trigger]').on('click', function () {
    jQuery.noConflict();
    let productId = Number($(this).attr('product-photos-carousel-trigger'));

    photosCarousel.actions.getImages(productId)
        .then(res => {
            photosCarousel.rendering.renderLabel(res.data.title);
            photosCarousel.rendering.renderImages(res.data.photos);
            $('#product-photos-carousel').modal('show');
        });
});

$('*[data-remove-product-id]').on('click', function () {
    let productId = Number($(this).attr('data-remove-product-id'));

    shoppingCart.actions.delete(productId)
        .then(res => {

            if (res['data'] && res['data']['shopping-cart'].length === 0) {
                window.location = "/";
            } else {
                $(`*[data-shopping-cart-row=${productId}]`).remove();
                shoppingCart.rendering.update(res);
            }
        });
});


