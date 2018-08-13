<!DOCTYPE html>
<html>

 <body>
 <article class="main_article">
 <header >
 <?php wp_head(); ?>

<!-- <div id="quote">
    <div class="row" >

    </div>
</div> -->

<div class="bg-header" style="height: 100px; ">
    <div id="quote" style="z-index: 10; height: 26px; border: 0.2px solid white;">
            <div class="row" >
                <p class="white-text center-align">Hãy liên hệ ngay cho chúng tôi để nhận được ưu đãi</p>
            </div>
    </div>
    <div class="container" style="height: 100%;">
        <div class="row" id="header-menu" style="height: 100%; ">
            <div class="logo col s12 l1" >
                <?php
                    $logo= get_theme_mod('logo');
                        if(!empty($logo)) {echo '<a href="'.get_home_url().'"><img src="'.$logo.'" /></a>';}
                ?>
            </div>
            <div class="main-menu col s12 l11" id="main-menu-ID" style="z-index: 9; ">
                <!-- wp_nav_menu( array( 'theme_location' => 'my-main-menu', 'container_class' => 'my-custom-main-menu-class' ) );  -->
                <?php echo do_shortcode( '[mtlevel_menu]' );?>
            </div>

            <div id="lines-button" style="z-index: 9;" onclick="thongbao();">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
        </div>
    </div>

</div>
</div>

  <!-- wp_nav_menu( array( 'theme_location' => 'my-main-menu', 'container_class' => 'my-custom-main-menu-class' ) );   -->

<!-- <div class="container" style="z-index: 6;">
     echo do_shortcode( '[woocommerce_cart]' ); 

    woocommerce_mini_cart() gio hang mini 
</div> -->

<div class="social-icons pull-right">
    <ul class="nav navbar-nav">
        <?php
            $fb= get_theme_mod( 'Facebook' );
            $fb= get_theme_mod( 'Twitter' );
            $fb= get_theme_mod( 'Linkedin' );

            if(!empty($fb)){echo '<li><a href="'.$fb.'"><i class="fa fa-facebook"></i></a></li>';}
            if(!empty($tw)){echo '<li><a href="'.$tw.'"><i class="fa fa-twitter"></i></a></li>';}
            if(!empty($ln)){echo '<li><a href="'.$ln.'"><i class="fa fa-linkdedin"></i></a></li>';}
        ?>
    </ul>
</div>

</header>

<style>
html, body {
    /* width: 100%; */
    /* height: 100%;
     */
}


/* .main_article {
    min-height: 100%;
    display: grid;
    grid-template-rows: auto 1fr auto;
    grid-template-columns: 100%;
} */
</style>

<!-- <!—[if lt IE 7]>
  <link rel="stylesheet" type="text/css" href="ie6.css" />
<![endif]—> -->

<style>
@media screen and (min-width: 980px) {

    html, body { margin: 0; padding: 0; height: 100%; }
    
    .main_article {
        min-height: 100%;
        display: grid;
        grid-template-rows: auto 1fr auto;
        grid-template-columns: 100%;
        position:relative;
    }

    #footer{
        width: 100%;
        position:relative;
        /* height: 100%; */
        bottom:0;
        margin-top: 100px;
    } 
    /* .post_type_book {margin-bottom: 200px;} */
}
</style>