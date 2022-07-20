<?php get_header();?>

<div class="single">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="single__txt">
        <div class="destaque-infos">
            <h4 class="button-classificacao"><?php echo get_the_term_list( $post->ID, 'classificacao')?>
            <h4 class="button-duration"><?php echo esc_html( get_post_meta( get_the_ID(), 'tempo', true ) ); ?></h4>
        </div>
        <h2 class="title-single"><?php the_title();?></h2>
    </div>

    <!-- este código renderiza apenas o src do embed do Youtube, cuidado ao colocar o link no Post Type -->
    <iframe width="100%" src="<?php echo esc_html( get_post_meta( get_the_ID(), 'embed', true ) ); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    <div class="single__txt">
        <?php the_content();?>
    </div>
    <?php endwhile; else: ?><?php endif; ?>
</div>

<?php get_footer();?>