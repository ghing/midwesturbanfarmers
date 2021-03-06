<footer id="content-info" role="contentinfo">
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
  </div>
</footer>

<?php if (GOOGLE_ANALYTICS_ID) : ?>
<script>
  var _gaq=[['_setAccount','<?php echo GOOGLE_ANALYTICS_ID; ?>'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
<?php endif; ?>

<?php if (is_front_page()): ?>
<script>
;(function($) {
  $(function() {
    // TODO: Consider manual slideshow.
    // See http://jquery.malsup.com/cycle/nowrap.html
    $( '#banner .content ul.cycle' ).cycle({
      timeout: 6000
    });
  });
})(jQuery);
</script>
<?php endif; ?>

<?php wp_footer(); ?>
