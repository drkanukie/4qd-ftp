<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package fourqd
 * EJR 10/05/16 added copyright line for the content
 */

?>
</div>
</div>

<div id="footer">
<div class="wrapper">

<div class="menu_title">CONTACT</div>
<div id="socialicons">
  <a href="https://www.facebook.com/4QD-Ltd-505913622936010/" target="_blank">
  <img class="social" src="<?php bloginfo('template_url');?>-child/img/facebook-logo.svg"  alt="4QD - Electronic speed controllers on Facebook" ></a>
  <a href="https://twitter.com/Steve4QD" target="_blank">
  <img class="social" src="<?php bloginfo('template_url');?>-child/img/twitter-social-logotype.svg"  alt="4QD - Electronic speed controllers on Twitter" ></a>
  <a href="https://www.linkedin.com/company/4qd-ltd" target="_blank">
  <img class="social" src="<?php bloginfo('template_url');?>-child/img/linkedin-logo.svg"  alt="4QD - Electronic speed controllers on LinkedIn" ></a>
  <a href="https://plus.google.com/110249060742429347258/" target="_blank">
  <img class="social" src="<?php bloginfo('template_url');?>-child/img/google-plus-social-logotype.svg"  alt="4QD - Electronic speed controllers on Google" ></a>
</div>

<div class="hrgrey"></div>

<div id="footercontact">
  <h3>Head Office:</h3>
  <p class="sub_title">4QD Ltd.<br>
  36 Greenfields<br>
  Earith, Cambridgeshire<br>
  PE28 3QH</p>

  <h3>Industrial Unit:</h3>
  <p class="sub_title">Unit 11 Meadow Drove Industrial Estate<br>
  Earith, Cambridgeshire<br>
  PE28 3QF</p>
</div>

<div id="footercontact">
  <p><span class="sub_title">Sales enquiries:</span> <a href="mailto:<?php
  echo antispambot( 'esales@4qd.co.uk' );
  ?>" /><?php
  echo antispambot( 'esales@4qd.co.uk' );
  ?></a></p>
  <p>
  <span class="sub_title">Technical support:</span> <a href="mailto:<?php
  echo antispambot( 'esupport@4qd.co.uk' );
  ?>" /><?php
  echo antispambot( 'esupport@4qd.co.uk' );
  ?></a></p>
  <p>
  <span class="sub_title">Buyers:</span> <a href="mailto:<?php
  echo antispambot( 'buyer@4qd.co.uk' );
  ?>" /><?php
  echo antispambot( 'buyer@4qd.co.uk' );
  ?></a></p>
  <p>
  <span class="sub_title">Webmaster:</span> <a href="mailto:<?php
  echo antispambot( 'webmaster@4qd.co.uk' );
  ?>" /><?php
  echo antispambot( 'webmaster@4qd.co.uk' );
  ?></a></p>
  <p><span class="sub_title">International:</span> <a href="tel:+441487450520">+44 1487 450 520</a></p>
  <p><span class="sub_title">UK:</span> <a href="tel:01487450520">01487 450520</a></p>
  <p><a href="http://www.4qd.co.uk/terms-and-conditions/">Terms and Conditions</a></p>
</div>

<div id="footerform">
  <?php echo apply_filters('the_content','[si-contact-form form="1"]');?>
</div>

</div>
<p class="copyright clearfix"> &copy 4QD Limited <?php echo date("Y"); ?> </p>
</div>

<?php wp_footer(); ?>

</body>
</html>