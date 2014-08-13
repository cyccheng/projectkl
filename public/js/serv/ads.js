/*Example:
	<a href='someURL' data-aid=1></a>
	$('a.ads').servAds();
*/
(function($){
	$.fn.servAds = function(options){
		var settings = $.extend({
			
		}, options);
		
		function generateAlertBox(text){
			var s = "<div data-alert class='alert-box alert'>"+text+"<a href='#' class='close'>&times;</a></div>";
			return s;
		};
		
		return this.each(function(){
			var ads = $(this);
			var hr = '';
			
			if (typeof ads.attr('href') == 'undefined' || typeof ads.attr('data-aid') == 'undefined') 
				return this;
			
			hr = ads.attr('href');
			ads.click(function(e){
				e.preventDefault();
				$.get('/ajax/serv/ads', {aid:ads.data('aid')}, function(d){
					if(d!=1) $('body').append(generateAlertBox("Something wrongs with the ads... please retry again"));
					else{
						$('a.ads').removeClass('ads');
						window.location.href = hr;
					}
				});
			}).removeAttr('href');
		});
	};
}(jQuery));