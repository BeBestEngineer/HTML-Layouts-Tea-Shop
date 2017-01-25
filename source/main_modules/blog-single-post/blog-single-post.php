<main class="blog-single-post">
<?php require $breadcrumbs_1_data -> Get_data( 'blog-single-post', 'position-1' )['path']; ?>

  <div class="container">
    <div class="row">
      <div class="col-md-3  col-sm-6">
        <?php require_once 'other_modules/asides/aside_blog/aside_blog.php'; ?>
      </div>
      <div class="col-md-9  col-sm-6">
        <h1>Single post</h1>
      </div>
    </div>
    <div class="row">
      <?php require $carousel_2_data -> Get_data( 'all', 'position-1' )['path']; ?>
    </div>
  </div>
</main>