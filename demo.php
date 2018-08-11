<div class="col-sm-2">
    <div class="companyinfo">
        <h2>
            <?php $Name_web = get_theme_mod('Email');
                if(!empty($Name_web)) {echo $Name_web;}
            ?>
        </h2>
    </div>
</div>
<div class="col-sm-3">
    <div class="address">
        <img src="" alt="image" />
        <p>
            <?php $Addr_web = get_theme_mod('Addr_web');
                if(!empty($Addr_web)) {echo $Addr_web;}
            ?>
        </p>
    </div>
</div>

<div class="col-sm-4">
    <div class="logo pull-left">
        <?php
            $logo = get_theme_mod('logo');
                if(!empty($logo)) {echo '<a href="'.get_home_url().'"><img src="'.bloginfo( 'name' ).'" /></a>';}
        ?>
    </div>
</div>

-------------------------
<?php wp_nav_menu( array( 'container_class' => 'my-main-menu', 'theme_location' => 'Menu chính' ) ); ?>


 <li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>


 	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
	endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>