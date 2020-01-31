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
    <!-- nav btn -->
    <a href="#" class="btn btn-primary" data-action="toggle" data-side="right"><span>Toggle
            Right</span></a>

    <div id='wrap'>
        <header>
            <?php // 現在使用しているテンプレートファイル名を表示
        global $template; // テンプレートファイルのパスを取得
        $temp_name = basename($template); // パスの最後の名前（ファイル名）を取得
        echo '現在使用しているテンプレートファイル：'.$temp_name; // ファイル名の表示?>
            <?php get_template_part($tempPath.'template-nav'); ?>
        </header>
        <div class='container'>