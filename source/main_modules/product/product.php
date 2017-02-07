<section class="breadcrumbs">
  <div class="container">
    <div class="row">
      <?php require $breadcrumbs_1_data -> Get_data( 'about-us', 'position-1' )['path']; ?>
    </div>
  </div>
</section>


<main class="main-modules  product">
  <div class="container-fluid">
      <div class="product__wrapper">
        <div class="container">
          <div class="row">
            <div class="col-md-8">

              <div class="image-wrapper  product__image-wrapper">
                <img class="image" src="images/product/product-carousel-1-1.jpg" alt="...">
                <div class="marker-sale  ">Sale</div>
                <div class="marker-discont  ">
                  <span class="">-20</span>
                  <span class="">%</span>
                </div>
                <button class="btn  product__zoom-button" type="button" data-toggle="modal" data-target=".bs-example-modal-lg">
                  <svg class="product__zoom-icon" width="20" height="20" viewBox="0 0 1792 1792">
                    <path class="icons__svg-color" d="M1088 800v64q0 13-9.5 22.5t-22.5 9.5h-224v224q0 13-9.5 22.5t-22.5 9.5h-64q-13 0-22.5-9.5t-9.5-22.5v-224h-224q-13 0-22.5-9.5t-9.5-22.5v-64q0-13 9.5-22.5t22.5-9.5h224v-224q0-13 9.5-22.5t22.5-9.5h64q13 0 22.5 9.5t9.5 22.5v224h224q13 0 22.5 9.5t9.5 22.5zm128 32q0-185-131.5-316.5t-316.5-131.5-316.5 131.5-131.5 316.5 131.5 316.5 316.5 131.5 316.5-131.5 131.5-316.5zm512 832q0 53-37.5 90.5t-90.5 37.5q-54 0-90-38l-343-342q-179 124-399 124-143 0-273.5-55.5t-225-150-150-225-55.5-273.5 55.5-273.5 150-225 225-150 273.5-55.5 273.5 55.5 225 150 150 225 55.5 273.5q0 220-124 399l343 343q37 37 37 90z"/>
                  </svg>
                </button>
              </div>

              <!-- Large modal -->
              <div class="modal  fade  bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                <div class="modal-dialog  modal-lg  product__modal-dialog" role="document">
                  <img class="image" src="images/product/product-carousel-1-1.jpg" alt="...">
                </div>
              </div>

              <div class="product__carousel  carousel-wrapper">
                <ul class="owl-carousel owl-theme" id="product__carousel">

                  <?php for ($p= 1; $p <= 8; ++$p): ?>
                    <li class="product__carousel-item">
                      <a class="links  image-wrapper  product__carousel-image-wrapper" href="#">
                        <img class="image" src="images/product/product-carousel-1-<?php echo $p; ?>.jpg" alt="carousel-1-4-home image">
                      </a>
                    </li>
                  <? endfor; ?>

                </ul>

                <a class="links  btn  product__carousel--prev" id="product__carousel-navigation-prev-product" role="button">
                  <svg class="carousel-navigation__icon" width="20" height="20" viewBox="0 0 1792 1792">
                    <path class="icons__svg-color" d="M793.8,10v980L206.2,500L793.8,10z"/>
                  </svg>
                </a>
                <a class="links  btn  product__carousel--next" id="product__carousel-navigation-next-product" role="button">
                  <svg class="carousel-navigation__icon" width="20" height="20" viewBox="0 0 1792 1792" >
                    <path class="icons__svg-color" d="M206.2,990V10l587.7,490L206.2,990z"/>
                  </svg>
                </a>

              </div>

            </div>
  

            <div class="col-md-4">

            <div class="product__header">
              <h1 class="product__product-title">Cascara Sagrada</h1>
              <div class="row">
                <div class="col-sm-6">
                  <!--
                  <table class="table  product__table">
                    <tbody>
                    <tr>   <td>Brand</td>         <td>Herbet Kendi</td>  </tr>
                    <tr>   <td>Product code</td>  <td>product 7</td>     </tr>
                    <tr>   <td>Availability</td>  <td>in stock</td>      </tr>
                    </tbody>
                  </table>
                  -->
                  <p class="product__properties">
                    <b>Brand</b>:         Herbet Kendi <br>
                    <b>Product code:</b>  product 7    <br>
                    <b>Availability:</b>  stock        <br>
                  </p>
                </div>
              </div>

              <div class="product-price">
                <s class="product-price__without-discont  theme-margin__right-small">
                  <span class="">€</span>
                  <span class="">400</span>
                </s>
                <span class="product-price__with-discont  theme-margin__right-normal">
                  <span class="">€</span>
                  <span class="">200</span>
                </span>
                <span>
                  Ex tax: &dollar;
                  <span class="product-price__ex-tax">15</span>
                </span>
              </div>


              <div class="rating  rating-5-stars">
                <?php require 'other_modules/custom_modules/rating/rating.php'?>
              </div>

              <div class="product__reviews">
                <a class="links" href="#">6 Reviews</a> / <a class="links" href="#">Add new review</a>
              </div>

              <b class="product__short-desc-title" >Short description:</b>
              <p class="product__desc">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi consectetur ex nam nisi perspiciatis? Accusantium aperiam blanditiis, deserunt est facere facilis modi, perspiciatis possimus quae quibusdam rem repudiandae sint voluptate?
              </p>
            </div>


            <div class="product__footer">

              <div class="product__bittons">
                <div class="row">
                  <div class="col-md-12">


                    <div      class="widget-quantity-goods">
                      <span   class="allign-middle  theme-margin__right-normal">Qty:</span>
                      <button class="allign-middle  widget-quantity-goods__button  btn  btn-default  theme-buttons__buttons--more-less" id="product__quantity-more" type="button">
                        <svg width="20" height="20" viewBox="0 0 1792 1792" >
                          <path class="icons__svg-color" d="M1395 1184q0 13-10 23l-50 50q-10 10-23 10t-23-10l-393-393-393 393q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l466 466q10 10 10 23z"/>
                        </svg>
                      </button>
                      <input  class="allign-middle  widget-quantity-goods__input" id="product__quantity-value" type="text" value="100 gr.">
                      <button class="allign-middle  widget-quantity-goods__button  btn  btn-default  theme-buttons__buttons--more-less" id="product__quantity-less" type="button">
                        <svg width="20" height="20" viewBox="0 0 1792 1792" >
                          <path class="icons__svg-color" d="M1395 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"/>
                        </svg>
                      </button>
                    </div>


                    <button class="allign-middle  btn  btn-default  theme-buttons__buttons--default  theme-margin__right-normal" type="button">Add to cart</button>
                    <a class="links  allign-middle  theme-margin__right-small" href="#">
                      <svg class="product__info-icon" width="20" height="20" viewBox="0 0 1792 1792" >
                        <path class="icons__svg-color" d="M896 1664q-26 0-44-18l-624-602q-10-8-27.5-26t-55.5-65.5-68-97.5-53.5-121-23.5-138q0-220 127-344t351-124q62 0 126.5 21.5t120 58 95.5 68.5 76 68q36-36 76-68t95.5-68.5 120-58 126.5-21.5q224 0 351 124t127 344q0 221-229 450l-623 600q-18 18-44 18z"></path>
                      </svg>
                    </a>
                    <a class="links  allign-middle" href="#">
                      <svg class="product__info-icon" width="20" height="20" viewBox="0 0 1792 1792">
                        <path class="icons__svg-color" d="M1792 1184v192q0 13-9.5 22.5t-22.5 9.5h-1376v192q0 13-9.5 22.5t-22.5 9.5q-12 0-24-10l-319-320q-9-9-9-22 0-14 9-23l320-320q9-9 23-9 13 0 22.5 9.5t9.5 22.5v192h1376q13 0 22.5 9.5t9.5 22.5zm0-544q0 14-9 23l-320 320q-9 9-23 9-13 0-22.5-9.5t-9.5-22.5v-192h-1376q-13 0-22.5-9.5t-9.5-22.5v-192q0-13 9.5-22.5t22.5-9.5h1376v-192q0-14 9-23t23-9q12 0 24 10l319 319q9 9 9 23z"></path>
                      </svg>
                    </a> 

                  </div>
                </div>
              </div>
              
              <div class="product__social-buttons">
                <!--4-->
              </div>
            </div>

          </div>
          </div>
        </div>
      </div>
    </div>


  <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="product__info-tabs">
            <!-- Nav tabs -->
            <ul class="nav  nav-tabs  nav-justified  product__info-tabs-titles" role="tablist">
              <li role="presentation">               <a class="links  product__info-tab-title" href="#home"     aria-controls="home"     role="tab" data-toggle="tab">Description</a></li>
              <li role="presentation" class="active"><a class="links  product__info-tab-title" href="#profile"  aria-controls="profile"  role="tab" data-toggle="tab">Comments</a></li>
              <li role="presentation">               <a class="links  product__info-tab-title" href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Reviews</a></li>

            </ul>

            <!-- Tab panes -->
            <div class="tab-content  product__tab-content  ">
              <div role="tabpanel" class="tab-pane  product__info-tab-desc" id="home">
                <p>
                  Koila is a chair designed for restaurants and food lovers in general. Designed in collaboration with restaurant professionals, it ensures comfort and an ideal posture, as there are armrests on both sides of the chair.
                </p>
                <p>
                  Koila is a seat designed for restaurants and gastronomic places in general. Designed in collaboration with professional of restaurants and hotels field, this armchair is composed of a curved shell with a base in oak who has pinched the back upholstered in fabric or leather. It provides comfort and holds for ideal sitting position,the arms may rest on the sides ofthe armchair.
                  Solid oak construction.
                  Back in plywood (2 faces oak veneer) or upholstered in fabric, leather or eco-leather.
                  Seat upholstered in fabric, leather or eco-leather.
                  H 830 x L 585 x P 540 mm.
                </p>
              </div>
              <div role="tabpanel" class="tab-pane  product__info-tab-desc  active" id="profile">
                <p>
                  Koila is a chair designed for restaurants and food lovers in general. Designed in collaboration with restaurant professionals, it ensures comfort and an ideal posture, as there are armrests on both sides of the chair.
                </p>
                <p>
                  Koila is a seat designed for restaurants and gastronomic places in general. Designed in collaboration with professional of restaurants and hotels field, this armchair is composed of a curved shell with a base in oak who has pinched the back upholstered in fabric or leather. It provides comfort and holds for ideal sitting position,the arms may rest on the sides ofthe armchair.
                  Solid oak construction.
                  Back in plywood (2 faces oak veneer) or upholstered in fabric, leather or eco-leather.
                  Seat upholstered in fabric, leather or eco-leather.
                  H 830 x L 585 x P 540 mm.
                </p>
                <p>
                  Koila is a chair designed for restaurants and food lovers in general. Designed in collaboration with restaurant professionals, it ensures comfort and an ideal posture, as there are armrests on both sides of the chair.
                </p>
                <p>
                  Koila is a seat designed for restaurants and gastronomic places in general. Designed in collaboration with professional of restaurants and hotels field, this armchair is composed of a curved shell with a base in oak who has pinched the back upholstered in fabric or leather. It provides comfort and holds for ideal sitting position,the arms may rest on the sides ofthe armchair.
                  Solid oak construction.
                  Back in plywood (2 faces oak veneer) or upholstered in fabric, leather or eco-leather.
                  Seat upholstered in fabric, leather or eco-leather.
                  H 830 x L 585 x P 540 mm.
                </p>
                <p>
                  Koila is a chair designed for restaurants and food lovers in general. Designed in collaboration with restaurant professionals, it ensures comfort and an ideal posture, as there are armrests on both sides of the chair.
                </p>
                <p>
                  Koila is a seat designed for restaurants and gastronomic places in general. Designed in collaboration with professional of restaurants and hotels field, this armchair is composed of a curved shell with a base in oak who has pinched the back upholstered in fabric or leather. It provides comfort and holds for ideal sitting position,the arms may rest on the sides ofthe armchair.
                  Solid oak construction.
                  Back in plywood (2 faces oak veneer) or upholstered in fabric, leather or eco-leather.
                  Seat upholstered in fabric, leather or eco-leather.
                  H 830 x L 585 x P 540 mm.
                </p>
              </div>
              <div role="tabpanel" class="tab-pane  product__info-tab-desc" id="messages">
                <p>
                  Koila is a chair designed for restaurants and food lovers in general. Designed in collaboration with restaurant professionals, it ensures comfort and an ideal posture, as there are armrests on both sides of the chair.
                </p>
                <p>
                  Koila is a seat designed for restaurants and gastronomic places in general. Designed in collaboration with professional of restaurants and hotels field, this armchair is composed of a curved shell with a base in oak who has pinched the back upholstered in fabric or leather. It provides comfort and holds for ideal sitting position,the arms may rest on the sides ofthe armchair.
                  Solid oak construction.
                  Back in plywood (2 faces oak veneer) or upholstered in fabric, leather or eco-leather.
                  Seat upholstered in fabric, leather or eco-leather.
                  H 830 x L 585 x P 540 mm.
                </p>
                <p>
                  Koila is a chair designed for restaurants and food lovers in general. Designed in collaboration with restaurant professionals, it ensures comfort and an ideal posture, as there are armrests on both sides of the chair.
                </p>
                <p>
                  Koila is a seat designed for restaurants and gastronomic places in general. Designed in collaboration with professional of restaurants and hotels field, this armchair is composed of a curved shell with a base in oak who has pinched the back upholstered in fabric or leather. It provides comfort and holds for ideal sitting position,the arms may rest on the sides ofthe armchair.
                  Solid oak construction.
                  Back in plywood (2 faces oak veneer) or upholstered in fabric, leather or eco-leather.
                  Seat upholstered in fabric, leather or eco-leather.
                  H 830 x L 585 x P 540 mm.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


  <section class="section  carousel-1">
    <div class="container">
      <div class="row">
        <?php require $carousel_1_data -> Get_data( 'product', 'position-1' )['path']; ?>
      </div>
    </div>
  </section>
  

  <section class="section  carousel  carousel-2">
    <div class="row">
      <div class="container" style="padding: 0;">
        <?php require $carousel_2_data -> Get_data( 'all', 'position-1' )['path']; ?>
      </div>
    </div>
  </section>
  
</main>