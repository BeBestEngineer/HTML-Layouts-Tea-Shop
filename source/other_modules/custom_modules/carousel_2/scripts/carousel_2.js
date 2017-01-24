

	/*Carousel-2 (home, position-1) scripts (b)*/
	var owl_2_home_pos_1 = $("#carousel-2-all-pos-1");

	owl_2_home_pos_1.owlCarousel({
		items : 6, //10 items above 1000px browser width
		pagination : false
	});

	// Custom Navigation Events
	$(".carousel-2__navigation-next-all-pos-1").click(function(){
		owl_2_home_pos_1.trigger('owl.next');
	})
	$(".carousel-2__navigation-prev-all-pos-1").click(function(){
		owl_2_home_pos_1.trigger('owl.prev');
	});
	/*Carousel-2 (home, position-1) scripts (e)*/
	
	