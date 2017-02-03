<main class="main-modules  shopping-cart">
  <?php require $breadcrumbs_1_data -> Get_data( 'shopping-cart', 'position-1' )['path']; ?>


  <div class="container">
    <div class="row">
      <?php require $banner_1_data -> Get_data( 'all', 'position-1' )['path']; ?>
    </div>
  </div>

  <div class="container">
    <div class="row">
    <div class="col-xs-12">
      <div class="shopping-cart__table">
        <div class="shopping-cart__head  text-source-sans-pro-bold-16-up  grey-838182">
          <div class="row">
            <div class="col-xs-2  ">Product</div>
            <div class="col-xs-4  ">Description</div>
            <div class="col-xs-2  ">Unit price</div>
            <div class="col-xs-1  ">Quantity</div>
            <div class="col-xs-2  ">Total price</div>
            <div class="col-xs-1  ">Actions</div>
          </div>
        </div>
        <ul class="shopping-cart__list">
          <?php for ($sc = 1; $sc <= 3; ++$sc): ?>
            <li class="shopping-cart__item">
              <div class="row">
                <div class="col-sm-2  hidden-xs  shopping-cart__col-product-photo">
                  <a class="links  image-wrapper  shopping-cart__image-wrapper" href="#">
                    <img class="image" src="images/shopping-cart/shopping-cart-<?php echo $sc; ?>.jpg" alt="carousel-1-4-home image">
                  </a>
                </div>

                <div class="col-sm-4  col-xs-6   shopping-cart__col-product-info">
                  <h3 class="product__title"><a class="links" href="#">Anise (Star Anise)</a></h3>
                </div>

                <div class="col-sm-2  hidden-xs   shopping-cart__col-product-price">
                  <div class="product-price  ">
                    <span class="">&euro;</span>
                    <span class="">129</span>
                  </div>
                </div>

                <div class="col-sm-1  hidden-xs  shopping-cart__col-product-quantity">
                  <div class="product__quantity-buttons  product__info-text">
                    <button class="product__quantity-more" type="button">
                      <svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1395 1184q0 13-10 23l-50 50q-10 10-23 10t-23-10l-393-393-393 393q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l466 466q10 10 10 23z"></path>
                      </svg>
                    </button>
                    <input class="product__quantity-value  " value="100 gr." type="text">
                    <button class="product__quantity-less" type="button">
                      <svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1395 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"></path>
                      </svg>
                    </button>
                  </div>
                </div>

                <div class="col-sm-2  ">
                  <span class="total-price  ">
                    <span class="">&euro;</span>
                    <span class="">129</span>
                  </span>
                </div>

                <div class="col-sm-1  ">
                  <div class="action">
                    <a href="#" class="links  shopping-cart__delete-item">
                      <svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1490 1322q0 40-28 68l-136 136q-28 28-68 28t-68-28l-294-294-294 294q-28 28-68 28t-68-28l-136-136q-28-28-28-68t28-68l294-294-294-294q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 294 294-294q28-28 68-28t68 28l136 136q28 28 28 68t-28 68l-294 294 294 294q28 28 28 68z"/>
                      </svg>
                    </a>
                  </div>
                </div>

              </div><!--row-->
            </li>
          <? endfor; ?>

        </ul>
      </div>
      <div class="text-right">
        <a class="links  teashop-button" href="?page=products-list">Continue shoppping</a>
      </div>
    </div>
  </div>
  </div>

  <div class="container">
    <div class="row" >
      <div class="col-md-4" style="position: static;">

        <b class="shopping-cart__result-title  ">Estimate Shopping and Tax</b>
        <form class="shopping-cart__form" action="">

          <label for="shopping-cart-select-country">Country</label>
          <div class="input-group">
            <input class="form-control  shopping-cart__form-input  forms-input" id="shopping-cart-select-country" type="text" aria-label="..." placeholder="Select country">
            <div class="input-group-btn">
              <button type="button" class="shopping-cart__form-dropdown-button  btn  btn-default  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <svg class="shopping-cart__form-dropdown-icon" width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1395 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"/>
                </svg>
              </button>
              <ul class="dropdown-menu dropdown-menu-right">
                <li><a class="links" href="#">Russia</a></li>
                <li><a class="links" href="#">China</a></li>
                <li role="separator" class="divider"></li>
                <li><a class="links" href="#">USA</a></li>
                <li><a class="links" href="#">Canada</a></li>
                <li role="separator" class="divider"></li>
                <li><a class="links" href="#">Germany</a></li>
                <li><a class="links" href="#">Franca</a></li>
              </ul>
            </div><!-- /btn-group -->
          </div><!-- /input-group -->

          <label for="shopping-cart-select-state">State/Province</label>
          <div class="input-group">
            <input class="form-control  shopping-cart__form-input  forms-input" id="shopping-cart-select-state" type="text" aria-label="..." placeholder="State/Province">
            <div class="input-group-btn">
              <button type="button" class="shopping-cart__form-dropdown-button  btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <svg class="shopping-cart__form-dropdown-icon" width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1395 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"/>
                </svg>
              </button>
              <ul class="dropdown-menu dropdown-menu-right">
                <li><a class="links" href="#">West Siberis</a></li>
                <li><a class="links" href="#">East Siberia</a></li>
                <li role="separator" class="divider"></li>
                <li><a class="links" href="#">Far East</a></li>
                <li role="separator" class="divider"></li>
                <li><a class="links" href="#">Moskowia</a></li>
                <li><a class="links" href="#">West North</a></li>
              </ul>
            </div><!-- /btn-group -->
          </div><!-- /input-group -->

          <label for="shopping-cart-select-postcode">Postal code</label>
          <div class="input-group">
            <input class="form-control  shopping-cart__form-input  forms-input" id="shopping-cart-select-postcode" type="text" aria-label="..." placeholder="Zip/Postal code">
            <div class="input-group-btn">
              <button type="button" class="shopping-cart__form-dropdown-button  btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <svg class="shopping-cart__form-dropdown-icon" width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1395 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"/>
                </svg>
              </button>
              <ul class="dropdown-menu dropdown-menu-right">
                <li><a class="links" href="#">644000</a></li>
                <li><a class="links" href="#">655000</a></li>
                <li role="separator" class="divider"></li>
                <li><a class="links" href="#">675000</a></li>
                <li role="separator" class="divider"></li>
                <li><a class="links" href="#">600000</a></li>
                <li><a class="links" href="#">700000</a></li>
              </ul>
            </div><!-- /btn-group -->
          </div><!-- /input-group -->
          <button class="teashop-button" type="submit">
            <span class="button-text">Get quite</span>
          </button>
        </form>

      </div>


      <div class="col-md-4">
        <b class="shopping-cart__result-title">Discont code</b>
        <form class="form  shopping-cart__form-apply">
          <div class="form-group">
            <label for="shopping-cart-discont-code">Enter your coupon code</label>
            <input type="text" class="form-control     form-input-middle  forms-input" id="shopping-cart-discont-code" placeholder="You coupon code">
            <button class="teashop-button" type="submit">
              Apply
            </button>
          </div>
        </form>
      </div>


      <div class="col-md-4" style="position: static;">
        <b class="shopping-cart__result-title ">Cart total</b>

        <div class="shopping-cart__cart-result">
          <table class="table  shopping-cart__table-cart-result">
            <tbody>
            <tr>
              <td>
                <span class="">Cart subtotal</span>
              </td>
              <td class="">
                  <span class="">
                    <span class="">&euro;</span>
                    <span class="">1299,00</span>
                  </span>
              </td>
            </tr>
            <tr>
              <td>
                <span class="">Shipping</span>
              </td>
              <td class="">
                    <span class="" style="line-height: 25px;">
                      Free shipping
                    </span>
              </td>
            </tr>
            <tr>
              <td>
                <span class="">Cart total</span>
              </td>
              <td class="">
                    <span class="">
                      <span class="">&euro;</span>
                      <span class="">1299,00</span>
                    </span>
              </td>
            </tr>
            </tbody>
          </table>
        </div>

        <button class="teashop-button" type="button" >
          <span class="button-text">Proceed to checkout</span>
        </button>
      </div>
    </div>
  </div>


</main>
