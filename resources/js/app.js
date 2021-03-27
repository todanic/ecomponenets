/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');
import Vue from "vue";
import Vuetify from "vuetify";
import routes from "./routes";
import App from "./App.vue";
import AOS from "aos";
import store from "./store/language.js";
import i18n from "./i18n";

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.use(Vuetify);
// Vue.use(Lang, {
//   locale: store.state.language,
// 	fallback: 'en',
// });

Vue.component(
    "header-component",
    require("./components/sections/HeaderComponent.vue").default
);
Vue.component(
    "splash",
    require("./components/sections/SplashComponent.vue").default
);
Vue.component("why-us", require("./components/sections/WhyUs.vue").default);
Vue.component(
    "wire-and-harness",
    require("./components/sections/WireAndHarnessComponent.vue").default
);
Vue.component(
    "base-miny-gallery",
    require("./components/sections/GalleryComponent.vue").default
);
Vue.component(
    "home-catagories",
    require("./components/sections/HomeCategories.vue").default
);
Vue.component(
    "prefooter",
    require("./components/sections/PrefooterComponent.vue").default
);
Vue.component(
    "footer-component",
    require("./components/sections/FooterComponent.vue").default
);
Vue.component(
    "home-contact-component",
    require("./components/sections/HomeContactComponent.vue").default
);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    created() {
        AOS.init({
            once: true
        });
    },
    vuetify: new Vuetify({
        theme: {
            themes: {
                light: {
                    primary: "#fff"
                }
            }
        }
    }),
    router: routes,
    i18n,
    store: store,
    render: h => h(App)
}).$mount("#app");
