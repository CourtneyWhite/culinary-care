    <footer id="footer" class="footer">
      <div class="wrapper">
      
        <div class="top">
          <nav class="footer-nav">
            <?php wp_nav_menu( array('menu'=>'Footer Menu') ); ?>
          </nav>

          <div class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-footer.png" alt="Culinary Care">
          </div>
          
          <div class="newsletter">
            <h4>Together, We Can Help Families Facing Cancer.</h4>
            <form action="//culinarycare.us3.list-manage.com/subscribe/post?u=15b99d5d95daff6914d18c0e0&amp;id=67184f55fc" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate form-newsletter" target="_blank" novalidate>
              <div class="form-item">
              	<label for="mce-EMAIL">Get Email Updates</label>
              	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" required>
              </div>
              <div style="position: absolute; left: -5000px;"><input type="text" name="b_15b99d5d95daff6914d18c0e0_67184f55fc" tabindex="-1" value=""></div>
              <input type="submit" value="Sign Up" name="subscribe" id="mc-embedded-subscribe" class="btn button">
            </form>
          </div>
          
          <div class="social-links">
            <h4>Spread One Less Worry</h4>
            <ul>
              <li><a href="https://www.facebook.com/CulinaryCare/" target="_blank" class="icon-facebook-white"></a></li>
              <li><a href="https://twitter.com/culinarycare" target="_blank" class="icon-twitter-white"></a></li>
              <li><a href="http://instagram.com/culinarycare" target="_blank" class="icon-instagram-white"></a></li>
              <li><a href="/contact-us/" class="icon-email-white"></a></li>
            </ul>
          </div>
        </div>
    
        <div class="bottom">
          <div class="copyright">&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?></div>
          <div class="site-by"><a href="http://bradsawicki.com">Web Design</a>: Brad Sawicki</div>
        </div>

      </div>
    </footer>
  
  </div>

	<?php wp_footer(); ?>
	
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.bxslider.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/owl.carousel2.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/scripts.js"></script>
</body>
</html>