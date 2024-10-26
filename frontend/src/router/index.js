import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import AboutView from "@/views/AboutView.vue";
import LoginView from "@/views/LoginView.vue";
import CatalogView from "@/views/CatalogView.vue";
import ProductInfo from "@/views/ProductInfo.vue";
import ContactView from "@/views/ContactView.vue";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
      path: '/about',
      name: 'about',
      component: AboutView
    },
    {
      path: '/catalog',
      name: 'catalog',
      component: CatalogView
    },
    {
      path: '/catalog/:id',
      name: 'product-info',
      component: ProductInfo
    },
    {
      path: '/login',
      name: 'login',
      component: LoginView
    },
      {
         path: '/contact',
         name: 'contact',
         component: ContactView
      }
  ]
})

export default router
