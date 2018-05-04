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
	});

	//AUTH-FORM-POPUP
	$(".js-auth-form").click(function (event) {
		$(".auth-form").toggle(300);
		event.preventDefault();
	});
	$(".close-form").click(function () {
		$(".auth-form").hide(300);
	});	


	$(".js-second-phone").click(function (event) {
		//alert('Hello');
		$("a.contacts-phone-second > div.contacts-text").toggle(300);
		$("a.contacts-phone-second > span.contacts-text").toggle(300);
		event.preventDefault();
		function mediaSize() { 
		if (window.matchMedia('(max-width: 600px)').matches) {
			$('a.contacts-phone-first').removeClass('contacts-phone-first').addClass('contacts-phone-second')
			$('span.contacts-text.hide-480').css({'display':'block','top':'81px'});
		} else {
		/* Reset for CSS changes – Still need a better way to do this! */
		}
	};
  	mediaSize();
	});


	$("li#mobMenu").click(function (event) {
		//alert('11111111111111111');
		$(".block-right-mobile").toggle(300);
		event.preventDefault();
	});

	//TABS 
	  $(function() {
    	$("ul.tabs-links").on("click", "li:not(.active)", function(e) {
      		$(this)
	        .addClass("active")
	        .siblings()
	        .removeClass("active")
	        .closest("div.tabs")
	        .find("div.tabs-content")
	        .removeClass("active")
	        .eq($(this).index())
	        .addClass("active");
	        e.preventDefault();
   		 });
 	 });

	//FORM PHOTO PREVIEW
	$("a.submitter").click(function(evt) {
		evt.preventDefault();
		var form = $(this).attr("data-form");
		$('#' + form).submit();
	});
	if($("input[name = user_avatar]").length) {
		$('input[name = user_avatar]').on('change', function (evt) {
        if (!this.files.length || !window.FileReader) {
            return;
        } else {
            var countfiles = $('input[name = user_avatar]').length;
            for (var i = 0; i < this.files.length; i++) {
                if (/^image/.test(this.files[i].type)) {
                    if (countfiles == 0 ) { var numb = i }else{ var numb = countfiles + 1}
                    var that = this.files[i];
                    var inputFields = '<input id="post_attachments_attributes_' + numb + '_name" name="post[attachments_attributes][' + numb + '][name]" type="file"  data-other="inputFile">';
                    $('#post_attachments_attributes_' + numb + '_name').val(that.name);
                    $('#fields').append(inputFields);
                    var reader = new FileReader();
                    reader.readAsDataURL(that);
                    reader.onloadend = function () {
						$("input[name = user_avatar]").css("height", "50px");
                        var elements = '<img width="150" height="200" src="' + this.result +'" />';
                        $('.form-item--photo .loaded-photo').empty().append(elements);
                    }
                }

            }
        }
    });
	}
})


