<?php get_header(); ?>
<div class='contents'>
    <div class='contents__main'>
        <h1 class='categoryTitle'>
            <?php $category = get_current_category(); ?>
            <?php echo $category->name; ?>
        </h1>
        <div class='flexBox'>
            <?php if (have_posts()): while (have_posts()):the_post(); ?>
            <a class='flexBox__contents' href="<?php the_permalink(); ?>">
                <?php if (has_post_thumbnail()):?>
                <?php the_post_thumbnail('archive', array('class' => 'flexBox__contents__thumb')); ?>
                <?php else : ?>

                <img src='https://dummyimage.com/medrect' alt="">
                <?php endif; ?>
                <div class='flexBox__contents__text'><?php the_title(); ?></div>
                <?php //the_category();?>
            </a>
            <?php endwhile; endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>