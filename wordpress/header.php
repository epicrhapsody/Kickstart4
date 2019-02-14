<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?></title>
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
        <meta name="keywords" content="">

        <meta property="og:title" content="<?php bloginfo( 'name' ); ?>"/>
        <meta property="og:image" content="icons/og-image.jpg"/>
        <meta property="og:site_name" content="<?php bloginfo( 'name' ); ?>"/>
        <meta property="og:description" content="<?php bloginfo( 'description' ); ?>"/>

        <meta name="robots" content="index, follow" />

        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta http-equiv="cache-control" content="no-cache" />
        <meta http-equiv="pragma" content="no-cache" />
        
        <meta name="application-name" content="Kickstart">
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <link rel="apple-touch-startup-image" href="<?php echo esc_url( get_template_directory_uri() ); ?>/icons/startup.png">
        <meta name="theme-color" content="#fafafa">

        <link rel="manifest" href="<?php echo esc_url( get_template_directory_uri() ); ?>/manifest.json">
        <meta name="msapplication-config" content="<?php echo esc_url( get_template_directory_uri() ); ?>/browserconfig.xml" />
        <link rel="apple-touch-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/icons/icon.png">
        <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/icons/favicon.png" type="image/png">

        <?php wp_head(); ?>
        <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.min.css">

    </head>
    <body <?php body_class(); ?>>
        <div id="site">