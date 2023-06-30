import { createRouter, createWebHistory } from 'vue-router';
import HomePage from './components/page/HomePage.vue';
import NewPage from './components/page/NewPage.vue';
import PDFPage from "@/components/page/PDFPage.vue";

const routes = [
    { path: '/', component: HomePage },
    { path: '/new', component: NewPage },
    { path: '/pdf', component: PDFPage }
]

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes,
})

export default router;