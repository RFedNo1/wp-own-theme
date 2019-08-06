<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
    <label for="search"></label>
    <input type="text" name="s" id="search" value="<?php esc_attr(the_search_query()); ?>" />
    <input type="submit" id="searchsubmit" value="検索"/>
</form>