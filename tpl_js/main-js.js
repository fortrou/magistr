function initalize_swap(class_toggle, slide_time, twin_selector, max_resolution_for_click_action) {
	var max_click_resolution = max_resolution_for_click_action || 0;
	var slider_block    = 1;
	var class_wrapper   = class_toggle;
	var amount_elements = $("." + class_toggle).length;
	var sub_selector    = twin_selector || '';
	this.time_to_change = slide_time;
	this.interval_id;
	this.change_block = function() {
		$('.' + class_wrapper + "[data-section = " + slider_block + "]").hide(700);
		if(sub_selector != "") {
			$(sub_selector + "[data-rel-section = " + slider_block + "]").toggleClass("active");
		}
		slider_block++;
		if(slider_block > amount_elements) slider_block = 1;
		$('.' + class_wrapper + "[data-section = " + slider_block + "]").show(700);
		if(sub_selector != "") {
			$(sub_selector + "[data-rel-section = " + slider_block + "]").toggleClass("active");
		}
	}
	this.clearIntervalMethod = function() {
		clearInterval(this.interval_id)
	}
	this.click_block = function() {
		$('.' + class_wrapper).hide(100);
		$('.' + class_wrapper + "[data-section = " + slider_block + "]").show(700);
		if(sub_selector != "") {
			$(sub_selector + "[data-rel-section = " + slider_block + "]").toggleClass("active");
		}
	}
	this.setBlockNum = function(block_num) {
		slider_block = block_num;
	}
	this.unsetSelectedBlockClass = function() {
		if(sub_selector != "") {
			$(sub_selector + "[data-rel-section = " + slider_block + "]").toggleClass("active");
		}
	}
	this.run = function() {
		$('.' + class_wrapper).hide(100);
		$('.' + class_wrapper + "[data-section = " + slider_block + "]").show(700);
		if(sub_selector != "") {
			$(sub_selector + "[data-rel-section = " + slider_block + "]").toggleClass("active");
		}
		if(window.innerWidth < max_click_resolution) {
			this.interval_id = setInterval(this.change_block, this.time_to_change)
		}
	}
}
$(document).ready(function(){

	//HEADER-MENU
	var swap_main = new initalize_swap('sub-section', 7000, '.menu .menu-elements li', 767);
	swap_main.run();

	$(".menu .menu-elements li").click(function(){
		swap_main.clearIntervalMethod();
		swap_main.unsetSelectedBlockClass();
		swap_main.setBlockNum($(this).attr('data-rel-section'));
		swap_main.click_block();
	});


	//FOOTER-MENU
	$(".subject-title--orange").click(function () {
			$(this).next(".footer-list-block").toggle(300);
	})

})


