import { createRouter, createWebHistory } from 'vue-router';
import HomePage from './components/page/HomePage.vue';
import NewPage from './components/page/NewPage.vue';

const routes = [
    { path: '/', component: HomePage },
    { path: '/new', component: NewPage },
]
  
const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes,
})

export default router;