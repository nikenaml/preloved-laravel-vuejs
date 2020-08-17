import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'
import About from '../views/About.vue'
import Product from '../views/Product.vue'
import ShoppingCart from '../views/ShoppingCart.vue'
import Success from '../views/Success.vue'
import Guestbook from '../views/Guestbook.vue'
import SuccessGuestbook from '../views/SuccessGuestbook.vue'
import Service from '../views/Service.vue'
import TimelineOrder from '../views/TimelineOrder.vue'
import Faq from '../views/Faq.vue'
import Katalog from '../views/Katalog.vue'
import SuccessSubscribe from '../views/SuccessSubscribe.vue'
import Transfer from '../views/Transfer.vue'
import SuccessTransfer from '../views/SuccessTransfer.vue'
import Shop from '../views/Shop.vue'
import CKEditor from 'ckeditor4-vue';

Vue.use(VueRouter)
Vue.use(CKEditor)

const routes = [{
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/about',
    name: 'About',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import( /* webpackChunkName: "about" */ '../views/About.vue')
  },
  {
    path: '/product/:id',
    props: true,
    name: 'Product',
    component: Product
  },
  {
    path: '/cart',
    name: 'Cart',
    component: ShoppingCart
  },
  {
    path: '/about',
    name: 'About',
    component: About
  },
  {
    path: '/success',
    name: 'Success',
    component: Success
  },
  {
    path: '/guestbook',
    name: 'Guestbook',
    component: Guestbook
  },
  {
    path: '/success-guestbook',
    name: 'SuccessGuestbook',
    component: SuccessGuestbook
  },
  {
    path: '/service',
    name: 'Service',
    component: Service
  },
  {
    path: '/timeline-order',
    name: 'TimelineOrder',
    component: TimelineOrder
  },
  {
    path: '/faq',
    name: 'Faq',
    component: Faq
  },
  {
    path: '/katalog',
    name: 'Katalog',
    component: Katalog
  },
  {
    path: '/success-subscribe',
    name: 'SuccessSubscribe',
    component: SuccessSubscribe
  },
  {
    path: '/transfer',
    name: 'Transfer',
    component: Transfer
  },
  {
    path: '/success-transfer',
    name: 'SuccessTransfer',
    component: SuccessTransfer
  },
  {
    path: '/shop',
    name: 'Shop',
    component: Shop
  }
]

const router = new VueRouter({
  mode: 'history',
  history: true,
  hashbang: false,
  routes
})

export default router