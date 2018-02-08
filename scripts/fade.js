/*$(document).ready(function(){
		$(".content").animate({opacity: '1'}, 1000);

}); */

$(document).ready(function(){
	$(".content").animate({opacity: '1'}, 600);
	$(".toc-list li a").click(function(){
		$(".content").animate({opacity: '0'}, 500);
	})
	

});