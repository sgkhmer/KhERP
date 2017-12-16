import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Components/index.vue'
import Register from '../views/Auth/Register.vue'
import Login from '../views/Auth/Login.vue'
import List from '../views/Auth/List.vue'
import ShowForm from '../views/Auth/Show.vue'
import CreateForm from '../views/Auth/Form.vue'


// real estate management
import re_Index from '../views/Components/realEstate/index.vue'
// CRM Management
import crm_Index from '../views/Components/crm/index.vue'
// Exchange Transfer Money
import exchange_Index from '../views/Components/saleSystem/index.vue'
import exchange_exchange from '../views/Components/saleSystem/exchange/index.vue'
import exchange_form from '../views/Components/saleSystem/exchange/form.vue'

Vue.use(VueRouter)

// const User = {
//   template: '<div>User</div>'
// }

const router = new VueRouter({
  routes: [
  	// real estate
  	{ path: '/realesate/home', component: re_Index },

  	// crm
  	{ path: '/crm/home', component: crm_Index },

  	// exchange money
  	{ path: '/exchange_money/home', component: exchange_Index },
    { path: '/exchange_money/exchange', component: exchange_exchange },
    { path: '/exchange_money/exchange/form', component: exchange_form },

    // dynamic segments start with a colon
    { path: '/home', component: Home },
    { path: '/register', component: Register },
    { path: '/login', component: Login },
    { path: '/list', component: List },
    { path: '/show/:id', component: ShowForm },
    { path: '/list/:id/edit', component: CreateForm, meta:{mode:'edit'}}
  ]
})

// const router = new VueRouter({
//     routers: [

//         {path: 'register', component: Register }
        
//     ]
// })

export default router
