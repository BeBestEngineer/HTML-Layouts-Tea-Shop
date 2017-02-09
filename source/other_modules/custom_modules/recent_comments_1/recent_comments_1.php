<b class="recent-comments__section-title">Recent comments</b>
<ul class="recent-comments__list">

  <?php for ($bc = 1; $bc <= 4; ++$bc): ?>
    <li class="recent-comments__comment">

      <div class="row">
        <div class="col-xs-4">
          <a class="links  image-wrapper  recent-comments__image-wrapper" href="#">
            <img class="image--responsive  recent-comments__image" src="images/blog/recent-comments/recent-comment-<?php echo $bc; ?>.jpg" alt="">
          </a>
        </div>
        <div class="col-xs-8">
          <h4 class="recent-comments__title">
            <a class="links" href="#">Available Now — Tea: A User’s Guide</a>
          </h4>
          <div class="recent-comments__desc">
            <span class="recent-comments__date">10, January 2017</span>
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