$(document).ready(function(){
	AOS.init();
	$('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
		$('html,body').animate({scrollTop: $("#"+tab_id).offset().top},'slow');
	})

	$(".anchor").click(function(e) {
	    e.preventDefault();
	    var aid = $(this).attr("href");
	    $('html,body').animate({scrollTop: $(aid).offset().top},'slow');
	});

})