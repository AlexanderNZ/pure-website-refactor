<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Gridster
 */
?>

<div id="footer">
<?php _e('&copy; Copyright ') ?>
<?php the_time('Y') ?>
<?php bloginfo('name'); ?>
</div>
</div>
<!-- main -->
<?php wp_footer(); ?>
</body></html>