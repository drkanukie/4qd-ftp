<?php
/**
 * Template Name: Knowledgebase
 * Description: Knowledgebase
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */
get_header(); ?>

<h1>Knowledgebase</h1>
<div class="hrgreen"></div>

<ul class="cats">
      <?php 
$args = array(
  'orderby' => 'name',
  'hierarchical' => 1,
  'taxonomy' => 'knowledge_category',
  'hide_empty' => 0,
  'parent' => 0,
);

        $categories = get_categories($args);

        foreach($categories as $category) { ?>
<li class="knowledge-category">

<a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->cat_name; ?></a>
        <p><?php echo $category->description; ?></p>


<?php echo category_description(); ?>
</li>
             <?php   } 
      ?>
</ul>

<?php get_footer(); ?>
