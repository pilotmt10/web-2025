import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import AboutView from "@/views/AboutView.vue";
import LoginView from "@/views/LoginView.vue";
import DefaultLayout from "@/layouts/DefaultLayout.vue";
import EmptyLayout from "@/layouts/EmptyLayout.vue";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView,
      meta: {layout: DefaultLayout}
    },
    {
      path: '/about',
      name: 'about',
      component: AboutView,
      meta: {layout: DefaultLayout}
    },
    {
      path: '/login',
      name: 'login',
      component: LoginView,
      meta: {layout: EmptyLayout}
    },
  ],
})

export default router
