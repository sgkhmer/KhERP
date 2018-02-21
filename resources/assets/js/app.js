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

import AmountTopUp from './views/Components/moneyTransfer/setup_master/amount_top_up/AmountTopUp.vue'
import AmountTopUpList from './views/Components/moneyTransfer/setup_master/amount_top_up/AmountTopUpList.vue'
import AmountTopUpForm from './views/Components/moneyTransfer/setup_master/amount_top_up/AmountTopUpForm.vue'
import AmountTopUpEdit from './views/Components/moneyTransfer/setup_master/amount_top_up/AmountTopUpEdit.vue'

import BookingType from './views/Components/moneyTransfer/setup_master/booking_type/BookingType.vue'
import BookingTypeList from './views/Components/moneyTransfer/setup_master/booking_type/BookingTypeList.vue'
import BookingTypeForm from './views/Components/moneyTransfer/setup_master/booking_type/BookingTypeForm.vue'
import BookingTypeEdit from './views/Components/moneyTransfer/setup_master/booking_type/BookingTypeEdit.vue'

import Country from './views/Components/moneyTransfer/setup_master/country/Country.vue'
import CountryList from './views/Components/moneyTransfer/setup_master/country/CountryList.vue'
import CountryForm from './views/Components/moneyTransfer/setup_master/country/CountryForm.vue'
import CountryEdit from './views/Components/moneyTransfer/setup_master/country/CountryEdit.vue'

import Currency from './views/Components/moneyTransfer/setup_master/currency/Currency.vue'
import CurrencyList from './views/Components/moneyTransfer/setup_master/currency/CurrencyList.vue'
import CurrencyForm from './views/Components/moneyTransfer/setup_master/currency/CurrencyForm.vue'
import CurrencyEdit from './views/Components/moneyTransfer/setup_master/currency/CurrencyEdit.vue'

import DeliveryMethod from './views/Components/moneyTransfer/setup_master/delivery_method/DeliveryMethod.vue'
import DeliveryMethodList from './views/Components/moneyTransfer/setup_master/delivery_method/DeliveryMethodList.vue'
import DeliveryMethodForm from './views/Components/moneyTransfer/setup_master/delivery_method/DeliveryMethodForm.vue'
import DeliveryMethodEdit from './views/Components/moneyTransfer/setup_master/delivery_method/DeliveryMethodEdit.vue'

import InterestRatePeriod from './views/Components/moneyTransfer/setup_master/interest_rate_period/InterestRatePeriod.vue'
import InterestRatePeriodList from './views/Components/moneyTransfer/setup_master/interest_rate_period/InterestRatePeriodList.vue'
import InterestRatePeriodForm from './views/Components/moneyTransfer/setup_master/interest_rate_period/InterestRatePeriodForm.vue'
import InterestRatePeriodEdit from './views/Components/moneyTransfer/setup_master/interest_rate_period/InterestRatePeriodEdit.vue'

import PaymentCycle from './views/Components/moneyTransfer/setup_master/payment_cycle/PaymentCycle.vue'
import PaymentCycleList from './views/Components/moneyTransfer/setup_master/payment_cycle/PaymentCycleList.vue'
import PaymentCycleForm from './views/Components/moneyTransfer/setup_master/payment_cycle/PaymentCycleForm.vue'
import PaymentCycleEdit from './views/Components/moneyTransfer/setup_master/payment_cycle/PaymentCycleEdit.vue'

import TermDay from './views/Components/moneyTransfer/setup_master/term_day/TermDay.vue'
import TermDayList from './views/Components/moneyTransfer/setup_master/term_day/TermDayList.vue'
import TermDayForm from './views/Components/moneyTransfer/setup_master/term_day/TermDayForm.vue'
import TermDayEdit from './views/Components/moneyTransfer/setup_master/term_day/TermDayEdit.vue'

