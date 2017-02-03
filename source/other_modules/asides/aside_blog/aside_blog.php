<aside class="aside-blog">
  <b class="aside-blog__section-title">Categories</b>
  <div class="list-group">
    <a href="#" class="links  list-group-item">
      <span class="badge">100</span>
      Culture
    </a>
    <a href="#" class="links  list-group-item">
      <span class="badge">10000</span>
      Books
    </a>
    <a href="#" class="links  list-group-item  active">
      <span class="badge">50</span>
      Education
    </a>
    <a href="#" class="links  list-group-item">
      <span class="badge">1000</span>
      Jobs
    </a>
    <a href="#" class="links  list-group-item">
      <span class="badge">20</span>
      News
    </a>
  </div>

  <section class="search-aside">
    <b class="aside-blog__section-title">Search</b>
  <form action="">
    <div class="input-group">
      <input class="form-control" placeholder="Search for..." type="text">
              <span class="input-group-btn">
                <button class="btn btn-default" type="submit">
                  <svg width="15" height="15" viewBox="0 0 1792 1792">
                    <path class="icons__svg-color" d="M1216 832q0-185-131.5-316.5t-316.5-131.5-316.5 131.5-131.5 316.5 131.5 316.5 316.5 131.5 316.5-131.5 131.5-316.5zm512 832q0 52-38 90t-90 38q-54 0-90-38l-343-342q-179 124-399 124-143 0-273.5-55.5t-225-150-150-225-55.5-273.5 55.5-273.5 150-225 225-150 273.5-55.5 273.5 55.5 225 150 150 225 55.5 273.5q0 220-124 399l343 343q37 37 37 90z"></path>
                  </svg>
                </button>
              </span>
    </div><!-- /input-group -->
  </form>
  </section>

  <section class="recent-posts">
    <b class="aside-blog__section-title">Recent posts</b>
    <ul class="recent-posts__list-aside">

      <?php for ($bp = 1; $bp <= 4; ++$bp): ?>
        <li class="recent-posts__post">
          
            <div class="row">
              <div class="col-xs-4">
                <a class="links  image-wrapper  recent-posts__image-wrapper" href="#">
                  <img class="image" src="images/blog/recent-posts/recent-post-<?php echo $bp; ?>.jpg" alt="">
                </a>
              </div>
              <div class="col-xs-8">
                <div class="recent-posts___desc">
                  <h4 class="aside-blog__title">
                    <a class="links" href="#">2016 Tea Book Roundup</a>
                  </h4>
                  <span class="aside-blog__date">8, January 2017</span> <br>
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
  </section>


  <section class="recent-comments">
    <b class="aside-blog__section-title">Recent comments</b>
    <ul class="recent-comments__list-aside">

      <?php for ($bc = 1; $bc <= 4; ++$bc): ?>
        <li class="recent-comments__comment">
          
            <div class="row">
              <div class="col-xs-4">
                <a class="links  image-wrapper  recent-comments__image-wrapper" href="#">
                  <img class="image" src="images/blog/recent-comments/recent-comment-<?php echo $bc; ?>.jpg" alt="">
                </a>
              </div>
              <div class="col-xs-8">
                <div class="recent-comments___desc">
                  <h4 class="aside-blog__title">
                    <a class="links" href="#">Available Now — Tea: A User’s Guide</a>
                  </h4>
                  <span class="aside-blog__date">10, January 2017</span> <br>
                  <a class="links" href="#">
                    <svg class="allign-middle" width="20" height="20" viewBox="0 0 1792 1792">
                      <path class="icons__svg-color" d="M1600 1405q0 120-73 189.5t-194 69.5h-874q-121 0-194-69.5t-73-189.5q0-53 3.5-103.5t14-109 26.5-108.5 43-97.5 62-81 85.5-53.5 111.5-20q9 0 42 21.5t74.5 48 108 48 133.5 21.5 133.5-21.5 108-48 74.5-48 42-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-320-893q0 159-112.5 271.5t-271.5 112.5-271.5-112.5-112.5-271.5 112.5-271.5 271.5-112.5 271.5 112.5 112.5 271.5z"/>
                    </svg>
                    <span class="allign-middle">Tony Gebely </span>
                  </a>
                </div>
              </div>
            </div>
          
        </li>
      <? endfor; ?>

    </ul>
  </section>


</aside>
