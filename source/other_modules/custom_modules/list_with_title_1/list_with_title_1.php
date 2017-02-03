<b class="list-with-title-1__title "><?php echo $list_with_title_1_data -> list_with_title_1_data['title']; ?></b>
<ul class="list-with-title-1__list">

    <?php foreach( $list_with_title_1_data -> list_with_title_1_data['list-items'] as $list_with_title_1_value ): ?>
    <li class="list-with-title-1__item">
      <a class="links  allign-top  list-with-title-1__text" href="#">
        <svg  class="allign-top  list-with-title-1__icon" width="20" height="20" viewBox="0 0 1792 1792">
          <path class="icons__svg-color" d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"/>
        </svg>
        <div class="list-with-title-1__text">
        <?php echo $list_with_title_1_value; ?>
        </div>
      </a>
    </li>
    <?php endforeach; ?>
  

</ul>

