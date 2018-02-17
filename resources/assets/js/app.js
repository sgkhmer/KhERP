import Vue from 'vue'
import VueRouter from 'vue-router'


// Backend ###################
import Home from './views/Components/index.vue'
import Register from './views/Auth/Register.vue'
import Login from './views/Auth/Login.vue'
import List from './views/Auth/List.vue'
import ShowForm from './views/Auth/Show.vue'
import CreateForm from './views/Auth/Form.vue'
import App from './App.vue'
import Appl from './Appl.vue'
//Setup Master ##################
import AccountRule from './views/Components/moneyTransfer/setup_master/account_rule/AccountRule.vue'
import AccountRuleList from './views/Components/moneyTransfer/setup_master/account_rule/AccountRuleList.vue'
import AccountRuleForm from './views/Components/moneyTransfer/setup_master/account_rule/AccountRuleForm.vue'
import AccountRuleEdit from './views/Components/moneyTransfer/setup_master/account_rule/AccountRuleEdit.vue'

import AccountType from './views/Components/moneyTransfer/setup_master/account_type/AccountType.vue'
import AccountTypeList from './views/Components/moneyTransfer/setup_master/account_type/AccountTypeList.vue'
import AccountTypeForm from './views/Components/moneyTransfer/setup_master/account_type/AccountTypeForm.vue'
import AccountTypeEdit from './views/Components/moneyTransfer/setup_master/account_type/AccountTypeEdit.vue'

//setting########################
import Setting from './views/Components/moneyTransfer/settings/Setting.vue'
import SettingForm from './views/Components/moneyTransfer/settings/MainForm.vue'
import SettingList from './views/Components/moneyTransfer/settings/SettingList.vue'
import SettingEditForm from './views/Components/moneyTransfer/settings/EditForm.vue'
//end setting####################

//User and user Group########################
import User from './views/Components/moneyTransfer/users/User.vue'
import UserForm from './views/Components/moneyTransfer/users/MainForm.vue'
import UserList from './views/Components/moneyTransfer/users/UserList.vue'
import UserEditForm from './views/Components/moneyTransfer/users/UserEditForm.vue'

//User group#########################
import UserGroup from './views/Components/moneyTransfer/user_groups/UserGroup.vue'
import UserGroupForm from './views/Components/moneyTransfer/user_groups/MainForm.vue'
import UserGroupList from './views/Components/moneyTransfer/user_groups/UserGroupList.vue'
import UserGroupEditForm from './views/Components/moneyTransfer/user_groups/UserGroupEditForm.vue'
//User Role#########################
import UserRole from './views/Components/moneyTransfer/users/UserRole.vue'
import UserRoleList from './views/Components/moneyTransfer/users/UserRoleList.vue'
import UserRoleForm from './views/Components/moneyTransfer/users/UserRoleForm.vue'
import UserRoleEdit from './views/Components/moneyTransfer/users/UserRoleEdit.vue'
import UserRolePermission from './views/Components/moneyTransfer/users/UserRolePermission.vue'

//End User Group####################

//***** Language *****
import Language from './views/Components/moneyTransfer/languages/Language.vue'
import LanguageList from './views/Components/moneyTransfer/languages/LanguageList.vue'
import LanguageForm from './views/Components/moneyTransfer/languages/MainForm.vue'
import LanguageEdit from './views/Components/moneyTransfer/languages/EditForm.vue'

//***** Currency *****
import Currency from './views/Components/moneyTransfer/currency/Currency.vue'
import CurrencyList from './views/Components/moneyTransfer/currency/CurrencyList.vue'
import CurrencyForm from './views/Components/moneyTransfer/currency/MainForm.vue'
import CurrencyEdit from './views/Components/moneyTransfer/currency/EditForm.vue'

//import router from './router'
import VueResource from 'vue-resource'
import Vuetify from 'vuetify'

Vue.use(Vuetify)
Vue.use(VueResource);
Vue.use(VueRouter)

Vue.http.options.credentials = true;

Vue.http.options.xhr = {
  withCredentials: true
}
Vue.http.options.emulateJSON = true
Vue.http.options.emulateHTTP = true
Vue.http.options.crossOrigin = true

