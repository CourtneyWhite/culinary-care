    <footer id="footer" class="footer">
      <div class="wrapper">
      
        <div class="top">
          <div class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-footer.png" alt="Culinary Care">
          </div>
          
          <div class="newsletter">
            <h4>Together, We Can Help Families Facing Cancer.</h4>
            <form class="form-newsletter">
              <div class="form-item">
                <label for="email">Email Address</label>
                <input type="email" id="email">
              </div>
              <button class="btn grey">Sign Up</button>
            </form>
          </div>
          
          <div class="social-links">
            <h4>Spread One Less Worry</h4>
            <ul>
              <li><a href="" class="icon-facebook-white"></a></li>
              <li><a href="" class="icon-twitter-white"></a></li>
              <li><a href="" class="icon-instagram-white"></a></li>
              <li><a href="" class="icon-email-white"></a></li>
            </ul>
          </div>
          
          <nav class="footer-nav">
          <?php wp_nav_menu( array('menu'=>'Footer Menu') ); ?>
          </nav>
        </div>
    
        <div class="bottom">
          <div class="copyright">&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?></div>
          <div class="site-by"><a href="">Web Design</a>: Eleven Eleven Creative</div>
        </div>

      </div>
    </footer>
  
  </div>

	<?php wp_footer(); ?>
	
<script src="<?php bloginfo('template_directory'); ?>/assets/js/owl.carousel2.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/scripts.js"></script>
</body>
</html>