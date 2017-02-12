    <h2 class="section-title  text-center"><?php echo $carousel_1_data -> carousel_1['title-of-section']; ?></h2>
    <p class="section-desc  text-center">Suspendisse neque urna, accumsan fermentum sem quis.</p>

    <div class="carousel-wrapper">
      <ul class="carousel-1__container" id="carousel-1<?php echo $carousel_1_data -> carousel_1['id']; ?>">
  
        <?php for ($it1 = 1; $it1 <= 8; ++$it1): ?>
          <li class="item carousel-1__container-item">
  
            <a class="links  image-wrapper  carousel-1__image-wrapper" href="#">
              <img class="image  carousel-1__image" src="<?php echo ( $carousel_1_data -> carousel_1['img-src'] ) .'tea-welding-'. $it1 .'.jpg'; ?>" alt="carousel-1-image">
            </a>
            <h3 class="product__name">
              <a class="links" href="#"><?php echo $carousel_1_data -> carousel_1['title']; ?></a>
            </h3>
            <div class="rating  rating-5-stars">
              <?php require 'pages_modules/other_modules/custom_modules/rating/rating.php'?>
            </div>
            <div class="product-price">
              <s class="product-price__without-discont  theme-margin__right-small">
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
        <a class="links  btn  carousel-navigation__prev" id="carousel-1__navigation-prev<?php echo $carousel_1_data -> carousel_1['suffix']; ?>" role="button">
          <svg class="carousel-navigation__icon" width="20" height="20" viewBox="0 0 1000 1000" >
            <path class="icons__svg-color" d="M793.8,10v980L206.2,500L793.8,10z"/>
          </svg>
        </a>
        <a class="links  btn  carousel-navigation__next" id="carousel-1__navigation-next<?php echo $carousel_1_data -> carousel_1['suffix']; ?>" role="button">
          <svg class="carousel-navigation__icon" width="20" height="20" viewBox="0 0 1000 1000" >
            <path class="icons__svg-color" d="M206.2,990V10l587.7,490L206.2,990z"/>
          </svg>
        </a>
      </div>
    </div>