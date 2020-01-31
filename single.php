<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()):the_post(); ?>
<div>
    <h1><?php the_title(); ?></h1>
    <p><?php the_content(); ?></p>
    <!--  -->
    <style>
    .sidebar.right {
        width: 30%;
    }
    </style>
    <div class="container" align="center">
        <h1>jQuery Sidebar Demo</h3>
            <h3>Toggle sidebars</h3>
            <div>
                <a href="#" class="btn btn-primary" data-action="toggle" data-side="left"><span>Toggle Left</span></a>
                <a href="#" class="btn btn-primary" data-action="toggle" data-side="top"><span>Toggle Top</span></a>
                <a href="#" class="btn btn-primary" data-action="toggle" data-side="right"><span>Toggle Right</span></a>
                <a href="#" class="btn btn-primary" data-action="toggle" data-side="bottom"><span>Toggle
                        Bottom</span></a>
            </div>

            <h3>Open sidebars</h3>
            <section class="example-buttons" class="clearfix">
                <a href="#" class="btn btn-success" data-action="open" data-side="left"><span>Open Left</span></a>
                <a href="#" class="btn btn-success" data-action="open" data-side="top"><span>Open Top</span></a>
                <a href="#" class="btn btn-success" data-action="open" data-side="right"><span>Open Right</span></a>
                <a href="#" class="btn btn-success" data-action="open" data-side="bottom"><span>Open Bottom</span></a>
            </section>

            <h3>Close sidebars</h3>
            <section class="example-buttons" class="clearfix">
                <a href="#" class="btn btn-danger" data-action="close" data-side="left"><span>Close Left</span></a>
                <a href="#" class="btn btn-danger" data-action="close" data-side="top"><span>Close Top</span></a>
                <a href="#" class="btn btn-danger" data-action="close" data-side="right"><span>Close Right</span></a>
                <a href="#" class="btn btn-danger" data-action="close" data-side="bottom"><span>Close Bottom</span></a>
            </section>
    </div>
    <div class="sidebars">
        <div class="sidebar left">Left</div>
        <div class="sidebar right">Right</div>
        <div class="sidebar top">Top</div>
        <div class="sidebar bottom">Bottom</div>
    </div>
    <!--  -->
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>