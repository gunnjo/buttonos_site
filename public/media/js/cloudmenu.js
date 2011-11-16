/*
 * Cloud Menu
 *
 * Copyright © 2009 Curly Cloud Corporation.
 * All Rights Reserved.
 *
*/

(function($){

	$.fn.floater = function(options){

		var floater = buildfloater();

		floater.show = show;
		floater.hideIn = hideIn;
		floater.cancelHiding = cancelHiding;
		floater.willHideSoon = willHideSoon;

		floater.options = $.extend(true, {
			startPosition: {
				left: 0,
				top: 0,
			},
			animationDuration: 300,
			hideIn: 1000,
			floater: floater,
			timerHandle: null,
			appearingFirstTime: true
		}, options);

		floater.mouseenter(function(e){
			 floater.cancelHiding();
		});

		floater.mouseleave(function(e){
			floater.hideIn(floater.options.hideIn);
		});

		return floater;
	};

	function isIE6() {
		return ($.browser.msie && $.browser.version == "6.0");
	};

	function buildfloater() {
		var body	= $(document.createElement("div")).addClass("cloudmenufloater");
		var tip		= $(document.createElement("div")).addClass((isIE6()) ? "tip tipIE6" : "tip");
		var padding = $(document.createElement("div")).addClass((isIE6()) ? "padder padderIE6" : "padder");

		body.hide();
		body.append(tip);
		body.append(padding);

		$("body").append(body);
		return body;
	};

	function willHideSoon(){
		return (this.options.timerHandle != null);
	};

	function cancelHiding(){
		window.clearInterval(this.options.timerHandle);
		this.options.timerHandle = null;
	};

	function show(position){

		if(this.options.appearingFirstTime){
			this.options.appearingFirstTime = false;
			this.css({
				"left" : (this.options.startPosition.left - 480) + "px",
				"top" : (this.options.startPosition.top + 85) + "px"
			});
		}

		this.fadeIn(this.options.animationDuration);
		this.animate({
				"top": position.top +"px",
				"left": position.left + "px"
			}, {
				queue: false,
				duration: this.options.animationDuration
			}
		);

		if (this.willHideSoon())
			this.cancelHiding();
	};

	function hideIn(seconds) {
		var this_ = this;
		this.options.timerHandle = window.setTimeout(function(){
			this_.fadeOut(this_.options.animationDuration);
		}, seconds);
	};

})(jQuery);

(function($){
	$.fn.cloudMenu = function(opt) {
		var options = $.extend(true, {
			hideSubmenuIn: 1000,
			pushSubmenuDownBy: 25,
			animationDuration: 200
		}, opt);

		options.floater = $("").floater({
			animationDuration: options.animationDuration,
			startPosition: $("div#wrapper").position(),
		});

		options.padder = options.floater.find((isIE6()) ? ".padderIE6" : ".padder");

		return this.each(function() {
			var context = {options: options, target: $(this)};
			initialize(context);
		});
	};

	function isIE6() {
		return ($.browser.msie && $.browser.version == "6.0");
	};

	function initialize(context) {
		var self		= context.target;
		var topMenus	= self.find("ul:first");
		var listItems	= topMenus.children();

		self.addClass((isIE6()) ? "cloudmenuie6" : "");

		listItems.find("a:first").bind("mouseenter", context, topMenuEnter);
		listItems.find("a:first").bind("mouseleave", context, topMenuLeave);

		if (listItems.length > 0){
			$(listItems[listItems.length - 1]).find("a:first").addClass("last");
		}
	};

	function topMenuLeave(e){
		var target = $(e.target);
		var context = e.data;
		var hasSubmenus = (target.parent().find("ul").length > 0) ? true : false;

		if(context.options.floater && hasSubmenus){
			context.options.floater.hideIn(context.options.hideSubmenuIn);
		}
	};

	function topMenuEnter(e) {

		var target = $(e.target);

		function getChildList(){
			var childList = target.parent().find("ul").clone(true);
			childList.find("li:last").addClass("last");
			return childList;
		}

		var context = e.data;
		var childList = getChildList();

		if (childList.length == 0){
			return;
		}

		var targetPos	= target.position();
		var left		= ($('#wrapper').position().left - 480) + parseInt(targetPos.left);

		var top			= parseInt(targetPos.top);
		var padding		= parseInt(target.css("padding-left"));

		context.options.padder.empty();
		context.options.padder.append(childList);

		context.options.floater.show({
			top: top + context.options.pushSubmenuDownBy,
			left: (left + padding) - ($(".cloudmenufloater").width() / 2) + ($(target).width() / 2)
		})
	};
})(jQuery);