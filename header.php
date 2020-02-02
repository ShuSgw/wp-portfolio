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
    <audio class='audio' controls>
        <source src="<?php echo get_stylesheet_directory_uri(); ?>/src/sample.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
    <canvas class="background">
    </canvas>
    <div id='wrap' <?php if (is_front_page()): echo 'class="js-viewPointHeigt" style="overflow:hidden;"'; ?>
        <?php endif; ?>>
        <header>
            <!-- nav btn -->
            <!-- <a href="#" class="btn btn-primary" data-action="toggle" data-side="right">
                <span>Toggle Right</span>
            </a> -->
            <!-- <button class='btn-primary' id='sample'>sample</button> -->
            <div class="hamburger">
                <span class="hamburger__line"></span>
                <span class="hamburger__line"></span>
                <span class="hamburger__line"></span>
            </div>
            <?php get_template_part($tempPath.'template-nav'); ?>
        </header>
        <div class='container'>