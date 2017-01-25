<main class="blog">
  <?php require $breadcrumbs_1_data->Get_data('blog', 'position-1')['path']; ?>

  <div class="container">
    <div class="row">
      <div class="col-md-3  col-sm-6">
        <?php require_once 'other_modules/asides/aside_blog/aside_blog.php'; ?>
      </div>
      <div class="col-md-9  col-sm-6">
        <div class="row">
          <?php for ($ba = 1; $ba <= 8; ++$ba): ?>
          <div class="col-sm-6">
            <article class="blog__post">
            <?php require $blog_post_data->Get_data('blog', 'recent-posts')['path']; ?>
            </article>
          </div>
          <? endfor; ?>
        </div>

        <div class="row"><!--pagination (begin)-->
          <div class="col-md-7  products-list__options"></div>

          <div class="col-md-5  text-right">
            <nav aria-label="Page navigation">
              <ul class="pagination">
                <li>
                  <a href="#" aria-label="Previous">
                    <span aria-hidden="true">«</span>
                  </a>
                </li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li>
                  <a href="#" aria-label="Next">
                    <span aria-hidden="true">»</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>

        </div><!--pagination (end)-->

    </div>
  </div>
  <div class="row">
    <?php require $carousel_2_data->Get_data('all', 'position-1')['path']; ?>
  </div>
  </div>
</main>