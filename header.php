<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
    <div class="container">
    <header>
        <div class="header__logo">
            <h1><a href="<?php echo home_url() ?>"><?php bloginfo('name') ?></a></h1>
        </div>
        <?php 
            wp_nav_menu( array( 
                'theme_location' => 'header-navigation',
                'container'      => 'nav',
                'menu_class'     => 'nav__list',
            ) ); 
        ?>
        <div id="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </header>