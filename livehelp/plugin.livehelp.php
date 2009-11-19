<?php
/*
Plugin Name: Live Help (http://olark.com)
Plugin URI: http://blog.andyhot.gr
Description: Adds olark's live help code - allows visitors to contact your IM
Author: Andreas Andreou.
Version: 1.0
Author URI: http://blog.andyhot.gr
*/ 
 
function plugin_livehelp() {
	$olark_key = '7682-203-10-8874';
?>
<script type="text/javascript">
 var hblProto = document.location.protocol == 'https:' ? "https:" : "http:";
 document.write(unescape('%3Cscript src=\'' + hblProto + '//static.olark.com/js/wc.js\' type=\'text/javascript\'%3E%3C/script%3E'));
 </script> <a href="http://olark.com/#<?php echo $olark_key?>" id="hbl_code">Olark Livehelp</a> <script type="text/javascript"> wc_init(); </script>
<?php
}
add_action('wp_footer', 'plugin_livehelp');
?>