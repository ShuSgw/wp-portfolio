<div class="sidebars hiddenNav">
    <nav class='sidebar right'>
        <?php wp_nav_menu(
            array(
                //カスタムメニュー名
                'theme_location' => 'global-navigation',
                'container' => false,
                'items_wrap' => '<ul>%3$s</ul>',
            )
        ); ?>
    </nav>
</div>