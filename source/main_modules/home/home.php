    <main class="home">

      <section class="slider-1">

          <div id="slider-1" class="owl-carousel owl-theme ">

            <div class="item">
              <img src="images/other_modules/custom_modules/slider_1/slider-1-1.jpg" alt="The Last of us">
              <div class="slider-1__desc">
                <div class="container">
                  <h2>Just for resigter membar</h2>
                  <span>One by one free</span>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, assumenda consequuntur cum eligendi esse et, id laudantium minus nam officia quam quas repellat repudiandae sint sit sunt, temporibus vitae voluptatum?
                  </p>
                  <a href="#">Shop now</a>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="images/other_modules/custom_modules/slider_1/slider-1-2.jpg" alt="GTA V">
              <div class="slider-1__desc">
                <div class="container">
                  <h2>Just for resigter membar</h2>
                  <span>One by one free</span>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, assumenda consequuntur cum eligendi esse et, id laudantium minus nam officia quam quas repellat repudiandae sint sit sunt, temporibus vitae voluptatum?
                  </p>
                  <a href="#">Shop now</a>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="images/other_modules/custom_modules/slider_1/slider-1-3.jpg" alt="Mirror Edge">
              <div class="slider-1__desc">
                <div class="container">
                  <h2>Just for resigter membar</h2>
                  <span>One by one free</span>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, assumenda consequuntur cum eligendi esse et, id laudantium minus nam officia quam quas repellat repudiandae sint sit sunt, temporibus vitae voluptatum?
                  </p>
                  <a href="#">Shop now</a>
                </div>
              </div>
            </div>

          </div>

      </section>


      <section class="masonry-grid-1">
        <div class="container">
          <div class="row">

            <div class="col-md-4">
              <div class="masonry-grid-1__item">
                <div class="image-wrapper  masonry-grid-1__image-left-wrapper">
                  <img class="image" src="images/other_modules/custom_modules/masonry_4_grid/masonry_4_grid-1.jpg" alt="...">
                </div>
                <a class="masonry-grid-1__desc" href="#">
                  <b>Special Coffee</b>
                  <p>
                    Only for you
                  </p>
                  <div class="masonry-grid-1__price">
                    5$
                  </div>
                </a>
              </div>
            </div>


            <div class="col-md-8">

              <div class="row">

                <div class="col-md-6  col-sm-6">
                  <div class="masonry-grid-1__item">
                    <div class="image-wrapper  masonry-grid-1__image-right-top-5-wrapper">
                      <img class="image" src="images/other_modules/custom_modules/masonry_4_grid/masonry_4_grid-2.jpg" alt="...">
                    </div>
                    <a class="masonry-grid-1__desc" href="#">
                      <b>Sell up to</b>
                      <p>
                        33% Off <br>
                        Coffee and Tea!
                      </p>
                      <div class="masonry-grid-1__price">
                        5$
                      </div>
                    </a>
                  </div>
                </div>

                <div class="col-md-6  col-sm-6">
                  <div class="masonry-grid-1__item">
                    <div class="image-wrapper masonry-grid-1__image-right-top-7-wrapper">
                      <img class="image" src="images/other_modules/custom_modules/masonry_4_grid/masonry_4_grid-3.jpg" alt="...">
                    </div>
                    <div class="masonry-grid-1__desc">
                      <b>Cupof</b>
                      <p>
                        Green Tea <br>
                        Only
                      </p>
                      <div class="masonry-grid-1__price">
                        5$
                      </div>
                      <a href="#">By in shop</a>
                    </div>
                  </div>
                </div>

              </div>


              <div class="row">
                <div class="col-xs-12">
                  <div class="masonry-grid-1__item">
                    <div class="image-wrapper masonry-grid-1__image-right-bottom-wrapper">
                      <img class="image" src="images/other_modules/custom_modules/masonry_4_grid/masonry_4_grid-4.jpg" alt="...">
                    </div>
                    <a class="masonry-grid-1__desc" href="#">
                      <b>We are try to make</b>
                      <p>
                        To make <br>
                        a cup of tea
                      </p>
                      <div class="masonry-grid-1__price">
                        5$
                      </div>
                    </a>
                  </div>
                </div>
              </div>

            </div>

          </div><!--row-->

        </div>
      </section>


      <?php require $carousel_1_data -> Get_data( 'home', 'position-1' )['path']; ?>


      <?php require $masonry_4_grid_1_data -> Get_data( 'home', 'position-1' )['path']; ?>


      <?php require $carousel_1_data -> Get_data( 'home', 'position-2' )['path']; ?>


      <section class="carousel-3">
        <div class="container" style="padding: 0;">
          <h1 class="text-center">Best Sail</h1>
          <p class="text-center">Suspendisse neque urna, accumsan fermentum sem quis.</p>


          <ul class="carousel-3__container" id="carousel-3-home-pos-1">

            <?php for ($ic3 = 1; $ic3 <= 16; $ic3 = $ic3 + 2 ): ?>
              <li class="carousel-3__item">
                <div class="row">
                  <div class="col-xs-4">
                    <a class="image-wrapper  carousel-3__image-wrapper" href="#">
                      <img class="image" src="images/other_modules/custom_modules/carousel_3/carousel-3-<?php echo $ic3; ?>.jpg" alt="">
                    </a>
  <!--                  <span style="background-color: #333333;">--><?php //echo $ic3; ?><!--</span>-->
                  </div>
                  <div class="col-xs-8">
                    <div class="carousel-3___desc-wrapper">
                      <h3 class="">
                        <a class="" href="#">Nullam bibendu</a>
                      </h3>

                      <div class="rating rating-5-stars">
                        <svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1201 1004l306-297-422-62-189-382-189 382-422 62 306 297-73 421 378-199 377 199zm527-357q0 22-26 48l-363 354 86 500q1 7 1 20 0 50-41 50-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"></path>
                        </svg>
                        <svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1201 1004l306-297-422-62-189-382-189 382-422 62 306 297-73 421 378-199 377 199zm527-357q0 22-26 48l-363 354 86 500q1 7 1 20 0 50-41 50-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"></path>
                        </svg>
                        <svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1201 1004l306-297-422-62-189-382-189 382-422 62 306 297-73 421 378-199 377 199zm527-357q0 22-26 48l-363 354 86 500q1 7 1 20 0 50-41 50-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"></path>
                        </svg>
                        <svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1201 1004l306-297-422-62-189-382-189 382-422 62 306 297-73 421 378-199 377 199zm527-357q0 22-26 48l-363 354 86 500q1 7 1 20 0 50-41 50-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"></path>
                        </svg>
                        <svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1201 1004l306-297-422-62-189-382-189 382-422 62 306 297-73 421 378-199 377 199zm527-357q0 22-26 48l-363 354 86 500q1 7 1 20 0 50-41 50-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"></path>
                        </svg>
                      </div>

                      <span class="product-prices">
                          <s class="">
                            <span class="">$</span>
                            <span class="">150,00</span>
                          </s>
                          <span class="">
                            <span class="">$</span>
                            <span class="">100,00</span>
                          </span>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-4">
                    <a class="image-wrapper  carousel-3__image-wrapper" href="#">
                      <img class="image" src="images/other_modules/custom_modules/carousel_3/carousel-3-<?php echo $ic3+1; ?>.jpg" alt="">
                    </a>
  <!--                  <span style="background-color: #333333;">--><?php //echo $ic3; ?><!--</span>-->
                  </div>
                  <div class="col-xs-8">
                    <div class="carousel-3___desc-wrapper">
                      <h3 class="">
                        <a class="" href="#">Nullam bibendu</a>
                      </h3>

                      <div class="rating rating-5-stars">
                        <svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1201 1004l306-297-422-62-189-382-189 382-422 62 306 297-73 421 378-199 377 199zm527-357q0 22-26 48l-363 354 86 500q1 7 1 20 0 50-41 50-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"></path>
                        </svg>
                        <svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1201 1004l306-297-422-62-189-382-189 382-422 62 306 297-73 421 378-199 377 199zm527-357q0 22-26 48l-363 354 86 500q1 7 1 20 0 50-41 50-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"></path>
                        </svg>
                        <svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1201 1004l306-297-422-62-189-382-189 382-422 62 306 297-73 421 378-199 377 199zm527-357q0 22-26 48l-363 354 86 500q1 7 1 20 0 50-41 50-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"></path>
                        </svg>
                        <svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1201 1004l306-297-422-62-189-382-189 382-422 62 306 297-73 421 378-199 377 199zm527-357q0 22-26 48l-363 354 86 500q1 7 1 20 0 50-41 50-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"></path>
                        </svg>
                        <svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1201 1004l306-297-422-62-189-382-189 382-422 62 306 297-73 421 378-199 377 199zm527-357q0 22-26 48l-363 354 86 500q1 7 1 20 0 50-41 50-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"></path>
                        </svg>
                      </div>

                      <span class="product-prices">
                          <s class="">
                            <span class="">$</span>
                            <span class="">150,00</span>
                          </s>
                          <span class="">
                            <span class="">$</span>
                            <span class="">100,00</span>
                          </span>
                      </span>
                    </div>
                  </div>
                </div>
              </li>
            <? endfor; ?>

          </ul>

          <div class="carousel-3__navigation  hidden-sm  hidden-xs">
            <a class="carousel-3__navigation-prev-home-pos-1" role="button">
              <svg width="20" height="20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
          <g><g transform="matrix(1 0 0 -1 0 1008)"><path d="M309.4,508L724.6,99.7v816.7L309.4,508z M806.3,936.8V79.3L683.8,18l-490,490l490,490L806.3,936.8z"/></g></g>
        </svg>
            </a>
            <a class="carousel-3__navigation-next-home-pos-1" role="button">
              <svg width="20" height="20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
          <g><g transform="matrix(1 0 0 -1 0 1008)"><path d="M275.4,99.7L690.6,508L275.4,916.3V99.7z M316.3,998l490-490l-490-490L193.8,79.2v857.5L316.3,998z"/></g></g>
        </svg>
            </a>
          </div>
        </div>
      </section>


      <section class="carousel-4">
        <div class="container" style="padding: 0;">
          <h2 class="text-center">Deal of the day</h2>
          <p class="text-center">Suspendisse neque urna, accumsan fermentum sem quis.</p>


          <ul class="carousel-4__container" id="carousel-4-home-pos-1">

            <?php for ( $ic4 = 1; $ic4 <= 8; $ic4 = $ic4 + 1 ): ?>
              <li class="item carousel-4__item">

                <div class="row">
                  <div class="col-sm-6">
                    <a class="image-wrapper  carousel-4__image-wrapper" href="#">
                      <img class="image" src="images/other_modules/custom_modules/carousel_4/carousel-4-<?php echo $ic4; ?>.jpg" alt="">
                    </a>
