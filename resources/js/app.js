import './bootstrap';

import { createApp } from 'vue';
import App from './components/App.vue';
import Products from './components/Products.vue';
import Dados from './components/Dados.vue';

const app = createApp();

app.component('app', App);
app.component('products', Products);
app.component('dados', Dados);
app.mount('#app');

