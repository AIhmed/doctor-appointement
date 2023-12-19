import './bootstrap';

import { createApp } from 'vue/dist/vue.esm-bundler';
import RootComponent from './components/root.vue';
import HomeComponent from './components/home.vue';

const app = createApp({});
app.component('root-component', RootComponent);
app.component('home-component', HomeComponent);
app.mount('#root');
