import { createRouter, createWebHashHistory } from 'vue-router'
import Movies from '../views/Movies.vue'

const routes = [
  {
    path: '/',
    name: 'Movies',
    component: Movies
  }
]

const router = createRouter({
  history: createWebHashHistory(),
  routes
})

export default router
