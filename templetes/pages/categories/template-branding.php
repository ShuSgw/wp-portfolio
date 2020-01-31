<?php
    $args = array(
        'post_type' => 'post', // 投稿タイプを指定
        'posts_per_page' => -1, // 表示するページ数
    );
    $the_query = get_posts($args);
?>
<div class="row">
    <?php foreach ($the_query as $post) : setup_postdata($post); ?>
    <?php if (isset(get_field('galleryimage1', get_the_ID())['url'])):?>
        <div class="col-4 image_gallery">
            <a class="card" href="<?php echo get_field('galleryimage1', get_the_ID())['url']; ?>"
                data-imagelightbox="e" class="attachimage">
                <div class="imgWrap">
                    <img src="<?php echo get_field('galleryimage1', get_the_ID())['url']; ?>" class="card-img-top"
                        alt="nana's greeen tea">
                </div>
                <div class="card-body">
                    <h5 class="card-title">
                        <?php echo get_field('galleryimage1', get_the_ID())['title']; ?>
                        <small>(<?php the_title(); ?>)</small>
                    </h5>
                </div>
            </a>
        </div>
    <?php endif; ?>
    <?php endforeach; ?>
</div>  