<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">

        <title>KH Currency Exchange Co.,Ltd</title>
        <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
        <link href="https://unpkg.com/vuetify/dist/vuetify.min.css" rel="stylesheet">
        <!-- Styles -->
        {{-- <link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}"> --}}
        <link href="/css/themes/horizontal-menu/materialize.css" type="text/css" rel="stylesheet">
        <link href="/css/themes/horizontal-menu/style.css" type="text/css" rel="stylesheet">
        <!-- Custome CSS-->
        <link href="/css/custom/custom.css" type="text/css" rel="stylesheet">
        <!-- CSS style Horizontal Nav-->
        <link href="/css/layouts/style-horizontal.css" type="text/css" rel="stylesheet">
        <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
        <link href="/vendors/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet">
        <link href="/vendors/jvectormap/jquery-jvectormap.css" type="text/css" rel="stylesheet">
        <link href="/vendors/flag-icon/css/flag-icon.min.css" type="text/css" rel="stylesheet">
        {{-- <link rel="stylesheet" type="text/css" href="/css/materialize.css"> --}}
        {{-- <link rel="stylesheet" type="text/css" href="{{url('stylus/main.styl')}}"> --}}

    </head>

    <body>
        <!-- Start Page Loading -->
        <div id="loader-wrapper">
          <div id="loader"></div>
          <div class="loader-section section-left"></div>
          <div class="loader-section section-right"></div>
        </div>
        <!-- End Page Loading -->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!-- START HEADER -->
        <header id="header" class="page-topbar">
          <div class="navbar-fixed">
            <nav class="navbar-color gradient-45deg-light-blue-cyan">
              <div class="nav-wrapper">
                <ul class="left">
                  <li>
                    <h1 class="logo-wrapper">
                      <a href="/admin/" class="brand-logo darken-1">
                        <img src="/images/logo/materialize-logo.png" alt="materialize logo">
                        <span class="logo-text hide-on-med-and-down">KH Exchange</span>
                      </a>
                    </h1>
                  </li>
                </ul>
                <div class="header-search-wrapper hide-on-med-and-down">
                  <i class="material-icons">search</i>
                  <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize" />
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
                        <img src="images/avatar/avatar-7.png" alt="avatar">
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
                    <a href="#" class="grey-text text-darken-1">
                      <i class="material-icons">keyboard_tab</i> Logout</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </header>
        <!-- END HEADER -->
        
        <!-- START MAIN -->
        <div id="main">
          <div class="wrapper">
            <section id="_content">
              <!--breadcrumbs start-->
              <div id="breadcrumbs-wrapper">
                <!-- Search for small screen -->
                <div class="header-search-wrapper grey lighten-2 hide-on-large-only">
                  <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
                </div>
                <div class="container">
                  <div class="row">
                    <div class="col s12 m2">
                        <div class="card gradient-shadow gradient-45deg-light-blue-cyan border-radius-3">
                          <div class="card-content center">
                            <p class="white-text lighten-4"><a style="color:#fff;" href="/admin/dashboard/#realesate/home">Real Estate Management</a></p>
                          </div>
                        </div>
                      </div>

                      <div class="col s12 m2">
                        <div class="card gradient-shadow gradient-45deg-light-blue-cyan border-radius-3">
                          <div class="card-content center">
                            <p class="white-text lighten-4"><a style="color:#fff;" href="/admin/dashboard/#crm/home">CRM</a></p>
                          </div>
                        </div>
                      </div>

                      <div class="col s12 m2">
                        <div class="card gradient-shadow gradient-45deg-light-blue-cyan border-radius-3">
                          <div class="card-content center">
                            <p class="white-text lighten-4"><a style="color:#fff;" href="/admin/dashboard/#exchange_money/home">Exchange Money</a></p>
                          </div>
                        </div>
                      </div>

                  </div>


                </div>
              </div>

            </section>
            <!-- aside -->
            <aside id="left-sidebar-nav hide-on-large-only">
              <ul id="slide-out" class="side-nav leftside-navigation">
                <li class="no-padding">
                  <ul class="collapsible" data-collapsible="accordion">
                    <li class="bold">
                      <a href="app-email.html" class="waves-effect waves-cyan">
                        <i class="material-icons">mail_outline</i>
                        <span>Mailbox</span>
                      </a>
                    </li>
                    <li class="bold">
                      <a href="app-calendar.html" class="waves-effect waves-cyan">
                        <i class="material-icons">today</i>
                        <span>Calender</span>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
              <a href="#" style="z-index:99999" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only">
                <i class="material-icons">menu</i>
              </a>
            </aside>
          </div>
        </div>

        <!-- START FOOTER -->
        <footer class="page-footer">
          <div class="footer-copyright">
            <div class="container">
              <span>Copyright ©<a class="grey-text text-lighten-4" href="#" target="_blank">KH Currency Exchange Co.,Ltd</a> All rights reserved.</span>
              <span class="right hide-on-small-only"> Design and Developed by <a class="grey-text text-lighten-4" href="#">SGKhmer</a></span>
            </div>
          </div>
        </footer>
    </body>
    <script type="text/javascript" src="{{url('js/app.js')}}"></script>
    <script type="text/javascript" src="/vendors/jquery-3.2.1.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="/js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- chartjs -->
    <script type="text/javascript" src="/vendors/chartjs/chart.min.js"></script>
    <!-- sparkline -->
    <script type="text/javascript" src="/vendors/sparkline/jquery.sparkline.min.js"></script>
    <!-- google map api -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAZnaZBXLqNBRXjd-82km_NO7GUItyKek"></script>
    <!--jvectormap-->
    <script type="text/javascript" src="/vendors/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script type="text/javascript" src="/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script type="text/javascript" src="/vendors/jvectormap/vectormap-script.js"></script>
    <!--google map-->
    <script type="text/javascript" src="/js/scripts/google-map-script.js"></script>
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="/js/plugins.js"></script>
    <!--card-advanced.js - Page specific JS-->
    <script type="text/javascript" src="/js/scripts/dashboard-analytics.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="/js/custom-script.js"></script>
    {{-- <script src="https://unpkg.com/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/vuetify/dist/vuetify.js"></script>
    <script>
        new Vue({ el: '#root' })
    </script> --}}
</html>
