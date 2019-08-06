<?php
    get_header();
?>
        <div class="flex-container">
            <main>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article class="card">
                    <h2 class="card__title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                    <div class="category">- <?php the_category(' ') ?> -</div>
                    <div class="time"><?php the_date('Y年m月d日') ?></div>
                    <figure class="card__thumbnail">
                        <?php the_post_thumbnail() ?>
                    </figure>
                    <div class="card__content">
                        <p class="card__content-desc">
                            <?php the_excerpt() ?>
                        </p>
                        <p class="read"><a href="<?php the_permalink() ?>">続きを読む</a></p>
                    </div>
                </article>
            <?php endwhile; ?>
            <?php endif; ?>
            <div class="pagination">
            <?php // ページネーション
                global $wp_query;
                $big = 999999999;
                echo paginate_links( array(
                    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                    'format' => '?paged=%#%',
                    'current' => max( 1, get_query_var('paged') ),
                    'total' => $wp_query->max_num_pages,
                    'prev_text'          => __('&laquo;'),
                    'next_text'          => __('&raquo;'),
                ) );
            ?>
            </div>
            </main>

            <?php get_sidebar() ?>

        </div><!-- .flex-container -->

    </div><!-- .container -->
<?php
    get_footer();
?>