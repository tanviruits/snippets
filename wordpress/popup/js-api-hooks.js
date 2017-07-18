//Case study outlive

function l_reload_page_with_js(){
	location.reload();
}
jQuery(document).ready(function(){
	jQuery('#pum-171').on('pumAfterClose', function () { l_reload_page_with_js(); });
	jQuery('#pum-225').on('pumAfterClose', function () { l_reload_page_with_js(); });
	jQuery('#pum-226').on('pumAfterClose', function () { l_reload_page_with_js(); });	
});

