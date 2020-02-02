<?php get_header(); ?>
<div id="fullpage">
    <?php if (have_posts()): while (have_posts()):the_post(); ?>
    <div class="section" data-anchor="<?php echo $post->post_name; ?>">
        <?php the_title(); ?>
        <a href="<?php the_permalink(); ?>">read more</a>
        <?php the_category(); ?>
    </div>
    <?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>