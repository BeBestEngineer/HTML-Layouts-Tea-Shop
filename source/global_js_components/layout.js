$( document ).ready( function() {




 /*SeparatoR*/ 


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
 /*SeparatoR*/ 




/*Carousel-product (home, position-1) scripts (b)*/
var owl_product__carousel = $("#product__carousel");

owl_product__carousel.owlCarousel({
	autoPlay: 3000,
	items : 4, //10 items above 1000px browser width
	pagination : false
});

// Custom Navigation Events
$(".product__carousel-navigation-prev-product").click(function(){
	owl_product__carousel.trigger('owl.next');
})
$(".product__carousel-navigation-next-product").click(function(){
	owl_product__carousel.trigger('owl.prev');
});
/*Carousel-product (home, position-1) scripts (e)*/




/*Product page scripts (b)*/
	var product_quantity_button_more = document.querySelector(".product__quantity-more");
	var product_quantity_button_less = document.querySelector(".product__quantity-less");
	var product_quantity_input  		 = document.querySelector(".product__quantity-value");

if ( product_quantity_input && product_quantity_button_more && product_quantity_button_less ) {
	var product_quantity_value;

	product_quantity_button_more.onclick = function() {
		product_quantity_value = product_quantity_input.getAttribute("value").replace(' gr.', '');
		product_quantity_value = product_quantity_value*1 + 100 + ' gr.';
		product_quantity_input.setAttribute("value", product_quantity_value );
	};

	product_quantity_button_less.onclick = function() {
		product_quantity_value = product_quantity_input.getAttribute("value").replace(' gr.', '');
		if ( product_quantity_value >= 200 ) {
			product_quantity_value = product_quantity_value*1 - 100 + ' gr.';
			product_quantity_input.setAttribute("value", product_quantity_value );
		}
	};
};
/*Product page scripts (e)*/




 /*SeparatoR*/ 
var keypressSlider = document.getElementById('keypress');
var input0 = document.getElementById('input-with-keypress-0');
var input1 = document.getElementById('input-with-keypress-1');

if ( keypressSlider && input0 && input1 ) {
	// alert ( 'wtf' );

	var inputs = [input0, input1];

	noUiSlider.create(keypressSlider, {
		start: [1000, 5000],
		connect: true,
		direction: 'ltr',
		range: {
			'min': 25,
			'max': 10000
		},
		margin: 100,
		format: {
			to: function (value) {
				return Math.round(value) + ' $';
			},
			from: function (value) {
				return value.replace(' $', '');
			}
		}
	});

	keypressSlider.noUiSlider.on('update', function (values, handle) {
		inputs[handle].value = values[handle];
	});

	function setSliderHandle(i, value) {
		var r = [null, null];
		r[i] = value;
		keypressSlider.noUiSlider.set(r);
	}

	// Listen to keydown events on the input field.
	inputs.forEach(function (input, handle) {

		input.addEventListener('change', function () {
			setSliderHandle(handle, this.value);
		});

		input.addEventListener('keydown', function (e) {

			var values = keypressSlider.noUiSlider.get();
			var value = Number(values[handle]);

			// [[handle0_down, handle0_up], [handle1_down, handle1_up]]
			var steps = keypressSlider.noUiSlider.steps();

			// [down, up]
			var step = steps[handle];

			var position;

			// 13 is enter,
			// 38 is key up,
			// 40 is key down.
			switch (e.which) {

				case 13:
					setSliderHandle(handle, this.value);
					break;

				case 38:

					// Get step to go increase slider value (up)
					position = step[1];

					// false = no step is set
					if (position === false) {
						position = 1;
					}

					// null = edge of slider
					if (position !== null) {
						setSliderHandle(handle, value + position);
					}

					break;

				case 40:

					position = step[0];

					if (position === false) {
						position = 1;
					}

					if (position !== null) {
						setSliderHandle(handle, value - position);
					}

					break;
			}
		});
	});
}

 /*SeparatoR*/ 
	/*Carousel-1 (home, position-1) scripts (b)*/
	var owl_home_pos_1 = $("#carousel-1-home-pos-1");

	owl_home_pos_1.owlCarousel({
		autoPlay: 4000,
		items : 4, //10 items above 1000px browser width
		pagination : false
	});

	// Custom Navigation Events
	$(".carousel-1__navigation-next-home-pos-1").click(function(){
		owl_home_pos_1.trigger('owl.next');
	})
	$(".carousel-1__navigation-prev-home-pos-1").click(function(){
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
	$(".carousel-1__navigation-next-home-pos-2").click(function(){
		owl_home_pos_2.trigger('owl.next');
	})
	$(".carousel-1__navigation-prev-home-pos-2").click(function(){
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
	$(".carousel-1__navigation-next-product-pos-1").click(function(){
		owl_product_pos_1.trigger('owl.next');
	})
	$(".carousel-1__navigation-prev-product-pos-1").click(function(){
		owl_product_pos_1.trigger('owl.prev');
	});
	/*Carousel-1 (product, position-2) scripts (e)*/
 /*SeparatoR*/ 


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
	
	
 /*SeparatoR*/ 




	/*Carousel-6 (about-us, position-1) scripts (b)*/
	var owl_6_about_us_1 = $("#carousel-6-our-team-pos-1");

	owl_6_about_us_1.owlCarousel({
		items : 4, //10 items above 1000px browser width
		pagination : false
	});

	// Custom Navigation Events
	$(".carousel-6__navigation-next-our-team-pos-1").click(function(){
		owl_6_about_us_1.trigger('owl.next');
	})
	$(".carousel-6__navigation-prev-our-team-pos-1").click(function(){
		owl_6_about_us_1.trigger('owl.prev');
	});
	/*Carousel-6 (about-us, position-1) scripts (e)*/



	
 /*SeparatoR*/ 

 /*SeparatoR*/ 




});
