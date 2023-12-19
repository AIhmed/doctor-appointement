import './bootstrap';

import { createApp } from 'vue/dist/vue.esm-bundler';
import HomeComponent from './components/home.vue';

const app = createApp({});
app.component('home-component', HomeComponent);
app.mount('#home');
