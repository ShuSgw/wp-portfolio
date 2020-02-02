<!DOCTYPE html>
<html lang="en">
<?php $tempPath = '/templetes/global/'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('title'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <i class="fi-volume audioBtn">
        <div class='audioStopping'></div>
    </i>
    <canvas class="background">
    </canvas>
    <div id='wrap' <?php if (is_front_page()): echo 'class="js-viewPointHeigt" style="overflow:hidden;"'; ?>
        <?php endif; ?>>
        <header>
            <!-- nav btn -->
            <div class="hamburger">
                <span class="hamburger__line"></span>
                <span class="hamburger__line"></span>
                <span class="hamburger__line"></span>
            </div>
            <?php get_template_part($tempPath.'template-nav'); ?>
        </header>
        <div class='container'>