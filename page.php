<?php
    get_header();
?>
        <main>
        <?php while ( have_posts() ) : the_post(); ?>
            <article class="entry">
                <h2 class="entry__title">プロフィールです</h2>
                <figure class="entry__thumbnail">
                    <?php the_post_thumbnail() ?>
                </figure>
                <div class="entry__content">
                    <?php the_content() ?>
                </div>
            </article>
        <?php endwhile; ?>
        </main>

    </div><!-- .container -->
<?php
    get_footer();
?>