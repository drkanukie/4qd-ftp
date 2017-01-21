<?php
/**
 * The template for Google translate function - change it all in one place
 *
 * @package fourqd
 * 
 * History:
 * Tim 21/1/17 - created
 * 
 */
?>

<!-- 
TRANSLATE ELEMENT
NOTE function callback set-up to target this element id 
-->
<div id="google_translate_element"></div>
<script type="text/javascript">

function googleTranslateElementInit() {
	// init callback function 
	//
	// Added analytics tracking
	//
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, gaTrack: true, gaId: 'UA-57584625-1'}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<!-- 
END TRANSLATE ELEMENT
-->
