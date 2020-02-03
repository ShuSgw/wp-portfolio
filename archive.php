<?php get_header(); ?>
<div class='contents'>
    <div class='contents__main'>
        <h1 class='categoryTitle'>
            <?php $category = get_current_category(); ?>
            <?php echo $category->name; ?>
        </h1>
        <div class='flexBox'>
            <?php if (have_posts()): while (have_posts()):the_post(); ?>
            <div class='flexBox__contents'>
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('archive', array('class' => 'flexBox__thumb')); ?>
                    <p class='flexBox__text'><?php the_title(); ?></p>
                    <?php //the_category();?>
                </a>
            </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>