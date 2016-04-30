$(document).ready(function(){
	$('#prin').css({"height": $(window).height() + 'px'});

	var flag=false;
	var scroll;

	$(window).scroll(function(){
		scroll = $(window).scrollTop();

		if(scroll > 200){
			if(!flag){
				$('#logo').css({'margin-top': '-5px', 'width': '50px', 'height': '50px'});	
				flag = true;
				$('header').css({'background-color': '#3C3C3C'});
			}
		}else{
			if(flag){
				$('#logo').css({'margin-top': '150px', 'width': '250px', 'height': '250px'});
				flag = false;	
				$('header').css({'background-color': 'transparent'});
			}
			

		}
	});
});