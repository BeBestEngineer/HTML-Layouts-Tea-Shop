
    <h2 class="section-title  text-center">Our brands</h2>
    <p class="section-desc  text-center">Suspendisse neque urna, accumsan fermentum sem quis.</p>

    <div class="carousel-wrapper">
      <ul class="carousel-2__container" id="carousel-2<?php echo $carousel_2_data -> carousel_2['id']; ?>">
  
        <?php for ($ib = 1; $ib <= 12; ++$ib): ?>
          <li class="item carousel-2__container-item">
  
            <div class="image-wrapper  carousel-2__image-wrapper">
              <img class="image" src="<?php echo ( $carousel_2_data -> carousel_2['img-src']) .'brand-'. $ib .'.png'; ?>" alt="carousel-2-image">
            </div>
  
          </li>
        <? endfor; ?>
  
      </ul>
  
      <div class="carousel-2__navigation  hidden-sm  hidden-xs">
        <a class="links  btn  carousel-navigation__prev" id="carousel-2__navigation-prev<?php echo $carousel_2_data -> carousel_2['suffix']; ?>" role="button">
          <svg class="carousel-navigation__icon" width="20" height="20" viewBox="0 0 1000 1000">
            <path class="icons__svg-color" d="M793.8,10v980L206.2,500L793.8,10z"/>
          </svg>
        </a>
        <a class="links  btn  carousel-navigation__next" id="carousel-2__navigation-next<?php echo $carousel_2_data -> carousel_2['suffix']; ?>" role="button">
          <svg class="carousel-navigation__icon" width="20" height="20" viewBox="0 0 1000 1000">
            <path class="icons__svg-color" d="M206.2,990V10l587.7,490L206.2,990z"/>
          </svg>
        </a>
      </div>
    </div>
 
