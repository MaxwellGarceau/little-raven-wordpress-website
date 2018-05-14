<?php get_header() ?>
<section id="home">
    <!-- background video here -->
    <video class="video-fullpage" poster="<?php echo wp_upload_dir()['baseurl'];?>/2018/04/vid-poster.png" autoplay="true" loop controls muted playsinline>
        <source src="<?php echo wp_upload_dir()['baseurl'];?>/2018/04/vid-bgvid.mp4" type="video/mp4">
        <source src="<?php echo wp_upload_dir()['baseurl'];?>/2018/04/vid-bgvid.webm" type="video/webm">
    </video>
    <div class="main-content">
        <h1>Little Raven</h1>
        <div class="newsfeed-gap"></div>
        <h4 class="newsfeed-title">Newsfeed</h4>
        <?php 
		while(have_posts()) {
			the_post();
			?>
        <div class="main-content-well newsfeed__margin">
            <h6 class="newsfeed-post-title"><?php the_title(); ?></h6>
            <div class="meta-box">
                <p>Posted by
                    <?php the_author_posts_link(); ?> on
                    <?php the_time('F, Y'); ?>
                </p>
            </div>
            <div class="generic-content main-content-well newsfeed-well__width">
                <?php the_excerpt(); ?>
                <p><a href="<?php the_permalink(); ?>">Continue Reading &raquo;</a></p>
            </div>
        </div>
        <?php } echo paginate_links(); ?>
    </div>
</section>
<?php get_footer(); ?>