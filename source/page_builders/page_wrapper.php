
    <div class="page-wrapper<?php echo $page_data -> Get_data( $_GET['page'] )['suffix']; ?>" id="page-wrapper-id">
    <?php require_once 'page_builders/'. $_GET['page'] .'_page_builder/'. $_GET['page'] .'_page_builder.php'; ?>
    </div>  
