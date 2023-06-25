<?php
/*
* -------------------------------------------------------------------------------------
* @author: Doothemes
* @author URI: https://doothemes.com/
* @copyright: (c) 2018 Doothemes. All rights reserved
* -------------------------------------------------------------------------------------
*
* @since 2.1.3
*
*/

get_header();
doo_glossary();
?>
<div class="module">
	<div class="content csearch">
	<?php
    if(doo_isset($_GET,'letter') == 'true') {
		get_template_part('pages/letter');
	} else {
		get_template_part('pages/search');
	}
    doo_pagination();
    ?>
	</div>
	<?php get_template_part('inc/parts/sidebar'); ?>
</div>
<?php get_footer(); ?>
