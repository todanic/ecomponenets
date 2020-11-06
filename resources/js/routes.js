import Home from '../views/HomeView.vue';
import WholeSale from '../views/WholesaleView.vue';
import ContactUs from '../views/ContactUsView.vue';
import AboutUs from '../views/AboutUsView.vue';
import WiresAndHarnessView from '../views/WiresAndHarnessView.vue';
import Gallery from '../views/GalleryView.vue';
import WiresCables from './components/wholesale/WiresCables.vue';
import Connectors from './components/wholesale/Connectors.vue';
import Hardware from './components/wholesale/Hardware.vue';
import Led from './components/wholesale/Led.vue';
import Pcbs from './components/wholesale/Pcbs.vue';
import AdditionsForCables from './components/wholesale/AdditionsForCables.vue';
import VueRouter from 'vue-router';
import Vue from 'vue';

Vue.use(VueRouter);

export const routes = [
  {
    path: '/',
    component: Home,
    name: 'Home'
  },
  {
    path: '/wholesale',
    component: WholeSale,
    name: 'Wholesale',
    children: [
      {
        path: 'wires-cables',
        component: WiresCables
      },
      {
        path: 'connectors',
        component: Connectors
      },
      {
        path: 'pcbs',
        component: Pcbs
      },
      {
        path: 'led',
        component: Led
      },
      {
        path: 'cable-accessories',
        component: AdditionsForCables
      },
      {
        path: 'hardware',
        component: Hardware
      },
    ]
  },
  {
    path: '/contact-us',
    component: ContactUs,
    name: 'ContactUs'
  },
  {
    path: '/gallery',
    component: Gallery,
    name: 'GalleryView'
  },
  {
    path: '/wires-and-harness',
    component: WiresAndHarnessView,
    name: 'WiresAndHarnessView'
  },
  {
    path: '/about-us',
    component: AboutUs,
    name: 'AboutUs'
  },
];

const router = new VueRouter({
  mode: 'history',
  routes,
  scrollBehavior(to, from, savedPositio) {
    return {x: 0, y: 0};
  }
})

export default router