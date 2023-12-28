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

                   <a class="header__logo logo" href="<?php home_url(); ?>">
                        <?php get_template_part('template/logo/logo') ?>
                    </a>

                    <a class="header__phone phone" href="tel:+7(499)350-55-79">
                       <span>+7 (499) 350-55-79</span> 
                    </a>
                    <?php display_button_small('Получить консультацию');?>   
                </div>
            </div>
        </header>