Vue.http.headers.common['Access-Control-Allow-Origin'] = 'http://localhost:9200'
Vue.http.headers.common['Access-Control-Request-Method'] = '*'
Vue.http.headers.common['Content-Type'] = 'application/x-www-form-urlencoded'
Vue.http.headers.common['Accept'] = 'application/json, text/plain, */*'
Vue.http.headers.common['Access-Control-Allow-Headers'] = 'Origin, Accept, Content-Type, Authorization, Access-Control-Allow-Origin'

const router = new VueRouter({
  mode: 'history',
  routes: [
    // routing Backend
    { path: '/auth/login', name:'AuthLogin',component: Login },
    { path: '/admin', name:'ahome',component: Home },
    { path: '/admin/list', name:'floo',component: List },
    { path: '/register', name:'foo',component: Register },
    //Setup Master
    {path:'/admin/account_rule',name:'AccountRule',component:AccountRule,
        children:[
            {
                path:'list',
                name:'AccountRuleList',
                component:AccountRuleList
            },
            {
                path:'add',
                name:'AccountRuleForm',
                component:AccountRuleForm
            },
            {
                path:'edit/:id',
                name:'AccountRuleEdit',
                component:AccountRuleEdit,
                props:true
            }
        ]       
    },
    {path:'/admin/account_type',name:'AccountType',component:AccountType,
        children:[
            {
                path:'list',
                name:'AccountTypeList',
                component:AccountTypeList
            },
            {
                path:'add',
                name:'AccountTypeForm',
                component:AccountTypeForm
            },
            {
                path:'edit/:id',
                name:'AccountTypeEdit',
                component:AccountTypeEdit,
                props:true
            }
        ]       
    },
    //Setting
    {path:'/admin/settings',name:'settings',component:Setting,
        children:[
            {
                path:'list',
                name:'SettingList',
                component:SettingList
            },
            {
                path:'add',
                name:'SettingForm',
                component:SettingForm
            },
            {
                path:'edit/:id',
                name:'SettingEditForm',
                component:SettingEditForm,
                props:true
            }
        ]       
    },
    //User and User Group 
    {path:'/admin/users',name:'users',component:User,
        children:[
            {
                path:'list',
                name:'UserList',
                component:UserList
            },
            {
                path:'add',
                name:'UserForm',
                component:UserForm
            },
            {
                path:'edit/:id',
                name:'UserEdit',
                component:UserEditForm,
                props:true
            }
        ]       
    },
    {path:'/admin/users_group',name:'usergroup',component:UserGroup,
        children:[
            {
                path:'list',
                name:'UserGroupList',
                component:UserGroupList
            },
            {
                path:'add',
                name:'UserGroupForm',
                component:UserGroupForm
            },
            {
                path:'edit/:id',
                name:'UserGroupEdit',
                component:UserGroupEditForm,
                props:true
            }
        ]       
    },
    {path:'/admin/user_role',name:'user_role',component:UserRole,
        children:[
            {
                path:'list',
                name:'UserRoleList',
                component:UserRoleList
            },
            {
                path:'add',
                name:'UserRoleForm',
                component:UserRoleForm
            },
            {
                path:'edit/:id',
                name:'UserRoleEdit',
                component:UserRoleEdit,
                props:true
            },
            {
                path:'permission/:id',
                name:'UserRolePermission',
                component:UserRolePermission,
                props:true
            }
        ]       
    },
    {path:'/admin/languages',name:'languages',component:Language,
        children:[
            {
                path:'list',
                name:'LanguageList',
                component:LanguageList
            },
            {
                path:'add',
                name:'LanguageForm',
                component:LanguageForm
            },
            {
                path:'edit/:id',
                name:'LanguageEdit',
                component:LanguageEdit,
                props:true
            }
        ]       
    },
    {path:'/admin/currencies',name:'currencies',component:Currency,
        children:[
            {
                path:'list',
                name:'CurrencyList',
                component:CurrencyList
            },
            {
                path:'add',
                name:'CurrencyForm',
                component:CurrencyForm
            },
            {
                path:'edit/:id',
                name:'CurrencyEdit',
                component:CurrencyEdit,
                props:true
            }
        ]       
    }
  ],
  scrollBehavior (to, from, savedPosition) {
    return { x: 10, y: 0 }
  },
})

// app backend
const app = new Vue({
  // el: '#root',
  router,
  template: `
  <app></app>
`,
  components: { App },
}).$mount('#root')

// const AuthLogin = new Vue({
//   // el: '#root',
//   router,
//   template: `
//   <appl></appl>
// `,
//   components: { Appl },
// }).$mount('#root_login')