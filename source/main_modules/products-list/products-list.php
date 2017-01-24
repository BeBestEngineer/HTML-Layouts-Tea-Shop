<main class="products-list">

  <?php require $breadcrumbs_1_data -> Get_data( 'products-list', 'position-1' )['path']; ?>
  
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <?php require_once 'other_modules/asides/aside_1/aside_1.php'; ?>
      </div>
      <div class="col-md-9 col-sm-6">

        <?php require $banner_1_data -> Get_data( 'all', 'position-1' )['path']; ?>

        <h1>Green Tea</h1>
        <a href="#">Product compare (0)</a>


        <div class="row">
            <div class="col-md-7  products-list__options">
              <span class="allign-middle">View as:</span>
              <a href="#" class="products-list__view-normal">
                <svg class="allign-middle" width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" fill="#999999">
                  <path d="M832 1024v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm0-768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm896 768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm0-768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90z"></path>
                </svg>
              </a>
              <a href="#" class="products-list__view-extended">
                <svg class="allign-middle" width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" fill="#999999">
                  <path d="M256 1312v192q0 13-9.5 22.5t-22.5 9.5h-192q-13 0-22.5-9.5t-9.5-22.5v-192q0-13 9.5-22.5t22.5-9.5h192q13 0 22.5 9.5t9.5 22.5zm0-384v192q0 13-9.5 22.5t-22.5 9.5h-192q-13 0-22.5-9.5t-9.5-22.5v-192q0-13 9.5-22.5t22.5-9.5h192q13 0 22.5 9.5t9.5 22.5zm0-384v192q0 13-9.5 22.5t-22.5 9.5h-192q-13 0-22.5-9.5t-9.5-22.5v-192q0-13 9.5-22.5t22.5-9.5h192q13 0 22.5 9.5t9.5 22.5zm1536 768v192q0 13-9.5 22.5t-22.5 9.5h-1344q-13 0-22.5-9.5t-9.5-22.5v-192q0-13 9.5-22.5t22.5-9.5h1344q13 0 22.5 9.5t9.5 22.5zm-1536-1152v192q0 13-9.5 22.5t-22.5 9.5h-192q-13 0-22.5-9.5t-9.5-22.5v-192q0-13 9.5-22.5t22.5-9.5h192q13 0 22.5 9.5t9.5 22.5zm1536 768v192q0 13-9.5 22.5t-22.5 9.5h-1344q-13 0-22.5-9.5t-9.5-22.5v-192q0-13 9.5-22.5t22.5-9.5h1344q13 0 22.5 9.5t9.5 22.5zm0-384v192q0 13-9.5 22.5t-22.5 9.5h-1344q-13 0-22.5-9.5t-9.5-22.5v-192q0-13 9.5-22.5t22.5-9.5h1344q13 0 22.5 9.5t9.5 22.5zm0-384v192q0 13-9.5 22.5t-22.5 9.5h-1344q-13 0-22.5-9.5t-9.5-22.5v-192q0-13 9.5-22.5t22.5-9.5h1344q13 0 22.5 9.5t9.5 22.5z"></path>
                </svg>
              </a>
              <span class="allign-middle">Sort by:</span>
              <div class="allign-middle" style="position: relative;">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                  <span class="allign-middle"></span>Default Sorting
                  <svg class="allign-middle" width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" fill="#999999">
                    <path d="M1395 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"></path>
                  </svg>
                </button>
                <ul class="dropdown-menu sorting-options-list" role="menu">
                  <li><a href="#">by price</a></li>
                  <li><a href="#">by title</a></li>
                  <li><a href="#">by collection</a></li>
                  <li><a href="#">by date</a></li>
                  <li><a href="#">by reviews</a></li>
                </ul>
              </div>
              <span class="allign-middle">Show:</span>
              <div class="allign-middle" style="position: relative;">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                  <span class="allign-middle"></span>5
                  <svg class="allign-middle" width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" fill="#999999">
                    <path d="M1395 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"></path>
                  </svg>
                </button>
                <ul class="dropdown-menu sorting-options-list" role="menu">
                  <li><a href="#">10</a></li>
                  <li><a href="#">50</a></li>
                  <li><a href="#">100</a></li>
                  <li><a href="#">All</a></li>
                </ul>
              </div>
            </div>

            <div class="col-md-5  text-right">
              <nav aria-label="Page navigation">
                <ul class="pagination">
                  <li>
                    <a href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li>
                    <a href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>


        <ul class="products-list">

            <?php for ($pl = 1; $pl <= 5; ++$pl ): ?>
            <li class="product-item">
              <div class="row">
                <div class="col-lg-4">
                    <a class="image-wrapper  products-list__image-wrapper" href="#">
                      <img class="image" src="images/products-list/product-list-1-<?php echo $pl; ?>.jpg" alt="product-img">
                      <div class="marker-sale  ">Sale</div>
                      <div class="marker-discont  ">
                        <span class="">50</span>
                        <span class="">&#37;</span>
                      </div>
                    </a>
                </div>

                <div class="col-lg-8">
                  <h3 class="carousel-1__product-title">
                    <a class="" href="#">Morbi mollis enim a faucibus</a>
                  </h3>
                  <div class="rating  rating-5-stars">
                    <svg width="15" height="15" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1201 1004l306-297-422-62-189-382-189 382-422 62 306 297-73 421 378-199 377 199zm527-357q0 22-26 48l-363 354 86 500q1 7 1 20 0 50-41 50-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"></path>
                    </svg>
                    <svg width="15" height="15" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1201 1004l306-297-422-62-189-382-189 382-422 62 306 297-73 421 378-199 377 199zm527-357q0 22-26 48l-363 354 86 500q1 7 1 20 0 50-41 50-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"></path>
                    </svg>
                    <svg width="15" height="15" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1201 1004l306-297-422-62-189-382-189 382-422 62 306 297-73 421 378-199 377 199zm527-357q0 22-26 48l-363 354 86 500q1 7 1 20 0 50-41 50-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"></path>
                    </svg>
                    <svg width="15" height="15" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1201 1004l306-297-422-62-189-382-189 382-422 62 306 297-73 421 378-199 377 199zm527-357q0 22-26 48l-363 354 86 500q1 7 1 20 0 50-41 50-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"></path>
                    </svg>
                    <svg width="15" height="15" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1201 1004l306-297-422-62-189-382-189 382-422 62 306 297-73 421 378-199 377 199zm527-357q0 22-26 48l-363 354 86 500q1 7 1 20 0 50-41 50-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"></path>
                    </svg>
                  </div>
                  <div class="product-price">
                    <s class="product-price__without-discont">
                      <span class="">&euro;</span>
                      <span class="">200</span>
                    </s>
                    <span class="product-price__with-discont">
                      <span class="">&euro;</span>
                      <span class="">100</span>
                    </span>
                  </div>

                  <a href="#">6 Reviews</a> / <a href="#">Add new review</a>

                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque deserunt eum expedita incidunt optio placeat quod? Atque consectetur dicta harum impedit minima, modi odio quisquam reiciendis totam veritatis! Facilis, officia!
                  </p>

                  <button class="allign-middle" type="button">Add to Cart</button>

                  <a class="allign-middle" href="#">
                    <svg class="product__info-icon" width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" fill="#999999">
                      <path d="M896 1664q-26 0-44-18l-624-602q-10-8-27.5-26t-55.5-65.5-68-97.5-53.5-121-23.5-138q0-220 127-344t351-124q62 0 126.5 21.5t120 58 95.5 68.5 76 68q36-36 76-68t95.5-68.5 120-58 126.5-21.5q224 0 351 124t127 344q0 221-229 450l-623 600q-18 18-44 18z"></path>
                    </svg>
                  </a>
                  <a class="allign-middle" href="#">
                    <svg class="product__info-icon" width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" fill="#999999">
                      <path d="M1792 1184v192q0 13-9.5 22.5t-22.5 9.5h-1376v192q0 13-9.5 22.5t-22.5 9.5q-12 0-24-10l-319-320q-9-9-9-22 0-14 9-23l320-320q9-9 23-9 13 0 22.5 9.5t9.5 22.5v192h1376q13 0 22.5 9.5t9.5 22.5zm0-544q0 14-9 23l-320 320q-9 9-23 9-13 0-22.5-9.5t-9.5-22.5v-192h-1376q-13 0-22.5-9.5t-9.5-22.5v-192q0-13 9.5-22.5t22.5-9.5h1376v-192q0-14 9-23t23-9q12 0 24 10l319 319q9 9 9 23z"></path>
                    </svg>
                  </a>

                </div>



              </div>
            </li>
            <?php endfor; ?>
            
          </ul>


        <div class="row">
          <div class="col-md-7  products-list__options">

          </div>

          <div class="col-md-5  text-right">
            <nav aria-label="Page navigation">
              <ul class="pagination">
                <li>
                  <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li>
                  <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>


      </div>
    </div>
  </div>



  <?php require $carousel_2_data -> Get_data( 'all', 'position-1' )['path']; ?>
</main>


