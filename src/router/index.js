import { createRouter, createWebHistory } from 'vue-router'
import Introduction from '../views/Introduction.vue'
import Start from '../views/Start.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: Introduction
    },
    {
      path: '/start',
      name: 'start',
      component: Start
    },

  ]
})

export default router
