$(document).ready(function (){
	var o=$('.tl-element-fb-black');
	o.mouseover(function (){
		$('.tl-fb').addClass('tl-fb-black');
		$(this).addClass('tl-element-fb-white');

	});
	o.mouseout(function (){
		$('.tl-fb').removeClass('tl-fb-black');
		$(this).removeClass('tl-element-fb-white');
	});	
});

$(document).ready(function (){
	var o=$('.tl-element-tw-black');
	o.mouseover(function (){
		$('.tl-tw').addClass('tl-tw-black');
		$(this).addClass('tl-element-tw-white');

	});
	o.mouseout(function (){
		$('.tl-tw').removeClass('tl-tw-black');
		$(this).removeClass('tl-element-tw-white');
	});	
});

$(document).ready(function (){
	var o=$('.tl-element-gp-black');
	o.mouseover(function (){
		$('.tl-gp').addClass('tl-gp-black');
		$(this).addClass('tl-element-gp-white');

	});
	o.mouseout(function (){
		$('.tl-gp').removeClass('tl-gp-black');
		$(this).removeClass('tl-element-gp-white');
	});	
});	



$(document).ready(function(){
	var vContacts=$('.cfp-prelist');
	vContacts.mouseover(function(){
		$('.cfp-prelist').addClass('cfp-prelist-white');
	});
	vContacts.mouseout(function(){
		$('.cfp-prelist').removeClass('cfp-prelist-white');
	});
});


//$(document).ready(function(){
//	var CapRotate=$('.bc-bord');
//	CapRotate.click(function(){
//		$('.bc-bord').addClass('full-scale');
//	});
//	CapRotate.mouseout(function(){
//		$('.bc-bord').removeClass('full-scale');
//	});
//});


$(function () {
	var bord = $('.bc-bord');
	bord.click(function(){
		bord.addClass('active')
	});
	bord.mouseout(function(){
		bord.removeClass('active')
	});
	bord.mouseover(function(){
		bord.removeClass('active')
	});
});