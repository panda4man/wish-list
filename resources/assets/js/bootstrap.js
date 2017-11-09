import Vue from 'vue';
import Axios from 'axios'
import jQuery from 'jquery';

Vue.prototype.$http = Axios;
Vue.prototype.$http.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.$ = window.jQuery = jQuery;

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    Vue.prototype.$http.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}
