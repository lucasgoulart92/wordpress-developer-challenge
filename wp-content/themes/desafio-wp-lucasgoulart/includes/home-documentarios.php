    <div class="documentarios">
        <h3 class="title-classificacao">Documentários</h3>
        <div class="videos">
            <?php $docsloop = new WP_Query( array( 'post_type' => 'videos', 'classificacao' => 'documentarios' ) );
                while ( $docsloop->have_posts() ) : $docsloop->the_post(); ?>
                <a class="videos__item" href="<?php the_permalink();?>">
                    <div class="videos__item__poster" style="background-image: url('<?php the_post_thumbnail_url();?>')"></div>
                    <h4 class="button-duration"><?php echo esc_html( get_post_meta( get_the_ID(), 'tempo', true ) ); ?></h4>
                    <h2 class="title-video"><?php the_title();?></h2>
                </a>
            <?php endwhile; wp_reset_query(); // Reseta o loop ?>
        </div>
    </div>