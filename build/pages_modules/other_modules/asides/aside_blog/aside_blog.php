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

  <section class="aside-blog__section  search-aside">
    <b class="aside-blog__section-title">Search</b>
  <form action="">
    <div class="input-group">
      <input class="form-control" placeholder="Search for..." type="text">
              <span class="input-group-btn">
                <button class="btn  btn-default  theme-buttons__buttons--input-group" type="submit">
                  <svg width="15" height="15" viewBox="0 0 1792 1792">
                    <path class="icons__svg-color" d="M1216 832q0-185-131.5-316.5t-316.5-131.5-316.5 131.5-131.5 316.5 131.5 316.5 316.5 131.5 316.5-131.5 131.5-316.5zm512 832q0 52-38 90t-90 38q-54 0-90-38l-343-342q-179 124-399 124-143 0-273.5-55.5t-225-150-150-225-55.5-273.5 55.5-273.5 150-225 225-150 273.5-55.5 273.5 55.5 225 150 150 225 55.5 273.5q0 220-124 399l343 343q37 37 37 90z"></path>
                  </svg>
                </button>
              </span>
    </div><!-- /input-group -->
  </form>
  </section>


  <section class="aside-blog__section  recent-posts">
    <?php require_once 'pages_modules/other_modules/custom_modules/recent_posts_1/recent_posts_1.php'; ?>
  </section>


  <section class="aside-blog__section  recent-comments">
    <?php require_once 'pages_modules/other_modules/custom_modules/recent_comments_1/recent_comments_1.php'; ?>
  </section>


</aside>
