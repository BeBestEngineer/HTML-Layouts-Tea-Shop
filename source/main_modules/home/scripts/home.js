

/*Carousel-3 (home, position-1) scripts (b)*/
var owl_3_home_pos_1 = $("#carousel-3-home-pos-1");

owl_3_home_pos_1.owlCarousel({
	// autoPlay: 10000,
	items : 4, //10 items above 1000px browser width
	pagination : false
});

// Custom Navigation Events
$(".carousel-3__navigation-next-home-pos-1").click(function(){
	owl_3_home_pos_1.trigger('owl.next');
});
$(".carousel-3__navigation-prev-home-pos-1").click(function(){
	owl_3_home_pos_1.trigger('owl.prev');
});
/*Carousel-3 (home, position-1) scripts (e)*/


/*Carousel-4 (home, position-1) scripts (b)*/
var owl_4_home_pos_1 = $("#carousel-4-home-pos-1");

owl_4_home_pos_1.owlCarousel({
	// autoPlay: 10000,
	items : 2, //10 items above 1000px browser width
	pagination : false
});

// Custom Navigation Events
$(".carousel-4__navigation-next-home-pos-1").click(function(){
	owl_4_home_pos_1.trigger('owl.next');
});
$(".carousel-4__navigation-prev-home-pos-1").click(function(){
	owl_4_home_pos_1.trigger('owl.prev');
});
/*Carousel-4 (home, position-1) scripts (e)*/


/*Carousel-5 (home, position-1) scripts (b)*/
var owl_5_home_pos_1 = $("#carousel-5-home-pos-1");

owl_5_home_pos_1.owlCarousel({
	autoPlay: 10000,
	items : 2, //10 items above 1000px browser width
	pagination : false
});

// Custom Navigation Events
$(".carousel-5__navigation-next-home-pos-1").click(function(){
	owl_5_home_pos_1.trigger('owl.next');
});
$(".carousel-5__navigation-prev-home-pos-1").click(function(){
	owl_5_home_pos_1.trigger('owl.prev');
});
/*Carousel-5 (home, position-1) scripts (e)*/




$("#slider-1").owlCarousel({
	autoPlay: 4000,
	navigation : true, // Show next and prev buttons
	slideSpeed : 300,
	paginationSpeed : 400,
	singleItem:true

	// "singleItem:true" is a shortcut for:
	// items : 1, 
	// itemsDesktop : false,
	// itemsDesktopSmall : false,
	// itemsTablet: false,
	// itemsMobile : false

});