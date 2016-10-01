
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y');?></p>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
    <!-- jQuery -->
    <script src="<?php echo get_template_directory_uri()?>/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo get_template_directory_uri()?>/js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>