<?php get_header() ?>
<section class="main-background" style="padding-bottom: 450px">
    <video class="video-fullpage page-video hidden" poster="http://little-raven-website.local/wp-content/uploads/2018/04/vid-poster.png" autoplay="true" loop controls muted playsinline>
        <source src="http://little-raven-website.local/wp-content/uploads/2018/04/lr-live-vid-1.mp4" type="video/mp4">
        <source src="http://little-raven-website.local/wp-content/uploads/2018/04/lr-live-vid-1.webm" type="video/webm">
    </video>
    <h2>Error. Page Not Found.</h2>
    <p class="main-content-well">We're sorry. There's been an error. Please click the button below to go back to the home page and try again.</p>
    <a href="<?php echo get_site_url('/') ?>">
        <button class="main-button__color main-button__dimensions error-button main-button--margin">Back To Home</button>
    </a>
</section>
<?php get_footer(); ?>