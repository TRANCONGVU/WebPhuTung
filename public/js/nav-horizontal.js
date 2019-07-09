// $('.nav-horizontal-search-icon').click(function(event) {
// 	if($(this).children('i').attr('class')=="fas fa-search"){
// 		$('.nav-horizontal-search').addClass('nav-horizontal-search-active');
// 		$(this).children('i').attr('class','fas fa-times-circle');
// 	}else if($(this).children('i').attr('class')=="fas fa-times-circle"){
// 		$('.nav-horizontal-search').removeClass('nav-horizontal-search-active');
// 		$(this).children('i').attr('class','fas fa-search');
// 	}
// });
$(document).ready(function() {
	$(window).scroll(function(){
		var h_head = $(".head").height() + $(".head2").height();
	    if($(this).scrollTop()>h_head){
	    	// console.log("aaaa");
	    	$(".nav-horizontal").css({
				"position":"fixed",
				"z-index":"1000",
				"top":"0"
			});
	    }else{
	    	$(".nav-horizontal").css({
				"position":"",
				"z-index":" ",
				"top":" "
			});
	    }
	});
});