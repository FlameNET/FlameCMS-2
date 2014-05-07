$(function() {	
	var screenWidth = '';
	var containerID = '';
	
	$('.screen-list').each(function() {
		var loopID = $(this).closest('.screen-wrapper').attr('id');
		screenWidth = $('#' + loopID + ' .thumbnail-large').outerWidth(true)
		if ($('#' + loopID + ' .screen-list a').length > 1) {
			$('#' + loopID + ' .screen-list').css({ 'left': -screenWidth });
			$('#' + loopID + ' .screen-list a:first').before($('#' + loopID + ' .screen-list a:last'));
		}
	});
	
	$('.next').click(function() {
		containerID = $(this).closest('.screen-wrapper').attr('id');
		var left_indent = parseInt($('.screen-list').css('left')) - screenWidth;
		$('#' + containerID + ' .screen-list:not(:animated)').animate({ 'left': left_indent }, 300, function () {
			$('#' + containerID + ' .screen-list a:last').after($('#' + containerID + ' .screen-list a:first'));
			$('#' + containerID + ' .screen-list').css({ 'left': -screenWidth });
		});
	});
	
	$('.prev').click(function () {
		containerID = $(this).closest('.screen-wrapper').attr('id');
		var left_indent = parseInt($('.screen-list').css('left')) + screenWidth;
		$('#' + containerID + ' .screen-list:not(:animated)').animate({ 'left': left_indent }, 300, function () {
			$('#' + containerID + ' .screen-list a:first').before($('#' + containerID + ' .screen-list a:last'));
			$('#' + containerID + ' .screen-list').css({ 'left': -screenWidth });
		});
	});

	
});