<?php get_header();?>

<div class="post">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="post__header">
        <?php the_post_thumbnail();?>
        <h2><?php the_title();?></h2>
    </div>
    <div class="post__content">
        <?php the_content();?>
    </div>
    <?php endwhile; else: ?><?php endif; ?>
</div>

<?php get_footer();?>