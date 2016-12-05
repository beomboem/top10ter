$(document).foundation();

jQuery(document).ready(function($) {
	$(".media-object-section").hover(function(){
		var id = $(this).attr('id');
		$('#' +id ).find('.hover-box').css('opacity', '1');
	}, function(){
		var id = $(this).attr('id');
		$('#' +id ).find('.hover-box').css('opacity', '0');
	});

	// nav
	$(window).scroll(function (event) {
		if ($(this).scrollTop() >= 500) {
			$('.menu-container').find('hr').css('display', 'none');
			$('.menu-container').addClass('navbg');
		}
		else if ($(this).scrollTop() < 500) {
			$('.menu-container').removeClass('navbg');
			$('.menu-container').find('hr').css('display', 'block');
		}
	});

	// below does the "Programs" info switch
	$('.is-hover a').on('mouseover', function () {
		var idx = $(this).parent().index() + 2;
		$('.info:nth-child(' + idx + ')').addClass('info-visible');
		$('.info:nth-child(' + idx + ')').siblings().removeClass('info-visible');
	});

	$('.dropdown').on('mouseout', function () {
		$('.info:nth-child(1)').addClass('info-visible').siblings().removeClass('info-visible');
	});
});
