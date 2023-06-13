import Vue from 'vue'

import App from './App.vue'
import router from './router'
import axios from "axios";

import './assets/css/main.css'

Vue.prototype.$axios = axios;

const app = new Vue({
  router,
  render: (h) => h(App)
}).$mount('#app')


// app.config.globalProperties.axios = axios;
