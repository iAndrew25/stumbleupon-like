$(document).ready(function() {

	/*LOGIN*/

	$('#register').on('click', function(){
		if($('#reg:hidden')){
			$('#log').hide();
			$('#login').removeClass('tabSelected');
			$('#register').addClass('tabSelected');
			$('#reg').fadeIn('slow');
		}
	});
	$('#login').on('click', function(){
		if($('#log:hidden')){
			$('#reg').hide();
			$('#log').fadeIn('slow');
			$('#register').removeClass('tabSelected');
			$('#login').addClass('tabSelected');
		}
	});
});