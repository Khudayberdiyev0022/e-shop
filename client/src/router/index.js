import Vue from 'vue'
import VueRouter from 'vue-router'
import IndexView from "@/views/IndexView.vue";

Vue.use(VueRouter)

const router = new VueRouter({
  mode: 'history',
  base: import.meta.env.BASE_URL,
  routes: [
    {
      path: '/',
      name: 'index',
      component: IndexView
    },
    {
      path: '/products',
      name: 'products',
      component: () => import('@/views/products/IndexView.vue')
    }
  ]
})

export default router
