
<?php get_header(); ?>

<div class="container">
          <div class="row">
            <div class="col-md-10 col-md-offset-1 text-center imgMod">
              	<img src="http://livedemo00.template-help.com/magento_37205/media/catalog/product/cache/1/small_image/107x160/9df78eab33525d08d6e5fb8d27136e95/p/i/pic1.jpg" class="hvr-float-shadow" alt="Responsive image">
              	<img src="http://livedemo00.template-help.com/magento_37205/media/catalog/product/cache/1/small_image/107x160/9df78eab33525d08d6e5fb8d27136e95/p/i/pic1.jpg" class=" " alt="Responsive image">
              	<img src="http://livedemo00.template-help.com/magento_37205/media/catalog/product/cache/1/small_image/107x160/9df78eab33525d08d6e5fb8d27136e95/p/i/pic1.jpg" class=" " alt="Responsive image">
              	<img src="http://livedemo00.template-help.com/magento_37205/media/catalog/product/cache/1/small_image/107x160/9df78eab33525d08d6e5fb8d27136e95/p/i/pic1.jpg" class=" " alt="Responsive image">
             	 <img src="http://livedemo00.template-help.com/magento_37205/media/catalog/product/cache/1/small_image/107x160/9df78eab33525d08d6e5fb8d27136e95/p/i/pic1.jpg" class=" " alt="Responsive image">
              	<br>
             	 <img src="http://livedemo00.template-help.com/magento_37205/media/catalog/product/cache/1/small_image/107x160/9df78eab33525d08d6e5fb8d27136e95/p/i/pic1.jpg" class=" " alt="Responsive image">
             	 <img src="http://livedemo00.template-help.com/magento_37205/media/catalog/product/cache/1/small_image/107x160/9df78eab33525d08d6e5fb8d27136e95/p/i/pic1.jpg" class=" " alt="Responsive image">
             	 <img src="http://livedemo00.template-help.com/magento_37205/media/catalog/product/cache/1/small_image/107x160/9df78eab33525d08d6e5fb8d27136e95/p/i/pic1.jpg" class=" " alt="Responsive image">
             	 <img src="http://livedemo00.template-help.com/magento_37205/media/catalog/product/cache/1/small_image/107x160/9df78eab33525d08d6e5fb8d27136e95/p/i/pic1.jpg" class=" " alt="Responsive image">
             	 <img src="http://livedemo00.template-help.com/magento_37205/media/catalog/product/cache/1/small_image/107x160/9df78eab33525d08d6e5fb8d27136e95/p/i/pic1.jpg" class=" " alt="Responsive image">
             	 <br>
              	<img src="http://livedemo00.template-help.com/magento_37205/media/catalog/product/cache/1/small_image/107x160/9df78eab33525d08d6e5fb8d27136e95/p/i/pic1.jpg" class=" " alt="Responsive image">
            	
            	<div class="content">
					<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="">
								<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
							</div><!--.post-header-->
							<div class="">
								<?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
							</div><!--. entry-->
						</div><!-- .post-->
					<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
						<nav class="navigation index">
							<div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
							<div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
						</nav><!--.navigation-->
					<?php else : ?>
				<?php endif; ?>
				</div><!-- class="content--"></!-->
				        </div>
				      </div>
				 </div> <!--/ Container -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>