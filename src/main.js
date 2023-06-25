import { createApp } from 'vue'
import App from './App.vue'

import NavMenu from './components/NavMenu.vue';

import router
 from './router'

createApp(App).use(router).mount('#app').component('NavMenu', NavMenu);
