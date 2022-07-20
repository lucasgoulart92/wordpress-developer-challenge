<?php get_header();?>

    <div class="archive">

        <?php $term = get_queried_object(); ?>
    
        <div class="archive-txt">
            <h2 class="title-archive"><?php echo $term->name; ?></h2>
            <p class="tag-description"><?php echo $term->description; ?></p>
        </div>
    
        <div class="archive-videos">
            <?php if (have_posts()) : while (have_posts()) : The_post() ; ?>
                <a class="videos__item" href="<?php the_permalink();?>">
                    <div class="videos__item__poster" style="background-image: url('<?php the_post_thumbnail_url();?>')"></div>
                    <h4 class="button-duration"><?php echo esc_html( get_post_meta( get_the_ID(), 'tempo', true ) ); ?></h4>
                    <h2 class="title-video"><?php the_title();?></h2>
                </a>
            <?php 
                endwhile;
                else :
                endif;
            ?>
        </div>

    </div>


<?php get_footer();?>