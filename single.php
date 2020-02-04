<?php get_header(); ?>
<div class='contents'>
    <div class='contents__main'>
        <?php if (have_posts()): while (have_posts()):the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <div class="tags">
            <ul>
                <?php $tags = get_the_tags(); ?>
                <?php if ($tags):?>
                <?php foreach ($tags as $tag):?>
                <?php echo '<li class="tags__item white">'.$tag->name.'</li>'; ?>
                <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </div>
        <p><?php the_content(); ?></p>
        <div class='projectImaegs'>
            <?php if (get_field('image1')):?>
            <h2>Gallery</h2>
            <?php echo wp_get_attachment_image(get_post_meta($post->ID, 'image1', true), 'projectsImages'); ?>

            <?php endif; ?>
            <?php if (get_field('image2')):?>

            <?php echo wp_get_attachment_image(get_post_meta($post->ID, 'image2', true), 'projectsImages'); ?>

            <?php endif; ?>
            <?php if (get_field('image3')):?>

            <?php echo wp_get_attachment_image(get_post_meta($post->ID, 'image3', true), 'projectsImages'); ?>

            <?php endif; ?>
            <?php if (get_field('image4')):?>

            <?php echo wp_get_attachment_image(get_post_meta($post->ID, 'image4', true), 'projectsImages'); ?>

            <?php endif; ?>
        </div>
        <?php endwhile; endif; ?>
    </div>
</div>
<?php get_footer(); ?>