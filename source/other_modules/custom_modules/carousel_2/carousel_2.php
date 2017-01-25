<section class="carousel-2">
  <div class="container" style="padding: 0;">
    <h1 class="text-center">Our brands</h1>
    <p class="text-center">Suspendisse neque urna, accumsan fermentum sem quis.</p>


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
      <a class="carousel-2__navigation-prev<?php echo $carousel_2_data -> carousel_2['suffix']; ?>" role="button">
        <svg width="20" height="20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
          <g><path d="M793.8,10v980L206.2,500L793.8,10z"/></g>
        </svg>
      </a>
      <a class="carousel-2__navigation-next<?php echo $carousel_2_data -> carousel_2['suffix']; ?>" role="button">
        <svg width="20" height="20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
          <g><path d="M206.2,990V10l587.7,490L206.2,990z"/></g>
        </svg>
      </a>
    </div>
  </div>
</section>
