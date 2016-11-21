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
  </div> <!-- wrapper -->
  <div id="footer">
          
    <div class="wrapper">    
      <h3>CONTACT</h3>
      <div class="hrgrey"></div>
      <div id="footercontact">
      
        <p><span class="greytext">Head Office:</span>
          <br>4QD Ltd.
          <br>36 Greenfields
          <br>Earith, Cambridgeshire
          <br>PE28 3QH</p>
        <p><span class="greytext">Industrial Unit:</span>
          <br>Unit 11 Meadow Drove Industrial Estate
          <br>Earith, Cambridgeshire
          <br>PE28 3QF</p>
        
        
        <p> &copy 4QD Limited 2016 </p>
      </div>
      <div id="footercontact">
        <p>
        <span class="greytext">Sales enquiries:</span> <a href="mailto:<?php echo antispambot( 'esales@4qd.co.uk' );?>" /><?php echo antispambot( 'esales@4qd.co.uk' );?></a>
        <br>
        <span class="greytext">Technical support:</span> <a href="mailto:<?php echo antispambot( 'esupport@4qd.co.uk' );?>" /><?php echo antispambot( 'esupport@4qd.co.uk' );?></a>
        <br>
        <span class="greytext">Buyers</span> <a href="mailto:<?php echo antispambot( 'buyer@4qd.co.uk' );?>" /><?php echo antispambot( 'buyer@4qd.co.uk' );?></a>
        <br>
        <span class="greytext">Webmaster:</span> <a href="mailto:<?php echo antispambot( 'webmaster@4qd.co.uk' );?>" /><?php echo antispambot( 'webmaster@4qd.co.uk' );?></a>
        <br>
        <span class="greytext">International:</span> +44 1487 450 520
        <br>
        <span class="greytext">UK:</span> 01487 450520
        <br>
        </p>
        <p><a href="http://www.4qd.co.uk/terms-and-conditions/">Terms and Conditions</a></p>
      </div>
      <div id="footerform" >
        <?php echo apply_filters('the_content','[si-contact-form form="1"]');?>
      </div>
    </div>
  </div>
  
  <?php //wp_footer(); ?>
  </body>
  </html>
