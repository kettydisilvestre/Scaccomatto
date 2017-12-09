var $ = jQuery;
jQuery(document).ready(function(){
	if(jQuery('.sm_slider').length>0){
		jQuery('.sm_slider').slick({
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows:true,
			dots:true,
			// autoplay: true,
			autoplaySpeed: 5000,
		});
	}
})