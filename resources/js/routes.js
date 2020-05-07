import Home from '../views/HomeView.vue';
import VueRouter from 'vue-router';
import Vue from 'vue';

Vue.use(VueRouter);

export const routes = [
	{
		path:'/eomponents/public/test',
		component: Home,
		name: 'Home'
	},
];

const router = new VueRouter({
  mode: 'history',
  routes
})

export default router