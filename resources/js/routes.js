import Home from '../views/HomeView.vue';
import WholeSale from '../views/WholesaleView.vue';
import ContactUs from '../views/ContactUsView.vue';
import AboutUs from '../views/AboutUsView.vue';
import Production from '../views/ProductionView.vue';
import WiresCables from './components/WiresCables.vue';
import Connectors from './components/Connectors.vue';
import Hardware from './components/Hardware.vue';
import Led from './components/Led.vue';
import Pcbs from './components/Pcbs.vue';
import AdditionsForCables  from './components/AdditionsForCables.vue';
import VueRouter from 'vue-router';
import Vue from 'vue';

Vue.use(VueRouter);

export const routes = [
	{
		path:'/',
		component: Home,
		name: 'Home'
	},
	{
		path:'/wholesale',
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
		path:'/contact-us',
		component: ContactUs,
		name: 'ContactUs'
	},
	{
		path:'/production',
		component: Production,
		name: 'Production'
	},
	{
		path:'/about-us',
		component: AboutUs,
		name: 'AboutUs'
	},
];

const router = new VueRouter({
  mode: 'history',
	routes,
	scrollBehavior () {
    return { x: 0, y: 0 };
  }
})

export default router