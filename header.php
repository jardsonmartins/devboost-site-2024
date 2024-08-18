<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/main.css">
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri() ?>/assets/images/favicon.svg">
    <title><?php bloginfo('name') ?> <?php wp_title('|') ?></title>
</head>
<body>

    <header id="topo">
        <div class="container">
            <a href="<?php echo get_home_url(); ?>">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.svg" alt="" class="logo">
            </a>
            <nav>
                <?php
                    $args = array(
                        'menu' => 'Header Principal',
                        'theme_location' => 'header-principal',
                        'container' => false
                    );
                    wp_nav_menu( $args );
                ?>
                <a href="<?php echo get_permalink(get_page_by_path('Contato')) ?>"><button class="btn-top">Fale conosco</button></a>

                <div class="btn-mobile" id="js-btn-menu-mobile">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/icon-menu-mobile.svg" alt="">
                </div>
            </nav>
        </div>
    </header>

    <div class="menu-mobile">
        <div class="overlay js-overlay"></div>
        <aside>
            <a href="<?php echo get_home_url(); ?>">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/Logo-black.svg" alt="" class="logo">
            </a>
            
            <?php
                $args = array(
                    'menu' => 'Header Principal',
                    'theme_location' => 'header-principal',
                    'container' => false
                );
                wp_nav_menu( $args );
            ?>
            <a href=""><button class="btn-top">Fale conosco</button></a>
        </aside>
    </div>