export default {
  add(item) {
    return new Promise(resolve => {
      if (!Vue.cookie.has('shopping-cart'))
        Vue.cookie.set('shopping-cart', []);

      let shoppingCart = Vue.cookie.get('shopping-cart');

      shoppingCart.push(item);

      Vue.cookie.set('shopping-cart', shoppingCart);

      Vue.flashMessage.show('Товар додано', 2);

      resolve(true);
    });
  },

  update(key, newItem) {
    return new Promise(resolve => {
      key = parseInt(key);

      this.has(key)
          .then(res => {
            Vue.cookie.set('shopping-cart', Vue.cookie.get('shopping-cart')[key](newItem));

            resolve(true);
          })
          .catch(err => {
            Vue.flashMessage.show('Товар не існує в корзині', 3);
          });

    });
  },

  get(key) {
    return new Promise(resolve => {
      resolve(Vue.cookie.get('shopping-cart')[key]);
    });
  },

  has(key) {
    return new Promise((resolve, reject) => {
      Vue.cookie.get('shopping-cart').includes(key) ? resolve(true) : reject(false);
    });
  },

  list() {
    return axios({
      method: 'get',
      url: '/shopping-cart',
      headers: {'laravel_session': cookieService.get('laravel_session')}
    });
  },

  remove(key) {
    return new Promise(resolve => {

      let shoppingCart = Vue.cookie.get('shopping-cart');

      shoppingCart.splice(key, 1);

      Vue.cookie.set('shopping-cart', shoppingCart);


      Vue.flashMessage.show('Товар видалено', 2);
      resolve(true);
    });
  },

  clear() {
    return new Promise(resolve => {
      Vue.cookie.set('shopping-cart', []);

      resolve(true);
    });
  },
}
