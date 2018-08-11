
<div style="margin-top: 50px;">
<footer id="footer" style="background-color: #e8f5e9; bottom: 0;">
        <div class="container" style="height: 50px; border: 1px solid white;">
                <div class="row" id="footer-menu" style="height: 100%; ">
                        <div class="main-menu col s12 l11" id="main-menu-ID" style="z-index: 9; ">
                                <!-- wp_nav_menu( array( 'theme_location' => 'my-main-menu', 'container_class' => 'my-custom-main-menu-class' ) );  -->
                                <?php echo do_shortcode( '[mtlevel_menu]' );?>
                        </div>
                </div>
        </div>
        <div class="container">
                <div class="row">
                        <div class="col s12">
                                <div class="col s12 l4 footer-so-1" style=" text-align:center; ">
                                <!-- <div class="six columns"> Skeleton -->
                                        <div style="width: 100%; margin-top: 20px;">
                                                <?php if ( is_active_sidebar( 'footer-1' ) ) : dynamic_sidebar( 'footer-1' ); endif; ?>
                                        </div>
                                </div>
                                <div class="col s12 l4 footer-so-2" style=" text-align:center; ">
                                <!-- <div class="six columns"> -->
                                        <div style="width: 100%; margin-top: 20px;">
                                                <?php if ( is_active_sidebar( 'footer-2' ) ) : dynamic_sidebar( 'footer-2' ); endif; ?>
                                        </div>
                                </div>
                                <div class="col s12 l4 footer-so-3" style=" text-align:center; ">
                                <!-- <div class="six columns"> -->
                                        <div style="width: 100%; margin-top: 20px;">
                                                <?php if ( is_active_sidebar( 'footer-3' ) ) : dynamic_sidebar( 'footer-3' ); endif; ?>
</div>
                                </div>
                        </div>
                </div>
        </div>
        <div id="quote">
                <div class="row" >
                        <!-- <div class="copyright" > -->
                        <!-- © php echo date('Y'); ?> php bloginfo( 'sitename' ); ?>. 
                        php _e('All rights reserved', 'tansang2'); ?>. php _e('This website is proundly to use WordPress', 'tansang2'); ?> -->
                        <!-- </div> -->

                        <div class="copyright" >
                        <?php _e('Copyright © ', 'tansang2'); ?><?php echo date('Y');?> <?php bloginfo( 'sitename' ); ?><?php _e(', All Rights Reserved.', 'tansang2'); ?>
                        </div>
                </div>
        </div>
</footer>
</div>

<?php wp_footer(); ?>

</article>
</body>
</html>
