     <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2><?php echo get_theme_mod('banner_heading', "Síguenos en:");?></h2>
                </div>
                <div class="col-lg-6">
                    <ul class="list-inline banner-social-buttons">
                        <?php if(get_theme_mod('facebook_url', 'https://www.facebook.com/') != '') : ?>
                    <li><a class="btn  btn-default  btn-lg"><i class="fa fa-facebook fa-fw" href="<?php echo get_theme_mod('facebook_url', 'https://www.facebook.com/'); ?>" target="_blank"></i>Facebook</a></li>
                    <?php endif;?>
                    <?php if(get_theme_mod('facebook_url', 'https://www.linkedin.com/') != '') :?>
                    <li><a class="btn  btn-default  btn-lg"><i class="fa fa-linkedin fa-fw" href="<?php echo get_theme_mod('linkedin_url', 'https://www.linkedin.com/'); ?>" target="_blank"></i>Linkedin</a></li>
                    <?php endif;?>
                    <?php if(get_theme_mod('twitter_url', 'https://www.twitter.com/') != '') :?>
                    <li><a class="btn  btn-default  btn-lg"><i class="fa fa-twitter fa-fw" href="<?php echo get_theme_mod('twitter_url', 'https://www.twitter.com/'); ?>" target="_blank"></i>Twitter</a></li>
                    <?php endif;?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#about">About</a>
                        </li>
                        <li>
                            <a href="#services">Services</a>
                        </li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; CleanCut Theme 2017</p>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>