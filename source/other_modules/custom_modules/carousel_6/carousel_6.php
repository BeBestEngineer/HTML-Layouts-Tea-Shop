<section class="carousel-6">
  <div class="container" style="padding: 0;">
    <h1 class="text-center"><?php echo $carousel_6_data -> carousel_6_data['title-of-section']; ?></h1>
    <p class="text-center">Suspendisse neque urna, accumsan fermentum sem quis.</p>


    <ul class="carousel-6__container" id="carousel-6<?php echo $carousel_6_data -> carousel_6_data['id']; ?>">

      <?php for ($at = 1; $at <= 8; ++$at): ?>
        <li class="item carousel-6__container-item">

          <div class="image-wrapper  carousel-6__image-wrapper">
            <img class="image" src="<?php echo ( $carousel_6_data -> carousel_6_data['img-src']) .'about-us-'. $at .'.jpg'; ?>" alt="carousel-6-image">
          </div>
          <div class="text-center">
            <b><?php echo $carousel_6_data -> carousel_6_data['members'][$at]['name']; ?></b> <br>
            <span><?php echo $carousel_6_data -> carousel_6_data['members'][$at]['post']; ?></span>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda autem consequatur illo itaque natus voluptatem?
            </p>
          </div>
        </li>
      <?php endfor; ?>

    </ul>

    <div class="carousel-6__navigation  hidden-sm  hidden-xs">
      <a class="carousel-6__navigation-prev<?php echo $carousel_6_data -> carousel_6_data['suffix']; ?>" role="button">
        <svg width="20" height="20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
          <g><g transform="matrix(1 0 0 -1 0 1008)"><path d="M309.4,508L724.6,99.7v816.7L309.4,508z M806.3,936.8V79.3L683.8,18l-490,490l490,490L806.3,936.8z"/></g></g>
        </svg>
      </a>
      <a class="carousel-6__navigation-next<?php echo $carousel_6_data -> carousel_6_data['suffix']; ?>" role="button">
        <svg width="20" height="20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
          <g><g transform="matrix(1 0 0 -1 0 1008)"><path d="M275.4,99.7L690.6,508L275.4,916.3V99.7z M316.3,998l490-490l-490-490L193.8,79.2v857.5L316.3,998z"/></g></g>
        </svg>
      </a>
    </div>
  </div>
</section>

