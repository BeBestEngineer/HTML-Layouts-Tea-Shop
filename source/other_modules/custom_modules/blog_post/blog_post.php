  <div class="row">
    <div class="col-sm-6">
      <a class="links  image-wrapper  <?php echo $blog_post_data -> blog_post_data['class__image-wrapper']; ?>" href="#">
        <img class="image" src="<?php echo $blog_post_data -> blog_post_data['img-src'] .'post-'.$ba; ?>.jpg" alt="">
      </a>
    </div>

    <div class="col-sm-6">
      <div class="post">
        <h3 class="post__title">
          <a class="links" href="#"><?php echo $blog_post_data -> blog_post_data['title-of-block']; ?></a>
        </h3>
        <a class="links  post__comments" href="#">
          <svg class="allign-middle" width="20" height="20" viewBox="0 0 1792 1792">
            <path class="icons__svg-color" d="M1408 768q0 139-94 257t-256.5 186.5-353.5 68.5q-86 0-176-16-124 88-278 128-36 9-86 16h-3q-11 0-20.5-8t-11.5-21q-1-3-1-6.5t.5-6.5 2-6l2.5-5 3.5-5.5 4-5 4.5-5 4-4.5q5-6 23-25t26-29.5 22.5-29 25-38.5 20.5-44q-124-72-195-177t-71-224q0-139 94-257t256.5-186.5 353.5-68.5 353.5 68.5 256.5 186.5 94 257zm384 256q0 120-71 224.5t-195 176.5q10 24 20.5 44t25 38.5 22.5 29 26 29.5 23 25q1 1 4 4.5t4.5 5 4 5 3.5 5.5l2.5 5 2 6 .5 6.5-1 6.5q-3 14-13 22t-22 7q-50-7-86-16-154-40-278-128-90 16-176 16-271 0-472-132 58 4 88 4 161 0 309-45t264-129q125-92 192-212t67-254q0-77-23-152 129 71 204 178t75 230z"></path>
          </svg>
          <span class="allign-middle"><?php echo $blog_post_data -> blog_post_data['desc']['1']['comments-quantity']; ?> comments</span>
        </a>
        /
        <a class="links  post__autor-name" href="#">
          <svg class="allign-middle" width="20" height="20" viewBox="0 0 1792 1792">
            <path class="icons__svg-color" d="M1600 1405q0 120-73 189.5t-194 69.5h-874q-121 0-194-69.5t-73-189.5q0-53 3.5-103.5t14-109 26.5-108.5 43-97.5 62-81 85.5-53.5 111.5-20q9 0 42 21.5t74.5 48 108 48 133.5 21.5 133.5-21.5 108-48 74.5-48 42-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-320-893q0 159-112.5 271.5t-271.5 112.5-271.5-112.5-112.5-271.5 112.5-271.5 271.5-112.5 271.5 112.5 112.5 271.5z"></path>
          </svg>
          <span class="allign-middle"><?php echo $blog_post_data -> blog_post_data['desc']['1']['autor']; ?></span>
        </a>
        <p class="post__desc" >
          <?php echo $blog_post_data -> blog_post_data['desc']['1']['text']; ?>
        </p>

        <div class="">
          <div class="text-right">
            <span>
              <?php echo $blog_post_data -> blog_post_data['desc']['1']['date']; ?>
            </span>
          </div>
          <div class="  text-right">
            <a class="links" href="#">
              <span class="allign-middle">Read more</span>
              <svg class="allign-middle" width="20" height="20"  viewBox="0 0 1000 1000">
                <path class="icons__svg-color" d="M10,10.2L990,500L10,989.8V10.2z"/>
              </svg>
            </a>
          </div>
        </div>

      </div>
    </div>
  </div>