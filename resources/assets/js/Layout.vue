<template>
    <div>
        <!-- Start Page Loading -->
        <div id="loader-wrapper">
          <div id="loader"></div>
          <div class="loader-section section-left"></div>
          <div class="loader-section section-right"></div>
        </div>
        <!-- End Page Loading -->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <router-view></router-view>
        <!-- START FOOTER -->
        <footer class="page-footer">
          <div class="footer-copyright">
            <div class="container">
              <span>Copyright ©<a class="grey-text text-lighten-4" href="#" target="_blank">PIXINVENT</a> All rights reserved.</span>
              <span class="right hide-on-small-only"> Design and Developed by <a class="grey-text text-lighten-4" href="#">PIXINVENT</a></span>
            </div>
          </div>
        </footer>
    </div>
</template>


<script type="text/javascript">
    import Flash from './helper/flash'

    export default{
        data(){
            return{
                flash: Flash.state,
            }
        },
        methods: function() {
            alert('sd');
            // window.location = "#/login";
          },
          mounted: function () {
            // window.location = "#/home";
        },
    }
</script>
