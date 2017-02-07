<b class="recent-posts__section-title">Recent posts</b>
<ul class="recent-posts__list-aside">

  <?php for ($bp = 1; $bp <= 4; ++$bp): ?>
    <li class="recent-posts__post">

      <div class="row">
        <div class="col-xs-4">
          <a class="links  image-wrapper  recent-posts__image-wrapper" href="#">
            <img class="image--responsive" src="images/blog/recent-posts/recent-post-<?php echo $bp; ?>.jpg" alt="">
          </a>
        </div>
        <div class="col-xs-8">
          <h4 class="recent-posts__title">
            <a class="links" href="#">2016 Tea Book Roundup</a>
          </h4>
          <div class="recent-posts__desc">
            <span class="recent-posts__date">8, January 2017</span>
            <a class="links" href="#">
              <svg class="allign-middle" width="20" height="20" viewBox="0 0 1792 1792">
                <path class="icons__svg-color" d="M1152 1248v416h-928q-40 0-68-28t-28-68v-1344q0-40 28-68t68-28h1344q40 0 68 28t28 68v928h-416q-40 0-68 28t-28 68zm128 32h381q-15 82-65 132l-184 184q-50 50-132 65v-381z"/>
              </svg>
              <span class="allign-middle">10 comments</span>
            </a>
          </div>
        </div>
      </div>

    </li>
  <? endfor; ?>

</ul>