<!-- sidebar left -->
<div class="sidebars hiddenNav">
    <div class='sidebar left wrapProjectsAndWidgetLists'>
        <ul class='homeList'>
            <?php if (is_active_sidebar('sidebar-1')) :?>
            <?php dynamic_sidebar('sidebar-1'); ?>
            <?php endif; ?>
            <?php $args = array('post_type' => 'post', 'posts_per_page' => 10); $the_query = get_posts($args); ?>
            <div class='projectListTitle'>Project List</div>
            <?php foreach ($the_query as $post) : setup_postdata($post); ?>
            <?php if ($post) : ?>
            <li class='homeList__li'>
                <a class='homeList__li__a' href="<?php the_permalink(); ?>">
                    <div class='homeList__li__a__proejctTitle'>
                        <?php the_title(); ?>
                    </div>
                    <small class='homeList__li__a__category'>
                        <?php $cat = get_the_category(); $cat = $cat[0]; echo $cat->cat_name; ?>
                    </small>
                </a>
            </li>
            <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

<!-- btn -->
<div class="projectMenuBtn">
    <span class="projectMenuBtn__text">Project List</span>
    <div class="projectMenuBtn__svgBox">
        <svg version="1.1" id="projListIcon" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 137.3 137.3"
            style="enable-background:new 0 0 137.3 137.3;" xml:space="preserve">
            <path class="st0" d="M68.6,5.6c-34.8,0-63,28.2-63,63s28.2,63,63,63s63-28.2,63-63" />
        </svg>
    </div>
</div>