<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php wp_head(); ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="index, follow"/>
    <link rel="icon" type="image/png" sizes="16x16" href="<?= get_stylesheet_directory_uri() ?>/dist/img/favicon.png">


    <meta name="description" content="<?php bloginfo('description'); ?>">

    <meta property="og:locale" content="pt_BR">
    <meta property="og:type" content="article">
    <meta property="og:title" content="<?php the_title(); ?>">
    <meta property="og:description" content="<?php the_field('descricao-box-2-1', $post->ID); ?>">

    <meta property="og:site_name" content="<?php bloginfo('description'); ?>">

    <meta property="og:image" content="<?= get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>">
    <meta property="og:image:secure_url" content="<?= get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <title>
        <?php
        if (is_home()): bloginfo('name');
        elseif (is_category()): single_cat_title();
            echo ' - ';
            bloginfo('name');
        elseif (is_single()): single_post_title();
            echo ' - ';
            bloginfo('name');
        elseif (is_page()): single_post_title();
            echo ' - ';
            bloginfo('name');
        else: wp_title('', true);
        endif;
        ?>
    </title>

    <!--Poder de usar fotos flutuante no site.-->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/> -->

    <!--ESTILO DO SITE-->
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/dist/css/style.css">
</head>

<body>
<header>
    <div class="navbar-master">
        <div class="container content-navbar">

            <img alt="<?php the_title(); ?>" class="logo_empresa"
                 src="<?= get_stylesheet_directory_uri() ?>/dist/img/logo_empresa.png">

            <div id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <div id="bg-menu-mobile">
                <ul>
                    <li class="item_nav"><a class="link" href="<?php echo home_url() ?>/">HOME</a></li>
                    <li class="item_nav"><a class="link" href="<?php echo home_url() ?>/blog">BLOG</a></li>
                    <div class="rede-social-home d-md-none">
                        <a href="<?php the_field('rede-social-1') ?>">
                            <img src="<?= get_stylesheet_directory_uri() ?>/dist/img/facebook.png">
                        </a>
                        <a href="<?php the_field('rede-social-2') ?>">
                            <img src="<?= get_stylesheet_directory_uri() ?>/dist/img/instagram.png">
                        </a>
                    </div>
                </ul>
            </div>
        </div>
    </div>

</header>