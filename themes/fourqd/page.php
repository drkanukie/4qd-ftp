<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package fourqd
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>

		
</div></div>
<div id="quicklinks">
<div class="wrapper">
<div class="quicklink"><a href="http://www.4qd.co.uk/controllers/how-to-choose-a-controller/"><img src="<?php bloginfo('template_url');?>/img/choosing.jpg"  alt="4QD - Electronic speed controllers on Facebook"/ ><h2 class="quicklink1">How to Choose a Controller</h2></a></div>

<div class="quicklink"><a href="http://www.4qd.co.uk/product-category/controllers/"><img src="<?php bloginfo('template_url');?>/img/range.jpg"  alt="4QD - Electronic speed controllers on Facebook" /><h2 class="quicklink2">Controller Range</h2></a></div>


<div class="quicklink"><a href="http://www.4qd.co.uk/product-category/accessories/"><img src="<?php bloginfo('template_url');?>/img/cables.jpg"  alt="4QD - Electronic speed controllers on Facebook" /><h2 class="quicklink4">Accessories</h2></a></div>



<div class="quicklink"><a href="http://www.4qd.co.uk/faqs/"><img src="<?php bloginfo('template_url');?>/img/faqs.jpg"  alt="4QD - Electronic speed controllers on Facebook" /><h2 class="quicklink3">FAQs</h2></a></div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>