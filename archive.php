<?php get_header(); ?>
<h1>
    <?php $category = get_current_category(); ?>
    <?php echo $category->name; ?>
</h1>
<?php if (have_posts()): while (have_posts()):the_post(); ?>
<p>
    <?php the_title(); ?>
    <a href="<?php the_permalink(); ?>">read more</a>
    <?php the_category(); ?>
</p>
<?php endwhile; endif; ?>
<?php get_footer(); ?>