<!--                  <span style="background-color: #333333;">--><?php //echo $ic4; ?><!--</span>-->
                  </div>
                  <div class="col-sm-6">
                    <div class="carousel-4___desc-wrapper">
                      <h3 class="">
                        <a class="" href="#">Nullam bibendu</a>
                      </h3>

                      <div class="rating rating-5-stars">
                        <svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1201 1004l306-297-422-62-189-382-189 382-422 62 306 297-73 421 378-199 377 199zm527-357q0 22-26 48l-363 354 86 500q1 7 1 20 0 50-41 50-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"></path>
                        </svg>
                        <svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1201 1004l306-297-422-62-189-382-189 382-422 62 306 297-73 421 378-199 377 199zm527-357q0 22-26 48l-363 354 86 500q1 7 1 20 0 50-41 50-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"></path>
                        </svg>
                        <svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1201 1004l306-297-422-62-189-382-189 382-422 62 306 297-73 421 378-199 377 199zm527-357q0 22-26 48l-363 354 86 500q1 7 1 20 0 50-41 50-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"></path>
                        </svg>
                        <svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1201 1004l306-297-422-62-189-382-189 382-422 62 306 297-73 421 378-199 377 199zm527-357q0 22-26 48l-363 354 86 500q1 7 1 20 0 50-41 50-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"></path>
                        </svg>
                        <svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1201 1004l306-297-422-62-189-382-189 382-422 62 306 297-73 421 378-199 377 199zm527-357q0 22-26 48l-363 354 86 500q1 7 1 20 0 50-41 50-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"></path>
                        </svg>
                      </div>

                      <span class="product-prices">
                          <s class="">
                            <span class="">$</span>
                            <span class="">150,00</span>
                          </s>
                          <span class="">
                            <span class="">$</span>
                            <span class="">100,00</span>
                          </span>
                      </span>
                      <p>
                        Aliquam tincidunt pellentesque rutrum. Mauris luctus magna turpis, aliquam eu rutrum ligula facilisis eu. Phasellus tortr enim, euismod nec ante id.
                      </p>
                      <table class="table  carousel-4__table  text-center">
                        <tbody>
                          <tr>   <td>116</td>   <td>13</td>     <td>59</td>  <td>15</td>  </tr>
                          <tr>   <td>days</td>  <td>hours</td>  <td>min</td>  <td>sec</td>  </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

              </li>
            <? endfor; ?>

          </ul>

          <div class="carousel-4__navigation  hidden-sm  hidden-xs">
            <a class="carousel-4__navigation-prev-home-pos-1" role="button">
              <svg width="20" height="20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
          <g><g transform="matrix(1 0 0 -1 0 1008)"><path d="M309.4,508L724.6,99.7v816.7L309.4,508z M806.3,936.8V79.3L683.8,18l-490,490l490,490L806.3,936.8z"/></g></g>
        </svg>
            </a>
            <a class="carousel-4__navigation-next-home-pos-1" role="button">
              <svg width="20" height="20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
          <g><g transform="matrix(1 0 0 -1 0 1008)"><path d="M275.4,99.7L690.6,508L275.4,916.3V99.7z M316.3,998l490-490l-490-490L193.8,79.2v857.5L316.3,998z"/></g></g>
        </svg>
            </a>
          </div>
        </div>
      </section>


      <?php require $carousel_2_data -> Get_data( 'all', 'position-1' )['path']; ?>


      <section class="carousel-5">
        <div class="container" style="padding: 0;">
          <h2 class="text-center">Our blog</h2>
          <p class="text-center">Suspendisse neque urna, accumsan fermentum sem quis.</p>


          <ul class="carousel-5__container" id="carousel-5-home-pos-1">

            <?php for ( $ic4 = 1; $ic4 <= 8; $ic4 = $ic4 + 1 ): ?>
              <li class="item carousel-5__item">

                <div class="row">
                  <div class="col-sm-6">
                    <a class="image-wrapper  carousel-5__image-wrapper" href="#">
                      <img class="image" src="images/other_modules/custom_modules/carousel_5/carousel-5-<?php echo $ic4; ?>.jpg" alt="">
                    </a>
                    <!--                  <span style="background-color: #333333;">--><?php //echo $ic4; ?><!--</span>-->
                  </div>
                  <div class="col-sm-6">
                    <div class="carousel-5___desc-wrapper">
                      <h3 class="">
                        <a class="" href="#">Maecenas vitae mauris sapien</a>
                      </h3>
                      <a class="carousel-5__comments" href="#">
                        <svg class="allign-middle" width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" fill="#e56a6a">
                          <path d="M1408 768q0 139-94 257t-256.5 186.5-353.5 68.5q-86 0-176-16-124 88-278 128-36 9-86 16h-3q-11 0-20.5-8t-11.5-21q-1-3-1-6.5t.5-6.5 2-6l2.5-5 3.5-5.5 4-5 4.5-5 4-4.5q5-6 23-25t26-29.5 22.5-29 25-38.5 20.5-44q-124-72-195-177t-71-224q0-139 94-257t256.5-186.5 353.5-68.5 353.5 68.5 256.5 186.5 94 257zm384 256q0 120-71 224.5t-195 176.5q10 24 20.5 44t25 38.5 22.5 29 26 29.5 23 25q1 1 4 4.5t4.5 5 4 5 3.5 5.5l2.5 5 2 6 .5 6.5-1 6.5q-3 14-13 22t-22 7q-50-7-86-16-154-40-278-128-90 16-176 16-271 0-472-132 58 4 88 4 161 0 309-45t264-129q125-92 192-212t67-254q0-77-23-152 129 71 204 178t75 230z"></path>
                        </svg>
                        <span class="allign-middle">
                          2 comments
                        </span>
                      </a>
                      <a href="#" class="">
                        <svg class="allign-middle" width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" fill="#e56a6a">
                          <path d="M1600 1405q0 120-73 189.5t-194 69.5h-874q-121 0-194-69.5t-73-189.5q0-53 3.5-103.5t14-109 26.5-108.5 43-97.5 62-81 85.5-53.5 111.5-20q9 0 42 21.5t74.5 48 108 48 133.5 21.5 133.5-21.5 108-48 74.5-48 42-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-320-893q0 159-112.5 271.5t-271.5 112.5-271.5-112.5-112.5-271.5 112.5-271.5 271.5-112.5 271.5 112.5 112.5 271.5z"></path>
                        </svg>
                        <span class="allign-middle">By autor</span>
                      </a>
                      <p>
                        Aliquam tincidunt pellentesque rutrum. Mauris luctus magna turpis, aliquam eu rutrum ligula facilisis eu. Phasellus tortr enim, euismod nec ante id.
                      </p>
                      <div class="row">
                        <div class="col-xs-6">
                          <span>
                            15 / June / 2016
                          </span>
                        </div>
                        <div class="col-xs-6  text-right">
                          <a href="#">
                            <span class="allign-middle">Read more</span>
                            <svg class="allign-middle" width="20" height="20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
                              <g><g transform="matrix(1 0 0 -1 0 1008)"><path d="M275.4,99.7L690.6,508L275.4,916.3V99.7z M316.3,998l490-490l-490-490L193.8,79.2v857.5L316.3,998z"/></g></g>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </li>
            <? endfor; ?>

          </ul>

          <div class="carousel-5__navigation  hidden-sm  hidden-xs">
            <a class="carousel-5__navigation-prev-home-pos-1" role="button">
              <svg width="20" height="20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
              <g><g transform="matrix(1 0 0 -1 0 1008)"><path d="M309.4,508L724.6,99.7v816.7L309.4,508z M806.3,936.8V79.3L683.8,18l-490,490l490,490L806.3,936.8z"/></g></g>
            </svg>
            </a>
            <a class="carousel-5__navigation-next-home-pos-1" role="button">
              <svg width="20" height="20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
                <g><g transform="matrix(1 0 0 -1 0 1008)"><path d="M275.4,99.7L690.6,508L275.4,916.3V99.7z M316.3,998l490-490l-490-490L193.8,79.2v857.5L316.3,998z"/></g></g>
              </svg>
            </a>
          </div>
        </div>
      </section>


    </main>