import Voucher from './views/Components/moneyTransfer/setup_master/voucher/Voucher.vue'
import VoucherList from './views/Components/moneyTransfer/setup_master/voucher/VoucherList.vue'
import VoucherForm from './views/Components/moneyTransfer/setup_master/voucher/VoucherForm.vue'
import VoucherEdit from './views/Components/moneyTransfer/setup_master/voucher/VoucherEdit.vue'

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
    {path:'/admin/amount_top_up',name:'AmountTopUp',component:AmountTopUp,
        children:[
            {
                path:'list',
                name:'AmountTopUpList',
                component:AmountTopUpList
            },
            {
                path:'add',
                name:'AmountTopUpForm',
                component:AmountTopUpForm
            },
            {
                path:'edit/:id',
                name:'AmountTopUpEdit',
                component:AmountTopUpEdit,
                props:true
            }
        ]       
    },
    {path:'/admin/booking_type',name:'BookingType',component:BookingType,
        children:[
            {
                path:'list',
                name:'BookingTypeList',
                component:BookingTypeList
            },
            {
                path:'add',
                name:'BookingTypeForm',
                component:BookingTypeForm
            },
            {
                path:'edit/:id',
                name:'BookingTypeEdit',
                component:BookingTypeEdit,
                props:true
            }
        ]       
    },
    {path:'/admin/country',name:'Country',component:Country,
        children:[
            {
                path:'list',
                name:'CountryList',
                component:CountryList
            },
            {
                path:'add',
                name:'CountryForm',
                component:CountryForm
            },
            {
                path:'edit/:id',
                name:'CountryEdit',
                component:CountryEdit,
                props:true
            }
        ]       
    },
    {path:'/admin/currencies',name:'Currency',component:Currency,
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
    },
    {path:'/admin/delivery_method',name:'DeliveryMethod',component:DeliveryMethod,
        children:[
            {
                path:'list',
                name:'DeliveryMethodList',
                component:DeliveryMethodList
            },
            {
                path:'add',
                name:'DeliveryMethodForm',
                component:DeliveryMethodForm
            },
            {
                path:'edit/:id',
                name:'DeliveryMethodEdit',
                component:DeliveryMethodEdit,
                props:true
            }
        ]       
    },
    {path:'/admin/interest_rate_period',name:'InterestRatePeriod',component:InterestRatePeriod,
        children:[
            {
                path:'list',
                name:'InterestRatePeriodList',
                component:InterestRatePeriodList
            },
            {
                path:'add',
                name:'InterestRatePeriodForm',
                component:InterestRatePeriodForm
            },
            {
                path:'edit/:id',
                name:'InterestRatePeriodEdit',
                component:InterestRatePeriodEdit,
                props:true
            }
        ]       
    },
    {path:'/admin/payment_cycle',name:'PaymentCycle',component:PaymentCycle,
        children:[
            {
                path:'list',
                name:'PaymentCycleList',
                component:PaymentCycleList
            },
            {
                path:'add',
                name:'PaymentCycleForm',
                component:PaymentCycleForm
            },
            {
                path:'edit/:id',
                name:'PaymentCycleEdit',
                component:PaymentCycleEdit,
                props:true
            }
        ]       
    },
    {path:'/admin/term_day',name:'TermDay',component:TermDay,
        children:[
            {
                path:'list',
                name:'TermDayList',
                component:TermDayList
            },
            {
                path:'add',
                name:'TermDayForm',
                component:TermDayForm
            },
            {
                path:'edit/:id',
                name:'TermDayEdit',
                component:TermDayEdit,
                props:true
            }
        ]       
    },
    {path:'/admin/voucher',name:'Voucher',component:Voucher,
        children:[
            {
                path:'list',
                name:'VoucherList',
                component:VoucherList
            },
            {
                path:'add',
                name:'VoucherForm',
                component:VoucherForm
            },
            {
                path:'edit/:id',
                name:'VoucherEdit',
                component:VoucherEdit,
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