<section class="carousel-6">
  <div class="container" style="padding: 0;">
    <h2 class="section-title  text-center"><?php echo $carousel_6_data -> carousel_6_data['title-of-section']; ?></h2>
    <p class="section-desc  text-center">Suspendisse neque urna, accumsan fermentum sem quis.</p>


    <ul class="carousel-6__container" id="carousel-6<?php echo $carousel_6_data -> carousel_6_data['id']; ?>">

      <?php for ($at = 1; $at <= 8; ++$at): ?>
        <li class="item carousel-6__container-item">

          <div class="image-wrapper  carousel-6__image-wrapper">
            <img class="image" src="<?php echo ( $carousel_6_data -> carousel_6_data['img-src']) .'about-us-'. $at .'.jpg'; ?>" alt="carousel-6-image">
          </div>
          <div class="text-center">
            <b class="carousel-6__item-title"><?php echo $carousel_6_data -> carousel_6_data['members'][$at]['name']; ?></b> <br>
            <span class="carousel-6__item-subtitle"><?php echo $carousel_6_data -> carousel_6_data['members'][$at]['post']; ?></span>
            <p class="paragraph-25">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda autem consequatur illo itaque natus voluptatem?
            </p>
          </div>
        </li>
      <?php endfor; ?>

    </ul>

    <div class="carousel-6__navigation  hidden-sm  hidden-xs">
      <a class="links  " id="carousel-6__navigation-prev<?php echo $carousel_6_data -> carousel_6_data['suffix']; ?>" role="button">
        <svg width="20" height="20" viewBox="0 0 1000 1000" >
          <path class="icons__svg-color" d="M793.8,10v980L206.2,500L793.8,10z"/>
        </svg>
      </a>
      <a class="links  " id="carousel-6__navigation-next<?php echo $carousel_6_data -> carousel_6_data['suffix']; ?>" role="button">
        <svg width="20" height="20" viewBox="0 0 1000 1000" >
          <path class="icons__svg-color" d="M206.2,990V10l587.7,490L206.2,990z"/>
        </svg>
      </a>
    </div>
  </div>
</section>

