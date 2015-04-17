<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
<div class="container-fluid footerMod boxShadowed">  
          <div class="row">
            <div class="col-md-3 col-md-offset-1">
            <h4>О нас</h4>
              <ul class="ulMod">
                <li><h5>О сайте</h5></li>
                <li><h5>Контакты</h5></li>
                <li><h5>Помощь</h5></li>
              </ul>
            </div>
            <div class="col-md-3">
             <h4>Моя страница</h4>
             <ul class="ulMod">
                <li><h5>Моя страница</h5></li>
                <li><h5>Список прочитанных книг</h5></li>
                <li><h5>Список желаний</h5></li>
              </ul>
            </div>
            
            <div class="col-md-4">
              <div><h4>Мы в социальных сетях</h4></div>
              <div class="socialGroup">
                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/socials/Facebook.png"></a>
                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/socials/Tumblr.png"></a>
                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/socials/Twitter.png"></a>
                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/socials/Google+.png"></a>
              </div>
            </div> 
          </div>


          <div class="row">
            <div class="col-md-10 col-md-offset-1 footerMod">
              <span>@ 2015 New YearYork</span>
            </div>
          </div>
        </div>
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>
        <?php wp_footer(); ?>
    </body>
</html>
