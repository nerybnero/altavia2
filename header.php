<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="container">
                <div class="header__body">

                   <?php get_template_part('template/menu/header-menu') ?>

                   <a class="logo" href="<?php home_url(); ?>">
                        <img class="logo__img" src="<?php bloginfo('template_url'); ?>/assets/img/icon/logo.svg" alt="Логотип">
                    </a>

                    <a class="header__phone" href="tel:+7(499)350-55-79">
                       <span>+7 (499) 350-55-79</span> 
                    </a>

                </div>
            </div>
        </header>