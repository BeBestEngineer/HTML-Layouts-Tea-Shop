<section class="carousel-1">
  <div class="container" style="padding: 0;">
    <h1 class="text-center"><?php echo $carousel_1_data -> carousel_1['title-of-section']; ?></h1>
    <p class="text-center">Suspendisse neque urna, accumsan fermentum sem quis.</p>


    <ul class="carousel-1__container" id="carousel-1<?php echo $carousel_1_data -> carousel_1['id']; ?>">

      <?php for ($it1 = 1; $it1 <= 8; ++$it1): ?>
        <li class="item carousel-1__container-item">

          <a class="image-wrapper  carousel-1__image-wrapper" href="#">
            <img class="image" src="<?php echo ( $carousel_1_data -> carousel_1['img-src'] ) .'tea-welding-'. $it1 .'.jpg'; ?>" alt="carousel-1-image">
          </a>
          <h3 class="carousel-1__product-title">
            <a class="" href="#"><?php echo $carousel_1_data -> carousel_1['title']; ?></a>
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
              <span class=""><?php echo $carousel_1_data -> carousel_1['price-without-discont']; ?></span>
            </s>
            <span class="product-price__with-discont">
              <span class="">&euro;</span>
              <span class=""><?php echo $carousel_1_data -> carousel_1['price-with-discont']; ?></span>
            </span>
          </div>
          <div class="marker-sale  ">Sale</div>
          <div class="marker-discont  ">
            <span class=""><?php echo $carousel_1_data -> carousel_1['discont-value']; ?></span>
            <span class="">&#37;</span>
          </div>

        </li>
      <? endfor; ?>

    </ul>

    <div class="carousel-1__navigation  hidden-sm  hidden-xs">
      <a class="carousel-1__navigation-prev<?php echo $carousel_1_data -> carousel_1['suffix']; ?>" role="button">
        <svg width="20" height="20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
          <g><path d="M793.8,10v980L206.2,500L793.8,10z"/></g>
        </svg>
      </a>
      <a class="carousel-1__navigation-next<?php echo $carousel_1_data -> carousel_1['suffix']; ?>" role="button">
        <svg width="20" height="20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
          <g><path d="M206.2,990V10l587.7,490L206.2,990z"/></g>
        </svg>
      </a>
    </div>
  </div>
</section>