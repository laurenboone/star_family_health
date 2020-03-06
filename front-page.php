<?php get_header();

    // the_title();
    // get_the_title();
    // the_ID();
    // get_the_id();

?>
<body id="body-background">
    <div>
        <div class="page-banner">
        <div><a href=""></a></div>
            <div class="widget-wrap page-banner__content container t-center c-white">
            <h2>Find the right care...</h2>
            <a href="<?php echo get_post_type_archive_link('program') ?>" class="button button-hero">Search</a>
            </div>
        </div>
    </div>
</body>

<?php get_footer(); ?>