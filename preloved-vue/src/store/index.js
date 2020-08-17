import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'

Vue.use(Vuex)
 const store = new Vuex.Store({
  state: {
    products: []
  },
  mutations: {
    setProducts (state, products) {
      state.products = products
    }
  },
  actions: {
    productdata(context) {
      axios.get('/products/get')
        .then(response => {
          context.commit('setProducts', response.data)
          console.log(response.data)
        })
        .catch(error => {
          console.log(error)
        })
    }
  },
  getters: {
    productdata(state) {
      return state.products.products
    },
  }
})
export default store
