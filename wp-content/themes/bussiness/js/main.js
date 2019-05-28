jQuery(function($) {
	$(document).ready(function(){
	  //for toggle menu on mobile
	  $("#menu-icon").click(function () {
		    $icon = $(this);
		    //getting the next element
		    $content = $("#nav");
		    //open up the content needed - toggle the slide- if visible, slide up, if not slidedown.
		    $content.slideToggle(500, function () {
		        //execute this after slideToggle is done
		        //change text of header based on visibility of content div
		        $icon.html(function () {
		            //change text based on condition
		            return $content.is(":visible") ? "<i class='fas fa-times'></i>" : "<i class='fas fa-bars'></i>";
		        });
		    });
		});
	  //set timer
	  $('.timer').countTo();

	  //carousel for section4

	 $('.owl-carousel').owlCarousel();






	});
});