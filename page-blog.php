

<?php
/*
Template Name: Blog
*/


get_header();

?>
	<div class="container" style="position: relative;">
			<div class="row">
				<div class="col s12">
<?php
				$myposts = get_posts('');
				foreach($myposts as $post) :
					setup_postdata($post);
?>
				<div class="post-item col s12 m4" style="display: inline-block;">
					<div class="post-info">
					<h2 class="post-title">
						<?php
							if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
							// the_post_thumbnail( 'full' ); // size
							the_post_thumbnail( 'thumbnail' );
							}
						?>
						<br>
						<h5><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
						<?php the_title(); ?>
						</a></h5>
					</h2>
					<p class="post-meta">Posted by <?php the_author(); ?></p>
					</div>
					<div class="post-content">
					<?php the_content(); ?>
					</div>
				</div>
<!-- php comments_template();  -->
				<?php endforeach; wp_reset_postdata(); ?>
				</div>
			</div>
	 </div>

<!-- $myposts = get_posts('');
foreach($myposts as $post) :
setup_postdata($post);
?>
 php the_title(); 
 php the_content(); ?>
php endforeach; wp_reset_postdata();  -->


<?php
	// get_sidebar();
	get_footer(); 

