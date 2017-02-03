	/*Carousel-1 (home, position-1) scripts (b)*/
	var owl_home_pos_1 = $("#carousel-1-home-pos-1");

	owl_home_pos_1.owlCarousel({
		autoPlay: 4000,
		items : 4, //10 items above 1000px browser width
		pagination : false
	});

	// Custom Navigation Events
	$("#carousel-1__navigation-next-home-pos-1").click(function(){
		owl_home_pos_1.trigger('owl.next');
	})
	$("#carousel-1__navigation-prev-home-pos-1").click(function(){
		owl_home_pos_1.trigger('owl.prev');
	});
	/*Carousel-1 (home, position-1) scripts (e)*/




	/*Carousel-1 (home, position-2) scripts (b)*/
	var owl_home_pos_2 = $("#carousel-1-home-pos-2");

	owl_home_pos_2.owlCarousel({
		autoPlay: 8000,
		items : 4, //10 items above 1000px browser width
		pagination : false
	});

	// Custom Navigation Events
	$("#carousel-1__navigation-next-home-pos-2").click(function(){
		owl_home_pos_2.trigger('owl.next');
	})
	$("#carousel-1__navigation-prev-home-pos-2").click(function(){
		owl_home_pos_2.trigger('owl.prev');
	});
	/*Carousel-1 (home, position-2) scripts (e)*/




	/*Carousel-1 (product, position-2) scripts (b)*/
	var owl_product_pos_1 = $("#carousel-1-product-pos-1");

	owl_product_pos_1.owlCarousel({
		autoPlay: 5000,
		items : 4, //10 items above 1000px browser width
		pagination : false
	});

	// Custom Navigation Events
	$("#carousel-1__navigation-next-product-pos-1").click(function(){
		owl_product_pos_1.trigger('owl.next');
	})
	$("#carousel-1__navigation-prev-product-pos-1").click(function(){
		owl_product_pos_1.trigger('owl.prev');
	});
	/*Carousel-1 (product, position-2) scripts (e)*/