<template>
	<header id="header" class="page-topbar">
      <div class="navbar-fixed">
        <nav class="navbar-color gradient-45deg-light-blue-cyan">
          <div class="nav-wrapper">
            <ul class="left">
              <li>
                <h1 class="logo-wrapper">
                  <!-- <a href="/admin" class="brand-logo darken-1"> -->
                    <router-link class="brand-logo darken-1"  to="/admin">
                      <img src="/images/logo/logo.png" alt="Bakou">
                      <!-- <span class="logo-text hide-on-med-and-down">Bakou Store</span> -->
                    </router-link>
                  <!-- </a> -->
                </h1>
              </li>
            </ul>
            <div class="header-search-wrapper hide-on-med-and-down">
              <i class="material-icons">search</i>
              <input type="text" name="Search" class="header-search-input z-depth-2 search-box" placeholder="Search Product" />
            </div>
            <ul class="right hide-on-med-and-down">
              <li>
                <a href="javascript:void(0);" class="waves-effect waves-block waves-light translation-button" data-activates="translation-dropdown">
                  <span class="flag-icon flag-icon-gb"></span>
                </a>
              </li>
              <li>
                <a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen">
                  <i class="material-icons">settings_overscan</i>
                </a>
              </li>
              <li>
                <a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" data-activates="notifications-dropdown">
                  <i class="material-icons">notifications_none
                    <small class="notification-badge orange accent-3">5</small>
                  </i>
                </a>
              </li>
              <li>
                <a href="javascript:void(0);" class="waves-effect waves-block waves-light profile-button" data-activates="profile-dropdown">
                  <span class="avatar-status avatar-online">
                    <img src="/images/avatar/avatar-7.png" alt="avatar">
                    <i></i>
                  </span>
                </a>
              </li>
              <li>
                <a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse">
                  <i class="material-icons">format_indent_increase</i>
                </a>
              </li>
            </ul>
            <!-- translation-button -->
            <ul id="translation-dropdown" class="dropdown-content">
              <li>
                <a href="#!" class="grey-text text-darken-1">
                  <i class="flag-icon flag-icon-gb"></i> English</a>
              </li>
              <li>
                <a href="#!" class="grey-text text-darken-1">
                  <i class="flag-icon flag-icon-fr"></i> French</a>
              </li>
              <li>
                <a href="#!" class="grey-text text-darken-1">
                  <i class="flag-icon flag-icon-cn"></i> Chinese</a>
              </li>
              <li>
                <a href="#!" class="grey-text text-darken-1">
                  <i class="flag-icon flag-icon-de"></i> German</a>
              </li>
            </ul>
            <!-- notifications-dropdown -->
            <ul id="notifications-dropdown" class="dropdown-content">
              <li>
                <h6>NOTIFICATIONS
                  <span class="new badge">5</span>
                </h6>
              </li>
              <li class="divider"></li>
              <li>
                <a href="#!" class="grey-text text-darken-2">
                  <span class="material-icons icon-bg-circle cyan small">add_shopping_cart</span> A new order has been placed!</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
              </li>
              <li>
                <a href="#!" class="grey-text text-darken-2">
                  <span class="material-icons icon-bg-circle red small">stars</span> Completed the task</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
              </li>
              <li>
                <a href="#!" class="grey-text text-darken-2">
                  <span class="material-icons icon-bg-circle teal small">settings</span> Settings updated</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
              </li>
              <li>
                <a href="#!" class="grey-text text-darken-2">
                  <span class="material-icons icon-bg-circle deep-orange small">today</span> Director meeting started</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
              </li>
              <li>
                <a href="#!" class="grey-text text-darken-2">
                  <span class="material-icons icon-bg-circle amber small">trending_up</span> Generate monthly report</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
              </li>
            </ul>
            <!-- profile-dropdown -->
            <ul id="profile-dropdown" class="dropdown-content">
              <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">face</i> Profile</a>
              </li>
              <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">settings</i> Settings</a>
              </li>
              <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">live_help</i> Help</a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">lock_outline</i> Lock</a>
              </li>
              <li>
                <a href="/auth/logout" class="grey-text text-darken-1">
                  <i class="material-icons">keyboard_tab</i> Logout</a>
              </li>
            </ul>
          </div>
        </nav>
        <!-- HORIZONTL NAV START-->
        <nav id="horizontal-nav" class="white hide-on-med-and-down">
          <div class="nav-wrapper">
            <ul id="ul-horizontal-nav" class="left hide-on-med-and-down">
            	<li v-for="m of menu_data">
                <router-link class="dropdown-menu" :to="m.p_menu_link" :data-activates="thClassValue(m.parent_menu_id)">
                  <i class="material-icons">{{m.fa_icon}}</i>
                  <span>{{m.parent_menu_name}}
                    <i v-if="m['children_menu'].length>0" class="material-icons right">keyboard_arrow_down</i>
                  </span>
                </router-link>
	            </li>
            </ul>
          </div>
        </nav>

        <!-- Templatesdropdown -->
        <ul v-for="m of menu_data" :id="thClassValue(m.parent_menu_id)" class="dropdown-content dropdown-horizontal-list">
          <li v-for="sm of m['children_menu']"><router-link :to="sm.c_menu_link">{{sm.child_menu_name}}</router-link></li>
        </ul>
        
      </div>
    </header>
</template>

<style type="text/css">
  header .brand-logo img{height: none !important;width:132px;margin-left: 20px;}
</style>

<script type="text/javascript">
	import axios from 'axios';
  import common from '../../../../helper/common' 
    export default{
        data(){
            return{
            	activityMenu:'',
                menu_data:[],
                menus:[
                  {label:'Setting',child:[
                    {label:'Create',url:'/admin/settings/add'},
                    {label:'List',url:'/admin/settings/list'}
                  ]},
                  {label:'Users',child:[
                    {label:'Create',url:'/admin/users/add'},
                    {label:'List',url:'/admin/users/list'}
                  ]}
                ]
            }
        },
        created() {
          this.getApiMenu();
        },
        methods:{
        	thClassValue (id) {
            var value = ['Templatesdropdown'+id]
            return value.join(' ')
          },
          getApiMenu(){
            axios.get(`/api/getMenus`)
            .then(response => {
              this.menu_data = response.data['data']
            })
            .catch(e => {
              this.errors.push(e)
            })
          }
        }
    }
</script>