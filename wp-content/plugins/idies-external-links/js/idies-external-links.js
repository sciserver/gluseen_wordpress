+function ($) {
	$(document).ready(function(){

		//ensure all links with an external-link class open a new tab
		var $ext_links = $("li.external-link>a");
		$($ext_links).each(function(){
			$(this).addClass("external-link");
		});					  						
		$.merge($ext_links , $("a.external-link"));
		$($ext_links).each(function(){
			$(this).attr("target","_blank");
		});					  						
	})
}(jQuery);
;
