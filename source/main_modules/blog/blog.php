<section class="breadcrumbs">
  <div class="container">
    <div class="row">
      <?php require $breadcrumbs_1_data -> Get_data( 'blog', 'position-1' )['path']; ?>
    </div>
  </div>
</section>

<div class="container">
  <section class="section">
    <div class="row">
      <div class="col-lg-3  col-md-4  col-sm-6">
        <?php require_once 'other_modules/asides/aside_blog/aside_blog.php'; ?>
      </div>


      <div class="col-lg-9  col-md-8  col-sm-6">
        <main class="main-modules  blog">
          <div class="row"><!--posts ( begin )-->
            <?php for ($ba = 1; $ba <= 8; ++$ba): ?>

              <article class="col-lg-6  blog__post">
                <?php require $blog_post_data->Get_data('blog', 'recent-posts')['path']; ?>
              </article>

            <? endfor; ?>
          </div><!--posts ( end )-->


          <div class="row"><!--pagination (begin)-->
            <div class="col-md-7  products-list__options"></div>

            <div class="col-md-5  text-right">
              <?php require 'other_modules/custom_modules/pagination/pagination.php'?>
            </div>

          </div><!--pagination ( end )-->
        </main>
      </div>
    </div>
  </section>


  <section class="section  carousel  carousel-2">
    <div class="row">
      <div class="container" style="padding: 0;">
        <?php require $carousel_2_data -> Get_data( 'all', 'position-1' )['path']; ?>
      </div>
    </div>
  </section>
</div>

