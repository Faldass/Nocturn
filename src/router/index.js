import { createRouter, createWebHistory } from 'vue-router'
import actus from '../views/Actualites.vue'

const routes = [
  {
    path: '/',
    name: 'actusA',
    component: actus
  },
  {
    path: '/profil',
    name: 'profilU',
    // route level code-splitting
    // this generates a separate chunk (profil.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "profil" */ '../views/Profil.vue')
  },
  {
    path: '/presentation',
    name: 'presentationA',
    component: () => import( '../views/Presentation.vue')
  },
  {
    path: '/membres',
    name: 'membresA',
    component: () => import( '../views/Membres.vue')
  },
  {
    path: '/events',
    name: 'eventsA',
    component: () => import( '../views/Events.vue')
  },
  {
    path: '/connexion',
    name: 'connexionU',
    component: () => import( '../views/Connexion.vue')
  },
  {
    path: '/boutique',
    name: 'boutiqueU',
    component: () => import( '../views/Boutique.vue')
  },
  {
    path: '/inscription',
    name: 'inscriptionU',
    component: () => import( '../views/Inscritpion.vue')
  },
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
