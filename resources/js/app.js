import { createApp } from 'vue'
import HelloWorld from './components/HelloWorld.vue';

const app = createApp({});
// registers our HelloWorld component globally
app.component('hello-world', HelloWorld);
// mount the app to the DOM
    app.mount('#app');

require('./bootstrap');
