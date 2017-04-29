import VueRouter from 'vue-router';

let routes = [
	{
		path:'/about',
		component: require('./components/About.vue')
	},
	{
		path:'/login',
		component: require('./components/Login.vue')
	}
];

export default new VueRouter({
	routes,
});