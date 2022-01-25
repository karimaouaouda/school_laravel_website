function swapActive(last,now){
	$(function(){
		$(last).removeClass('active');
		$(now).addClass('active');
	})
}
$(function(){
	$('.navs a').click(function(){
		let last = $('.navs .active');
		swapActive(last,$(this));
	})
})