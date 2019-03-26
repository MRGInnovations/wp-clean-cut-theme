    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <?php 
              wp_nav_menu([
                'theme_location' => 'secondary',
                'container' => false,
                'menu_class' => 'list-inline',
                'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                'walker' => new WP_Bootstrap_Navwalker()
              ]);
            ?>
            <p class="copyright text-muted small">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> </p>
          </div>
        </div>
      </div>
    </footer>

    <?php wp_footer(); ?>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>