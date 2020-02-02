<!-- sidebar left -->
<div class="sidebars hiddenNav">
    <ul class='sidebar left'>
        <?php if (have_posts()): while (have_posts()):the_post(); ?>
        <li data-menuanchor="project3" class="active projectMenu__li">
            <a href="#<?php echo $post->post_name; ?>">
                <h5><?php the_title(); ?></h5>
                <p>
                    <?php $cat = get_the_category(); $cat = $cat[0]; echo $cat->cat_name; ?>
                </p>
            </a>
        </li>
        <?php endwhile; endif; ?>
        <?php if (is_active_sidebar('sidebar-1')) :?>
        <?php dynamic_sidebar('sidebar-1'); ?>
        <?php endif; ?>
    </ul>
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