<div id="sidebar">
    <?php get_search_form() ?>
    <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
            <?php dynamic_sidebar( 'sidebar-1' ); ?>
        </div><!-- #primary-sidebar -->
    <?php endif; ?>
</div>