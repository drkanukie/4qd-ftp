<?php
/**
 * The template for displaying taxonomy pages.
 * Template Name: Taxonomy
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package fourqd
 */

get_header(); ?>

<?php 

$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); // get current term

$parent = get_term($term->parent, get_query_var('taxonomy') ); // get parent term

$children = get_term_children($term->term_id, get_query_var('taxonomy')); // get children

if(($parent->term_id!="" && sizeof($children)>0)) {?>

<header class="page-header">
<?php if ( function_exists('yoast_breadcrumb') ) 
{yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
				<h1><?php single_cat_title(''); ?></h1>
				<div class="hrgreen"></div>
			</header><!-- .page-header -->


   <?php 
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); 
if ($term->parent == 0) {  
wp_list_categories('taxonomy=knowledge_category&depth=3&show_count=0
&title_li=&child_of=' . $term->term_id);
} else {
wp_list_categories('taxonomy=knowledge_category&show_count=0
&title_li=&child_of=' . $term->parent);	
}
?>

<?php }elseif(($parent->term_id!="") && (sizeof($children)==0)) { ?>

<?php if ( have_posts() ) : ?>	
<?php if ( function_exists('yoast_breadcrumb') ) 
{yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>

			<header class="page-header">
				<h1><?php single_cat_title(''); ?></h1>
				<div class="hrgreen"></div>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'knowledge' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>


<?php }elseif(($parent->term_id=="") && (sizeof($children)>0)) { ?>


<?php if ( function_exists('yoast_breadcrumb') ) 
{yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>

			<header class="page-header">
				<h1><?php single_cat_title(''); ?></h1>
				<div class="hrgreen"></div>
			</header><!-- .page-header -->


	<ul class="cats">
<?php 
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); 
if ($term->parent == 0) {  
wp_list_categories('taxonomy=knowledge_category&depth=1
&title_li=&child_of=' . $term->term_id);
 

} else {
wp_list_categories('taxonomy=knowledge_category
&title_li=&child_of=' . $term->parent);	
}
?>
</ul>


<?php   }
?>
<?php get_footer(); ?>