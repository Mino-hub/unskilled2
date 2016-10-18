<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" id="thema-css" href="<?php  echo get_stylesheet_directory_uri()."/style.css?". time(); ?>" type="text/css" media="all">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu+Mono" rel="stylesheet">
    <link rel="SHORTCUT ICON" href="<?php echo get_template_directory_uri();?>/img/favicon.png">
    <?php wp_head(); ?>
    <title><?php wp_title(); ?></title>
</head>

<body <?php body_class(); ?> >
    <?php gacode(); ?>
    <div id="top">
        <img src="<?php echo get_template_directory_uri();?>/img/retop.png">
    </div>
    <header>
        <a id="topimg" href="<?php echo site_url(); ?>">
            <img id="topimg-img" src="<?php  echo get_stylesheet_directory_uri()."/img/top.png"; ?>">
        </a>
    <div class="sep2"></div>
    </header>
