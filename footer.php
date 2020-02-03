</div><!-- container -->
<?php get_sidebar(); ?>
<footer>
    <small>
        <?php echo 'Copyright'; ?>&copy;
        <?php echo '&nbsp;'; bloginfo('title'); ?>
        <?php echo '&nbsp;'; echo date('Y'); ?>
    </small>
    <?php wp_footer(); ?>
</footer>
</div><!-- wrap -->
<audio id='audio' controls loop>
    <source src="<?php echo get_stylesheet_directory_uri(); ?>/src/audio.mp3" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>
</body>

</html>