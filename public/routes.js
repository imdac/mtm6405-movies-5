const routes = [
  { path: '/', component: Movies },
  { path: '/movie/:id', component: Movie, props: true },
  { path: '/create', component: New },
  { path: '/movie/:id/edit', component: Edit, props: true }
]

const router = VueRouter.createRouter({
  history: VueRouter.createWebHashHistory(),
  routes: routes
})
