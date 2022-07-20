
        <div class="home__destaque">
            <!-- este loop chama um Vídeo aleatório para ficar em destaque -->
            <?php $destaqueloop = new WP_Query( array( 'post_type' => 'videos', 'orderby' => 'rand', 'posts_per_page' => 1 ) );
                while ( $destaqueloop->have_posts() ) : $destaqueloop->the_post(); ?>

                <div class="home__destaque__item" style="background-image: url('<?php the_post_thumbnail_url();?>')" >
                    <div class="destaque-infos">
                        <h4 class="button-classificacao"><?php echo get_the_term_list( $post->ID, 'classificacao')?>
                        <h4 class="button-duration"><?php echo esc_html( get_post_meta( get_the_ID(), 'tempo', true ) ); ?></h4>
                    </div>
                    <h2 class="title-destaque"><?php the_title();?></h2>
                    <a href="<?php the_permalink();?>" class="assistir">Assistir</a>
                </div>


            <?php endwhile; wp_reset_query(); // Reseta o loop ?>
        </div>