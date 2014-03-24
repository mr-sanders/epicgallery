$(document).ready(function() {
   $(".reviews_detailed").find(".close").on("click", function(e){
   	event.preventDefault();
    $(this).closest(".reviews_detailed").hide(400);
   });
   $(".reviews").find(".reviews_button").on("click", function(e){
   	event.preventDefault();
   	var pointer = $(this).attr("href");
   	console.log(pointer);
   	$(".reviews").find("#review"+pointer).show(400);
   });
   $(".close").on("click", function(e){
   	event.preventDefault();
   	});
});

(function($) {
    $(function() {
        var jcarousel = $('.jcarousel');

        jcarousel
            .jcarousel({
                wrap: 'circular'
            });

        $('.jcarousel-control-prev')
            .jcarouselControl({
                target: '-=1'
            });

        $('.jcarousel-control-next')
            .jcarouselControl({
                target: '+=1'
            });
    });
})(jQuery);