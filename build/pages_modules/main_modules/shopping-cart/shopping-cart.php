<section class="breadcrumbs">
  <div class="container">
    <div class="row">
      <?php require $breadcrumbs_1_data -> Get_data( 'shopping-cart', 'position-1' )['path']; ?>
    </div>
  </div>
</section>


<main class="main-modules  shopping-cart">
  <section class="section  ">
    <div class="container">
  <?php require $banner_1_data -> Get_data( 'all', 'position-1' )['path']; ?>
    </div>
  </section>

  <section class="section  shopping-cart__table">
    <div class="container">
      <div class="row">
      <div class="col-xs-12">

          <div class="shopping-cart__head  hidden-xs">
            <div class="row">
              <div class="col-md-2  col-sm-2  col-xs-2">Product</div>
              <div class="col-md-4  col-sm-3  col-xs-3">Description</div>
              <div class="col-md-2  col-sm-2  col-xs-2">Unit price</div>
              <div class="col-md-1  col-sm-1  col-xs-1">Quantity</div>
              <div class="col-md-2  col-sm-2  col-xs-2  shopping-cart__head-col--total-price">Total price</div>
              <div class="col-md-1  col-sm-2  col-xs-2  shopping-cart__head-col--action">Actions</div>
            </div>
          </div>

          <ul class="shopping-cart__list">

            <?php for ($sc = 1; $sc <= 3; ++$sc): ?>
              <li class="shopping-cart__item">
                <div class="row">

                  <div class="col-md-2  col-sm-2  col-xs-6  shopping-cart__col  shopping-cart__col  shopping-cart__col-product--photo">
                    <a class="links  image-wrapper  shopping-cart__image-wrapper  pull-left" href="?page=product">
                      <img class="image  shopping-cart__image" src="images/shopping-cart/shopping-cart-<?php echo $sc; ?>.jpg" alt="carousel-1-4-home image">
                    </a>
                  </div>

                  <div class="col-md-4  col-sm-3  col-xs-6  shopping-cart__col  shopping-cart__col-product--info">
                    <div class="visible-xs-block  shopping-cart__head--mobile">Description</div>
                    <h3 class="product__title"><a class="links" href="?page=product">Anise (Star Anise)</a></h3>
                  </div>


                  <div class="col-md-2  col-sm-2  col-xs-6  shopping-cart__col  shopping-cart__col--product--price">
                    <div class="visible-xs-block    shopping-cart__head--mobile">Unit price</div>
                      <span class="">&euro;</span>
                      <span class="">129</span>
                  </div>

                  <div class="col-md-1  col-sm-1  col-xs-6  shopping-cart__col  shopping-cart__col-product-quantity">
                    <div class="visible-xs-block    shopping-cart__head--mobile">Quantity</div>
                    <div      class="widget-quantity-goods">
                      <button class="allign-middle  widget-quantity-goods__button  btn  btn-default  theme-buttons__buttons--more-less" id="product__quantity-more" type="button">
                        <svg width="20" height="20" viewBox="0 0 1792 1792" >
                          <path class="icons__svg-color" d="M1395 1184q0 13-10 23l-50 50q-10 10-23 10t-23-10l-393-393-393 393q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l466 466q10 10 10 23z"/>
                        </svg>
                      </button>
                      <input  class="allign-middle  widget-quantity-goods__input" id="product__quantity-value" type="text" value="100 gr.">
                      <button class="allign-middle  widget-quantity-goods__button  btn  btn-default  theme-buttons__buttons--more-less" id="product__quantity-less" type="button">
                        <svg width="20" height="20" viewBox="0 0 1792 1792" >
                          <path class="icons__svg-color" d="M1395 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"/>
                        </svg>
                      </button>
                    </div>
                  </div>

                  <div class="col-md-2  col-sm-2  col-xs-6  col-sm-offset-0  col-xs-offset-6  shopping-cart__col  shopping-cart__col--total-price">
                    <div class="visible-xs-block  shopping-cart__head--mobile">Total price</div>
                      <span class="">&euro;</span>
                      <span class="">129</span>
                  </div>

                  <div class="col-md-1  col-sm-2  col-xs-6  col-sm-offset-0  col-xs-offset-6  shopping-cart__col  shopping-cart__col--action">
                    <div class="visible-xs-block  shopping-cart__head--mobile">Action</div>
                      <a href="#" class="links  shopping-cart__delete-item">
                        <svg width="20" height="20" viewBox="0 0 1792 1792">
                          <path class="icons__svg-color" d="M1490 1322q0 40-28 68l-136 136q-28 28-68 28t-68-28l-294-294-294 294q-28 28-68 28t-68-28l-136-136q-28-28-28-68t28-68l294-294-294-294q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 294 294-294q28-28 68-28t68 28l136 136q28 28 28 68t-28 68l-294 294 294 294q28 28 28 68z"/>
                        </svg>
                      </a>
                  </div>

                </div><!--row-->
              </li>
            <? endfor; ?>

          </ul>
          <div class="text-right">
            <a class="links  btn  btn-default  theme-buttons__links--default" href="?page=products-list">Continue shoppping</a>
          </div>

      </div>
    </div>
    </div>
  </section>


  <section class="section">
    <div class="container">
    <div class="row" >
      <div class="col-md-4  col-sm-6  shopping-cart__form-wrapper">

        <b class="forms-title  ">Estimate Shopping and Tax</b>
        <form class="shopping-cart__form" action="">
          <div class="form-group">
            <label for="shopping-cart-select-country">Country</label>
            <div class="input-group">
            <input class="form-control  shopping-cart__form-input  forms-input" id="shopping-cart-select-country" type="text" aria-label="..." placeholder="Select country">
            <div class="input-group-btn">
              <button type="button" class="btn  btn-default  dropdown-toggle  theme-buttons__buttons--input-group" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <svg class="shopping-cart__form-dropdown-icon" width="20" height="20" viewBox="0 0 1792 1792">
                  <path class="icons__svg-color" d="M1395 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"/>
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
          </div>
          <div class="form-group">
            <label for="shopping-cart-select-state">State/Province</label>
            <div class="input-group">
            <input class="form-control  shopping-cart__form-input  forms-input" id="shopping-cart-select-state" type="text" aria-label="..." placeholder="State/Province">
            <div class="input-group-btn">
              <button type="button" class="btn  btn-default  dropdown-toggle  theme-buttons__buttons--input-group" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <svg class="shopping-cart__form-dropdown-icon" width="20" height="20" viewBox="0 0 1792 1792">
                  <path class="icons__svg-color" d="M1395 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"/>
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
          </div>
          <div class="form-group">
            <label for="shopping-cart-select-postcode">Postal code</label>
            <div class="input-group">
            <input class="form-control  shopping-cart__form-input  forms-input" id="shopping-cart-select-postcode" type="text" aria-label="..." placeholder="Zip/Postal code">
            <div class="input-group-btn">
              <button type="button" class="btn  btn-default  dropdown-toggle  theme-buttons__buttons--input-group" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <svg class="shopping-cart__form-dropdown-icon" width="20" height="20" viewBox="0 0 1792 1792">
                  <path class="icons__svg-color" d="M1395 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"/>
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
          </div>
          <button class="btn  btn-default  theme-buttons__buttons--default" type="submit">
            <span class="button-text">Get quite</span>
          </button>
        </form>

      </div>


      <div class="col-md-4  col-sm-6  shopping-cart__form-wrapper">
        <b class="forms-title">Discont code</b>
        <form class="form  shopping-cart__form-apply">
          <div class="form-group">
            <div class="form-group">
              <label for="shopping-cart-discont-code">Enter your coupon code</label>
              <input type="text" class="form-control     form-input-middle  forms-input" id="shopping-cart-discont-code" placeholder="You coupon code">
            </div>
            <button class="btn  btn-default  theme-buttons__buttons--default" type="submit">
              Apply
            </button>
          </div>
        </form>
      </div>


      <div class="col-md-4  col-sm-12">
        <b class="forms-title ">Cart total</b>

        <div class="form-group">
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
        </div>

        <div class="text-right">
          <button class="btn  btn-default  theme-buttons__buttons--default" type="button" >
            Proceed to checkout
          </button>
        </div>

      </div>
    </div>
  </div>
  </section>

</main>
