/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');
import Vue from 'vue';
import Vuetify from 'vuetify';
import routes  from './routes';
import App from './App.vue'

Vue.use(Vuetify);


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('header-component', 
    require('./components/Header.vue').default
);
Vue.component('splash', 
    require('./components/Splash.vue').default
);
Vue.component('home-catagories', 
    require('./components/HomeCategories.vue').default
);
Vue.component('prefooter', 
    require('./components/Prefooter.vue').default
);
Vue.component('footer-component', 
    require('./components/Footer.vue').default
);
Vue.component('home-contact-component', 
    require('./components/HomeContactComponent.vue').default
);
Vue.component('base-contact-component', 
    require('./components/BaseContactComponent.vue').default
);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    vuetify: new Vuetify(),
    router: routes,
    render: h => h(App)
}).$mount("#app");
