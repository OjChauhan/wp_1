<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

	</div><!-- #content -->

	<!-- Footer section starts here -->
	<footer id="Footer">
			<div class="container">
					<div class="social-share">
						<?php 
						function get_the_slug( $id=null ){
							if( empty($id) ):
								global $post;
								if( empty($post) )
									return ''; // No global $post var available.
								$id = $post->ID;
							endif;
						
							$slug = basename( get_permalink($id) );
							return $slug;
						}
						wp_nav_menu(array(
							'theme_location'=>'Social Links Menu',
							'menu' =>'Soc-Links',
							'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'before' => '<a href="#"><i class="fa fa-facebook fa-1g" aria-hidden="true"></i></a>',
						));
						?>
						<!--
							<ul>

									<li><a href="https://www.facebook.com"><i class="fa fa-facebook fa-1g" aria-hidden="true"></i></a></li>
									<li><a href="https://www.linkedin.com"><i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></a></li>
									<li><a href="https://twitter.com/login"><i class="fa fa-twitter fa-sm" aria-hidden="true"></i></a></li>
									<li><a href="https://www.instagram.com"><i class="fa fa-instagram fa-5=5x" aria-hidden="true"></i></a></li>

							</ul>
							-->
					</div>
					<div class="footer-logo-wrap">
							Design Studio &copy; <?php echo date('Y')?>. Designed by <a href="https://www.position2.com/">Position2</a>
					</div>
			</div>
	</footer>
	<!-- Footer section ends here -->
</section>
</body>

</html>

<?php
