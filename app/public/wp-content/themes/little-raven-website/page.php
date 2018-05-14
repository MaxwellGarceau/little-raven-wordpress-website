<?php get_header() ?>
<section class="<?php 
	if(is_page(19) == true) {
		echo 'contact-background';
	} else {
		echo 'main-background';
	} 
	if (is_page(13)) { 
		echo ' bio__padding-bottom';
	}
 ?>">
    <video class="video-fullpage <?php if(is_page(19) != true) {echo 'page-video';} ?> hidden" poster="<?php echo wp_upload_dir()['baseurl'];?>/2018/04/vid-poster.png" autoplay="true" loop controls muted playsinline>
        <source src="<?php echo wp_upload_dir()['baseurl'];?>/2018/04/lr-live-vid-1.mp4" type="video/mp4">
        <source src="<?php echo wp_upload_dir()['baseurl'];?>/2018/04/lr-live-vid-1.webm" type="video/webm">
    </video>
    <h2><?php the_title(); ?></h2>
    <div class="<?php 
    	if(is_page(15) == true) {
			echo 'main-content-well-music';
		} else {
			echo 'main-content-well';
		} ?>">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
	the_content();
	endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>
    </div>
</section>
<?php get_footer(); ?>