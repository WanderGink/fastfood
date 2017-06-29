$(document).ready(function() {
	function startSlider(){
		interval = setInterval(function() {
		$('#slider ul').animate({'margin-left': '-=490'}, 1000, function(){
			$('#slider ul li:first').appendTo('#slider ul');
			$('#slider ul').css('margin-left', '0');
		});
		}, 4000);
	}
	function pauseSlider() {
		clearInterval(interval);
	}
	$('#slider ul').on('mouseenter', pauseSlider).on('mouseleave', startSlider);

	startSlider();
});