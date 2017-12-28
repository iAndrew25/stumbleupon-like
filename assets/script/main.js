	$(document).ready(function() {

	$('#stmbAcc').on('click', function(){
		$('#stmbProfile').slideToggle('fast', function(){});
		if($("#stmbShare").is(":visible")){
			$("#stmbShare").hide();
		}
		
	});
	$('#stmbSh').on('click', function(){
		$('#stmbShare').slideToggle('fast', function(){});
		if($("#stmbProfile").is(":visible")){
			$("#stmbProfile").hide();
		}
	});	

	$('#likeBtn').on('click', function(){
		$(this).css({'color' : '#1ccf00'});
		$('#dislikeBtn').css({'color' : '#fff'});
		

		
	});
		$('#dislikeBtn').on('click', function(){
		$(this).css({'color' : '#cf0000'});
		$('#likeBtn').css({'color' : '#fff'});
	});


	$('#stmbComm').on('click', function(){
		$('#comments').slideToggle('fast');
	})

	/*MODAL*/
	
	let modal = $('#myModal');
	
	$('#profileAddPage').on('click', function() {
	    $('#addAPage').show();
	    modal.show();
	});
	$('#profileSettings').on('click', function() {
	    $('#addSettings').show();
	    modal.show();
	});
	$('#profileAddInterests').on('click', function() {
		$('#addInterests').show();
	    modal.show();
	});
	$('#profileMyLikes').on('click', function() {
		$('#myLikes').show();
	    modal.show();
	});
	$('#close').on('click', function() {
		$('.modal-content > div').hide();
	    modal.hide();
	});

	$(document).ready(function(){
	    setTimeout(function(){
			$('#passwordChanged').fadeOut();}, 2000);
		setTimeout(function(){
			$('#passwordNotChanged').fadeOut();}, 2000);
		

	});



	//testing
	

		


//intDB

	let interestList;
	if($('#interestsList').html() != ""){
		//interestList = ().split(", ");
		let curInt = $('#interestsList').html();
		interestList = curInt.split('; ');
	}
	else{
		interestList = [];
	}

	$('.interestsKeys').on('click', function(){
		let interest = $(this).html();
		if(interestList.indexOf(interest) == -1)
			interestList.push(interest);
		else{
			interestList.splice(interestList.indexOf(interest), 1);
		}
		$('#interestsList').html(interestList.join("; "));
		console.log(interestList);
	});

});