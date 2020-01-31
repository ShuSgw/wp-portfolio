<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()):the_post(); ?>
<p>
    <a href="<?php the_permalink(); ?>">
        <?php the_title(); ?>
    </a>
</p>
<?php endwhile; endif; ?>
<?php get_footer(); ?>