		<?php
		/**
		 *  The template for displaying Page.
		 *
		 *  @package lawyeria-lite
		 */
		get_header();
		?>
  			<section class="wide-nav">
				<div class="wrapper">
					<h3>
						<?php the_title(); ?>
					</h3><!--/h3-->
				</div><!--/div .wrapper-->
			</section><!--/section .wide-nav-->
		</header><!--/header-->
		<section id="content">
			<div class="wrapper cf">
				<div id="posts">
					<?php
						if ( have_posts() ) : while ( have_posts() ) : the_post();
						
					?>
					<div class="post">
						
						<div class="post-excerpt">
							<?php the_content(); ?>
						</div><!--/div .post-excerpt-->
												
						
					</div><!--/div .post-->
					<?php endwhile; else: ?>
                    	<p><?php _e('Sorry, no posts matched your criteria.', 'lawyeria-lite'); ?></p>
                	<?php endif; ?>
				</div><!--/div #posts-->
				<?php get_sidebar(); ?>
			</div><!--/div .wrapper-->
		</section><!--/section #content-->
		<?php get_footer(); ?>

		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.event.move.js" type="text/javascript"></script>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.twentytwenty.js" type="text/javascript"></script>
		<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/twentytwenty.css" type="text/css" media="screen" />
		<script>
		$(function(){
		  $("#container1").twentytwenty();
		});
		</script>