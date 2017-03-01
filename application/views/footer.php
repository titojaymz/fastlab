<!-- FOOTER -->
        <footer class="footer pt-80">

            <!-- Copyright Bar -->
            <section class="copyright pb-60">
                <div class="container">
                    <p class="">
                        &copy; 2017 <a><b>FAST Laboratories</b></a>. All Rights Reserved.
                    </p>
                </div>
            </section>
            <!-- End Copyright Bar -->

        </footer>
        <!-- END FOOTER -->

        <!-- Scroll Top -->
        <a class="scroll-top">
            <i class="fa fa-angle-double-up"></i>
        </a>
        <!-- End Scroll Top -->

    </div>
    <!-- Site Wraper End -->


    <!-- JS -->

    <script src="<?php echo base_url() ?>/assets/js/jquery-1.11.2.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>/assets/js/plugin/jquery.easing.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>/assets/js/jquery-ui.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>/assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>/assets/js/plugin/jquery.flexslider.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>/assets/js/plugin/background-check.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>/assets/js/plugin/jquery.fitvids.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>/assets/js/plugin/jquery.viewportchecker.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>/assets/js/plugin/jquery.stellar.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>/assets/js/plugin/wow.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>/assets/js/plugin/jquery.colorbox-min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>/assets/js/plugin/owl.carousel.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>/assets/js/plugin/isotope.pkgd.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>/assets/js/plugin/masonry.pkgd.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>/assets/js/plugin/imagesloaded.pkgd.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>/assets/js/plugin/jPushMenu.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>/assets/js/plugin/jquery.fs.tipper.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>/assets/js/plugin/mediaelement-and-player.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/plugin/jquery.validate.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>/assets/js/theme.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>/assets/js/navigation.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>/assets/js/plugin/jquery.singlePageNav.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>/assets/js/contact-form.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>/assets/js/map.js"></script>

    <script type="text/javascript">
        //  Onepage Nav Elements
        $('.singlepage-nav').singlePageNav({
            offset: 0,
            filter: ':not(.nav-external)',
            updateHash: true,
            currentClass: 'current-ele',
            easing: 'swing',
            speed: 750,
            beforeStart: function () {
                console.log('begin scrolling');
            },
            onComplete: function () {
                console.log('done scrolling');
            }
        });
    </script>

</body>
</html>