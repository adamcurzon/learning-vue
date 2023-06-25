import { createRouter, createWebHashHistory } from 'vue-router';
import HomePage from './components/page/Home.vue';
import NewPage from './components/page/New.vue';

const routes = [
    { path: '/', component: HomePage },
    { path: '/new', component: NewPage },
]
  
const router = createRouter({
    history: createWebHashHistory(process.env.BASE_URL),
    routes,
})

export default router;