



	/*Carousel-6 (about-us, position-1) scripts (b)*/
	var owl_6_about_us_1 = $("#carousel-6-our-team-pos-1");

	owl_6_about_us_1.owlCarousel({
		items : 4, //10 items above 1000px browser width
		pagination : false
	});

	// Custom Navigation Events
	$("#carousel-6__navigation-next-our-team-pos-1").click(function(){
		owl_6_about_us_1.trigger('owl.next');
	})
	$("#carousel-6__navigation-prev-our-team-pos-1").click(function(){
		owl_6_about_us_1.trigger('owl.prev');
	});
	/*Carousel-6 (about-us, position-1) scripts (e)*/



	