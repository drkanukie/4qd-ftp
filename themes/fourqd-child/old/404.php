<?php
/**
 * The template for displaying 404 pages (not found).
 * Modified: E Ricahrdson
 * Date: 24/4/16
 * Comment: A more useful 404 message, and notification about the redesign
 *
 * @package fourqd
 */

get_header(); ?>

	<div class="wrapper">
<div id="homecopy">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'fourqd' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p>It looks like nothing was found at this location. This may be because we have recently redeveloped our site, and some of the content may have moved. </p>
				
					<p> Please check our <a href="http://www.4qd.co.uk/product-category/controllers/">controller overview</a>, <a href="http://www.4qd.co.uk/faqs/">FAQs</a> or <a href="http://www.4qd.co.uk/knowledgebase/">Knowledgebase</a> , as you may find the content you are looking for there. </p>
					<p>Alternatively you can search for the content .. </p>

					<?php get_search_form(); ?>
					
					<p></p>

					

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</div><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>