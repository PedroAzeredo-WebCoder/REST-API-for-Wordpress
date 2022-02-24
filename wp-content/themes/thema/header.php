<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php echo bloginfo('charset'); ?>" />
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="<?php s3_nome_agencia(); ?>">
    <meta name="description" content="<?php echo get_bloginfo('description'); ?>" />
    <meta name="keywords" content="<?php s3_keywords(); ?>" />
    <meta name="copyright" content="© 2022 <?php s3_nome_agencia(); ?>" />
    <meta name="robots" content="all" />
    <meta name="robots" content="max-image-preview:standard" />
    <meta name="revisit-after" content="7 days" />
    <meta name="theme-color" />
    <meta name="msapplication-navbutton-color" />
    <meta name="msapplication-TileColor" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />

    <title><?php s3_title(); ?></title>

    <base href="<?php echo home_url(); ?>" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <header class="fixed-top">
        <nav class="navbar navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <i class="fa-brands fa-wordpress"></i>
                    Rest API Wordpress
                </a>
            </div>
        </nav>
    </header>