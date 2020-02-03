<div class="sidebars hiddenNav">
    <nav class='sidebar right global'>
        <?php wp_nav_menu(
            array(
                //カスタムメニュー名
                'theme_location' => 'global-navigation',
                'container' => false,
                'items_wrap' => '<ul class="global__ul">%3$s</ul>',
            )
        ); ?>
    </nav>
</div>