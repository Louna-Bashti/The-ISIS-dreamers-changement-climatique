<footer class="footer-panel">
  <div class="container">
    <?php
      if ( is_active_sidebar('ecology-nature-footer-sidebar')) {
        echo '<div class="row sidebar-area footer-area">';
          dynamic_sidebar('ecology-nature-footer-sidebar');
        echo '</div>';
      }
    ?>
  </div>
  <?php if ( get_theme_mod('ecology_nature_footer_enable_disable', true) == true ) : ?>
    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="copy-text">
              <p class="mb-0 py-3">
                <?php
                  if (!get_theme_mod('ecology_nature_footer_text') ) { ?>
                    <a href="<?php echo esc_url('https://www.misbahwp.com/themes/free-ecology-nature-wordpress-theme'); ?>" target="_blank"><?php esc_html_e('Ecology Nature WordPress Theme ','ecology-nature'); ?></a>
                  <?php } else {
                    echo esc_html(get_theme_mod('ecology_nature_footer_text'));
                  }
                ?>
                  <?php
                  /* translators: %s: Misbah WP */
                  printf( esc_html__( 'by %s', 'ecology-nature' ), 'Misbah WP' ); ?>
                  <a href="<?php echo esc_url('https://wordpress.org'); ?>" rel="generator"><?php  /* translators: %s: WordPress */  printf( esc_html__( ' | Proudly powered by %s', 'ecology-nature' ), 'WordPress' ); ?></a>
              </p>
            </div>
          </div>
        </div>
        <?php if ( get_theme_mod('ecology_nature_scroll_enable_setting', true) == true ) : ?>
          <div class="scroll-up">
              <a href="#tobottom"><i class="fa fa-arrow-up"></i></a>
          </div>
        <?php endif; ?>
      </div>
  </div>
  <?php endif; ?>
</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
