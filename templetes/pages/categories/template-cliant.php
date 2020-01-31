<?php
    $args = array(
        'post_type' => 'post', // 投稿タイプを指定
        'posts_per_page' => -1, // 表示するページ数
    );
    $the_query = get_posts($args);
?>
<div class="row">
    <?php foreach ($the_query as $post) : setup_postdata($post); ?>
    <div class="col-4 image_gallery">
        <a class="card" href="<?php the_permalink(); ?>">
            <div class="imgWrap">
                <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top"
                    alt="nana's greeen tea">
            </div>
            <div class="card-body">
                <h5 class="card-title">
                    <?php the_title(); ?>
                </h5>
            </div>
        </a>
    </div>
    <?php endforeach; ?>
</div>