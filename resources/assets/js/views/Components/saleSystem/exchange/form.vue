<template>
  <section id="content">
      <!--breadcrumbs start-->
      <div id="breadcrumbs-wrapper">
        <!-- Search for small screen -->
        <div class="header-search-wrapper grey lighten-2 hide-on-large-only">
          <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
        </div>
        <div class="container">
          <div class="row">
            <div class="col s10 m6 l6">
              <h5 class="breadcrumbs-title">Formsss</h5>
              <ol class="breadcrumbs">
                <li><a href="index.html">Dashboard</a>
                </li>
                <li><a href="#">Forms</a>
                </li>
                <li class="active">Forms Layouts</li>
              </ol>
            </div>
            <div class="col s2 m6 l6">
              <router-link :to="`/exchange_money/exchange`" class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right" data-activates="dropdown1">
                <i class="material-icons hide-on-med-and-up">Back to list</i>
                <span class="hide-on-small-onl">back</span>
              </router-link>
            </div>
          </div>
        </div>
      </div>
      <!--breadcrumbs end-->
      <!--start container-->
      <div class="container">
        
        <form class="">
          <div class="col s6 offset-s4">
            <div class="row">
              <div class="input-field col s6">
                <input placeholder="2015-01-01" id="date-demo1" type="text" class="">
                <label for="date_demo1">Date</label>
              </div>
              <div class="input-field col s6">
                <input placeholder="01/01/2015" id="date-demo2" type="text" class="">
                <label for="date_demo2">Date</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6">
                <input placeholder="00:00" id="time-demo" type="text" class="">
                <label for="time_demo">Time</label>
              </div>
              <div class="input-field col s6">
                <input placeholder="01/01/2015 00:00" id="date-time" type="text" class="">
                <label for="date_time">Date & Time</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6">
                <input placeholder="00:00" id="time-demo" type="text" class="">
                <label for="time_demo">Time</label>
              </div>
              <div class="input-field col s6">
                <input placeholder="asdfghjkl (max10)" id="characters-demo" type="text" class="">
                <label for="characters">Characters (Only)</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6">
                <input placeholder="Placeholder" id="phone-input" type="text" class="">
                <label for="first_name">Phone Number</label>
              </div>
              <div class="input-field col s6">
                <input placeholder="Placeholder" id="credit-input" type="text" class="">
                <label for="first_name">Credit Input</label>
              </div>
            </div>
          </div>
        </form>

      </div>
    </section>
</template>

<script>

export default {
  data() {
    return {
      posts: [],
      errors: []
    }
  },
  mounted: function () {
    // alert("test");
    // console.log("testing");
    $.getScript( "http://localhost:8000/js/scripts/data-tables.js");
    // $.getScript("./lib/js/scripts/data-tables.js");
  }
}
</script>