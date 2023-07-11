require('./bootstrap');
import { createApp } from 'vue';
import Test from './components/Test.vue';
import Nbrkids from './components/Nbrkids.vue';

const app = createApp({});

app.component('test-vue', Test);
app.component('nbrkids-vue', Nbrkids);

app.mount('#app');
