import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView'
import BlogView from "@/views/BlogView";
import ContactView from "@/views/ContactView";
import CEOView from "@/views/CEOView";
import PodcastView from "@/views/PodcastView";
import AllerDeLAvant from "@/views/Aller-de-l-avant";
import AuBout from "@/views/Au-bout";
import Besoins from "@/views/Besoins";
import Choix from "@/views/Choix";
import Foi from "@/views/Foi";
import ImpasseView from "@/views/ImpasseView";
import Orgueil from "@/views/Orgueil";
import Passion from "@/views/Passion";
import PremierPas from "@/views/Premier-pas";
import Profiter from "@/views/Profiter";
import Reparer from "@/views/Reparer";
import Peur from "@/views/Peur"
import Surmonter from "@/views/Surmonter"



const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView
  },
  {
    path: '/podcast',
    name: 'podcast',
    component: PodcastView
  },
  {
    path: '/blog',
    name: 'blog',
    component: BlogView
  },
  {
    path: '/contact',
    name: 'contact',
    component: ContactView
  },
  {
    path: '/ceo',
    name: 'ceo',
    component: CEOView
  },
  {
    path: '/aller-de-l-avant',
    name: 'avant',
    component: AllerDeLAvant
  }
  ,
  {
    path: '/au-bout',
    name: 'au-bout',
    component: AuBout
  }
  ,
  {
    path: '/besoin',
    name: 'besoin',
    component: Besoins
  }
  ,
  {
    path: '/choix',
    name: 'choix',
    component: Choix
  }
  ,
  {
    path: '/foi',
    name: 'foi',
    component: Foi
  }
  ,
  {
    path: '/impasse',
    name: 'impasse',
    component: ImpasseView
  }
  ,
  {
    path: '/orgueil',
    name: 'orgueil',
    component: Orgueil
  }
  ,
  {
    path: '/passion',
    name: 'passion',
    component: Passion
  }
  ,
  {
    path: '/peur',
    name: 'peur',
    component: Peur
  }
  ,
  {
    path: '/premier-pas',
    name: 'premier-pas',
    component: PremierPas
  }
  ,
  {
    path: '/profiter',
    name: 'profiter',
    component: Profiter
  }
  ,
  {
    path: '/reparer',
    name: 'reparer',
    component: Reparer
  }
  ,
  {
    path: '/surmonter',
    name: 'surmonter',
    component: Surmonter
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
  scrollBehavior(to, from, savedPosition) {
    if (savedPosition) {
      return savedPosition
    } else {
      return { top: 0 }
    }
  }
})



export default router
