import Home from '../views/HomeView.vue';
import WholeSale from '../views/WholesaleView.vue';
import ContactUs from '../views/ContactUsView.vue';
import AboutUs from '../views/AboutUsView.vue';
import Production from '../views/ProductionView.vue';
import WiresCables from './components/WiresCables.vue';
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
			}
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
  routes
})

export default router