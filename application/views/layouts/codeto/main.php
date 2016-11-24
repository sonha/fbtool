<?php $this->view('layouts/codeto/template_page_head.php');?>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <div class="page-wrapper">
            <?php $this->view('layouts/codeto/template_header');?>
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->
            <!-- BEGIN CONTAINER -->
            <div class="page-container">
                <?php $this->view('layouts/codeto/template_sidebar_menu');?>
                <?php $this->load->view($view); ?>
                <?php $this->view('layouts/codeto/template_quick_sidebar');?>
            </div>
            <!-- END CONTAINER -->
            <?php $this->view('layouts/codeto/template_footer');?>
        </div>
        <!-- BEGIN QUICK NAV -->
        <!-- END QUICK NAV -->
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<script src="../assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="<?php echo base_url() ?>assets/codeto/theme/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/codeto/theme/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/codeto/theme/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/codeto/theme/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/codeto/theme/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/codeto/theme/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url() ?>assets/codeto/theme/assets/global/plugins/moment.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/codeto/theme/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/codeto/theme/assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/codeto/theme/assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/codeto/theme/assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/codeto/theme/assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/codeto/theme/assets/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/codeto/theme/assets/global/plugins/amcharts/amcharts/serial.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/codeto/theme/assets/global/plugins/amcharts/amcharts/pie.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/codeto/theme/assets/global/plugins/amcharts/amcharts/radar.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/codeto/theme/assets/global/plugins/amcharts/amcharts/themes/light.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/codeto/theme/assets/global/plugins/amcharts/amcharts/themes/patterns.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/codeto/theme/assets/global/plugins/amcharts/amcharts/themes/chalk.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/codeto/theme/assets/global/plugins/amcharts/ammap/ammap.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/codeto/theme/assets/global/plugins/amcharts/ammap/maps/js/worldLow.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/codeto/theme/assets/global/plugins/amcharts/amstockcharts/amstock.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/codeto/theme/assets/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/codeto/theme/assets/global/plugins/horizontal-timeline/horizontal-timeline.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/codeto/theme/assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/codeto/theme/assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/codeto/theme/assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/codeto/theme/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/codeto/theme/assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/codeto/theme/assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/codeto/theme/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/codeto/theme/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/codeto/theme/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/codeto/theme/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/codeto/theme/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/codeto/theme/assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url() ?>assets/codeto/theme/assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url() ?>assets/codeto/theme/assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?php echo base_url() ?>assets/codeto/theme/assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/codeto/theme/assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/codeto/theme/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/codeto/theme/assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>

        <script src="<?php echo base_url() ?>assets/js/pinterest_grid.js"></script>
        <script>
                $(document).ready(function() {

                        $('#blog-landing').pinterest_grid({
                                no_columns: 4,
                                padding_x: 10,
                                padding_y: 10,
                                margin_bottom: 50,
                                single_column_breakpoint: 700
                        });

                });
        </script>
<!--        <script type="text/javascript">-->
<!--                $(function(){-->
<!--                        var m = new Masonry($('.sonha').get()[0], {-->
<!--                                itemSelector: ".thumbnail"-->
<!--                        });-->
<!---->
<!--                });-->
<!--        </script>-->
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>