



/*Carousel-product (home, position-1) scripts (b)*/
var owl_product__carousel = $("#product__carousel");

owl_product__carousel.owlCarousel({
	autoPlay: 3000,
	items : 4, //10 items above 1000px browser width
	pagination : false
});

// Custom Navigation Events
$("#product__carousel-navigation-prev-product").click(function(){
	owl_product__carousel.trigger('owl.next');
})
$("#product__carousel-navigation-next-product").click(function(){
	owl_product__carousel.trigger('owl.prev');
});
/*Carousel-product (home, position-1) scripts (e)*/




/*Product page scripts (b)*/
	var product_quantity_button_more = document.querySelector("#product__quantity-more");
	var product_quantity_button_less = document.querySelector("#product__quantity-less");
	var product_quantity_input  		 = document.querySelector("#product__quantity-value");

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



