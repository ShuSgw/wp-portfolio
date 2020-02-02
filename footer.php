</div><!-- container -->
<?php if (is_home()):?>
<?php get_sidebar(); ?>
<?php endif; ?>
<footer>
    <small>
        <?php echo 'Copyright'; ?>&copy;
        <?php echo '&nbsp;'; bloginfo('title'); ?>
        <?php echo '&nbsp;'; echo date('Y'); ?>
    </small>
    <?php wp_footer(); ?>
</footer>
</div><!-- wrap -->
</body>

</html>