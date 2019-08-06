<?php
/**
 * 検索結果ページ用テンプレート
 */

get_header();
?>
<div id="primary" class="l-contentArea">
    <main id="main" class="l-main">
        <div class="search">
            <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <article>
                    <div>
                        <h3>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h3>
                        <div>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_excerpt(); ?>
                            </a>
                        </div>
                    </div>
            </article>
            <?php endwhile; ?>
            <?php else : // 検索ヒットしない場合 ?>
            <p>
                検索結果がありませんでした。<br>
                検索キーワードを変えて再度検索をお願いいたします。
            </p>

            <div class="searchBox">
                <?php get_search_form(); ?>
            </div>

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
                    'prev_text' => __('&lt;'),
                    'next_text' => __('&gt;'),
                ) );
                ?>

            </div>
        </div>
        <div class="">
            <div>
                <a href="/">TOPページへ戻る</a>
            </div><!-- /.m-btnTypeA -->
        </div>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
