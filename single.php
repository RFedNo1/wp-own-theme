<?php
    get_header();
?>
        <div class="flex-container">
            <main>
            <?php while ( have_posts() ) : the_post(); ?>
                <article class="entry">
                    <h2 class="entry__title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                    <div class="category">- <?php the_category(' ') ?> -</div>
                    <div class="time"><?php the_date('Y年m月d日') ?></div>
                    <figure class="entry__thumbnail">
                        <?php the_post_thumbnail() ?>                        
                    </figure>
                    <div class="entry__content">
                        <p class="entry__content-desc">
                            <?php the_content() ?>
                        </p>
                    </div>
                </article>
                
            <?php endwhile; ?>
            <?php comments_template(); ?>
            </main>

            <?php get_sidebar() ?>

        </div><!-- .flex-container -->

    </div><!-- .container -->
<?php
    get_footer();
?>