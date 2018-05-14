<?php get_header() ?>
<section class="main-background bio__padding-bottom">
    <div class="single-post__margin"></div>
    <?php 
	while(have_posts()) {
		the_post();
		?>
    <div class="newsfeed__margin">
        <h6 class="newsfeed-post-title single-title__font"><?php the_title(); ?></h6>
        <div class="meta-box">
            <p>Posted by
                <?php the_author_posts_link(); ?> on
                <?php the_time('F, Y'); ?>
            </p>
        </div>
        <div class="generic-content main-content-well newsfeed-well__width">
            <?php the_content(); ?>
        </div>
    </div>
    <?php } ?>
    <a href="<?php echo site_url('/') ?>">
        <div class="single-link--box">Back to Newsfeed</div>
    </a>
</section>
<?php get_footer(); ?>