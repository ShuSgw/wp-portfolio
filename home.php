<?php get_header(); ?>
<div id="fullpage" class='contents'>
    <?php $num = 1; ?>
    <?php if (have_posts()): while (have_posts()):the_post(); ?>
    <div class="section">
        <a href="<?php the_permalink(); ?>">
            <div class="projectListBox">
                <div class='projectListBox__image'>
                    <?php the_post_thumbnail('dynamicProjectThumb'); ?>
                </div>
            </div>
            <div class="projectListBox__title">
                <div class="projectListBox__title__num projectListBox__title__num--changed">
                    <?php echo $num++; ?>
                </div>
                <h3 class="projectListBox__title__name">
                    <?php the_title(); ?>
                </h3>
            </div>
        </a>
        <?php //the_category();?>
    </div>
    <?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>
<?php //if ($num < 10): echo 'lessThan10'; endif;?>
<!-- <div class="contents fullpage"> -->
<!-- <section class="section projects">
    <div class="main main--project">
        <a href="jnd.html">
            <div class="projectListBox">
                <div class="projectListBox__image">
                    <img src="./assets/img/thum_pet_finder.png" alt="">
                </div>
                <div class="projectListBox__title">
                    <div
                        class="projectListBox__title__num projectListBox__title__num--changed projectListBox__title__num--num1">
                        1</div>
                    <h3 class="projectListBox__title__name">Jnd Education Taiwan</h3>
                </div>
            </div>
        </a>
    </div>
</section> -->