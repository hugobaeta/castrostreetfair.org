<?php
/**
 * Template Name: Board of Directors
 *
 * @package CastroStreetFair
 */

get_header(); ?>

	<div id="primary" class="content-area full-width">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header><!-- .entry-header -->

					<div class="entry-content">

						<?php if( have_rows('board-members') ): ?>
							<ul class="board-members">

							<?php while( have_rows('board-members') ): the_row();
								// vars
								$photo = get_sub_field('board-member-photo');
								$name = get_sub_field('board-member-name');
								$position = get_sub_field('board-member-position');
								?>

								<li class="board-member">
									<figure>

										<?php if( $photo ): ?>
										<img src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt'] ?>" />
										<?php endif; ?>

										<figcaption>
												<h2><?php echo $name; ?></h2>
												<p><?php echo $position; ?></p>
										</figcaption>

									</figure>
								</li>
							<?php endwhile; ?>

							</ul>
						<?php endif; // Board Members ACF Repeater ?>

					</div><!-- .entry-content -->

				</article><!-- #post-## -->

		</main><!-- #main -->
	</div><!-- #primary -->

	<aside id="secondary" class="widget-area" role="complementary">
		<?php the_content(); //Sidebar content ?>
	</aside><!-- #secondary -->

	<?php endwhile; // End of the loop. ?>

<?php
get_footer();
