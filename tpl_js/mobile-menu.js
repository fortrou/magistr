$(function() {

$('#m-btn-main').click(function() {	
	$('#m-btn-main').toggleClass('menu-mobile-btn-main menu-mobile-btn-main--active');
	$('#m-btn-start').removeClass('menu-mobile-btn-start--active').addClass('menu-mobile-btn-start');	
	$('#m-btn-learn').removeClass('menu-mobile-btn-learn--active').addClass('menu-mobile-btn-learn');
	$('#m-btn-adv').removeClass('menu-mobile-btn-adv--active').addClass('menu-mobile-btn-adv');	
})

$('#m-btn-start').click(function() {	
	$('#m-btn-start').toggleClass('menu-mobile-btn-start menu-mobile-btn-start--active');	
	$('#m-btn-main').removeClass('menu-mobile-btn-main--active').addClass('menu-mobile-btn-main');	
	$('#m-btn-learn').removeClass('menu-mobile-btn-learn--active').addClass('menu-mobile-btn-learn');
	$('#m-btn-adv').removeClass('menu-mobile-btn-adv--active').addClass('menu-mobile-btn-adv');	
})

$('#m-btn-learn').click(function() {	
	$('#m-btn-learn').toggleClass('menu-mobile-btn-learn menu-mobile-btn-learn--active');
	$('#m-btn-start').removeClass('menu-mobile-btn-start--active').addClass('menu-mobile-btn-start');	
	$('#m-btn-main').removeClass('menu-mobile-btn-main--active').addClass('menu-mobile-btn-main');
	$('#m-btn-adv').removeClass('menu-mobile-btn-adv--active').addClass('menu-mobile-btn-adv');		
})

$('#m-btn-adv').click(function() {	
	$('#m-btn-adv').toggleClass('menu-mobile-btn-adv menu-mobile-btn-adv--active');	
	$('#m-btn-start').removeClass('menu-mobile-btn-start--active').addClass('menu-mobile-btn-start');	
	$('#m-btn-main').removeClass('menu-mobile-btn-main--active').addClass('menu-mobile-btn-main');
	$('#m-btn-learn').removeClass('menu-mobile-btn-learn--active').addClass('menu-mobile-btn-learn');		
})


});