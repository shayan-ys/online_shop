(function($){
	$.fn.ham3dModalbox = function(options) {
		var defaults = {
			html : '',
			auto : 'no',
			functions : function() {}
		};
		
		var opts = $.extend(defaults, options);
		
		function create_modal(on) {
			if($("#modalbox-wrap").length > 0) {
				$('#modalbox-wrap').remove();
			}

			elm = $('<div id="modalbox-wrap"><div id="modalbox-box" class="Radius15px" style="margin-top: -32px;><a class="Transition2s" id="modalbox-close" href="#"></a><p><br class="clear" /></p></div></div>');

			$("body").prepend(elm);

			$("#modalbox-wrap").fadeTo("slow", 1);
			
			$('#modalbox-bg, a#modalbox-close').click(function () {
				$("#modalbox-wrap").fadeOut();
				return false;
			});
			//$("#modalbox-wrap").fadeOut(15000);			
		
			$("#modalbox-box").find("p").html( on ).hide().fadeIn();

			opts.functions();

			return false;
		}

		if(opts.auto == "no") {
			return this.unbind("click").click(function() {
				create_modal(opts.html);			
			});
		} else {
			return this.each(function() {
				create_modal(opts.html);
			});		
		}
	}
})(jQuery);