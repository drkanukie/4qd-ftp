<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package fourqd-child
 * Modified 4/5/16 EJR Linked log to home url;Linked facebook and google+ icons
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script>
if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
    var msViewportStyle = document.createElement("style");
    msViewportStyle.appendChild(
        document.createTextNode(
            "@-ms-viewport{width:auto!important}"
        )
    );
    document.getElementsByTagName("head")[0].
        appendChild(msViewportStyle);
}
</script>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- Google analytics code inserted 23rd January 2015 -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-57584625-1', 'auto');
  ga('send', 'pageview');

</script>
<div id="page" class="hfeed site">
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'fourqd' ); ?></a>
<header id="masthead" class="site-header" role="banner">
  <div class="wrapper">

  <!-- SVG logo -->
    <a href="http://www.4qd.co.uk"> <img class="logo" src="<?php bloginfo('template_url');?>-child/img/logo.svg"  alt="4QD - Electronic speed controllers for DC battery powered electric motors" > </a>
  
  <!-- contact details -->
    <div id="contactdetails">
      <p><a href="tel:+441487450520">+44 (0) 1487 450520</a><br>
      <a href="mailto:<?php echo antispambot( 'esales@4qd.co.uk' );?>" />
      <?php echo antispambot( 'esales@4qd.co.uk' );?></a></p>
      <p><a class="basket" href="http://www.4qd.co.uk/cart/">Shopping Basket</a></p>


<!-- p><a href="http://www.4qd.co.uk/my-account/">My Account</a> | </p -->
    </div>
  </div>

  <nav id="site-navigation" class="main-navigation" role="navigation">
    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
    <?php get_search_form() ?>
  </nav><!-- #site-navigation -->
</header><!-- #masthead -->

<?php if(is_page('36')) { ?>
<div id="slider"> <?php // echo do_shortcode('[layerslider id="1"]'); ?> </div> <?php }?> 
<div class="wrapper">