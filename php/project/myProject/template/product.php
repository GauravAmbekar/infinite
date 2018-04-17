
<!-- PRODUCTS -->
<div id="myProduct" class="container">
  <div class="col-lg-3">
    <div class="panel-group">
      <div class="panel panel-default">
        
        <div class="panel-heading">
          <h4 class="panel-title"><strong>brand</strong></h4>
        </div>
        <div class="panel-body">
          <ul class="nav nav-pills nav-stacked">
              <?php 
                $record = get($conn, "select * from brand"); 
                foreach ($record as $row):
              ?>
              <li role="presentation">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"><?php echo $row->brand_name; ?>
                  </label>
                </div>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>

        <div class="panel-heading">
          <h4 class="panel-title"><strong>category</strong></h4>
        </div>
        <div class="panel-body">
          <ul class="nav nav-pills nav-stacked">
            <?php 
                $record = get($conn, "select * from ga_category"); 
                foreach ($record as $row):
              ?>
              <li role="presentation">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"><?php echo $row->cat_name; ?>
                  </label>
                </div>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>

        <div class="panel-heading">
          <h4 class="panel-title"><strong>color</strong></h4>
        </div>
        <div class="panel-body">
          <ul class="list-inline color-box">
              <li>Red</li>
              <li>Yellow</li>
              <li>blue</li>
              <li>White</li>
              <li>Black</li>
              <li>Green</li>
              <li>Maroon</li>
          </ul>
        </div>

        <div class="panel-heading">
          <h4 class="panel-title"><strong>discount</strong></h4>
        </div>
        <div class="panel-body">
          <ul class="nav nav-pills nav-stacked">
              <li role="presentation">
                <div class="checkbox">
                  <label>
                    <input type="checkbox">80% and above
                  </label>
                </div>
              </li>

              <li role="presentation">
                <div class="checkbox">
                  <label>
                    <input type="checkbox">70% and above
                  </label>
                </div>
              </li>

              <li role="presentation">
                <div class="checkbox">
                  <label>
                    <input type="checkbox">60% and above
                  </label>
                </div>
              </li>
              <li role="presentation">
                <div class="checkbox">
                  <label>
                    <input type="checkbox">50% and above
                  </label>
                </div>
              </li>
              <li role="presentation">
                <div class="checkbox">
                  <label>
                    <input type="checkbox">40% and above
                  </label>
                </div>
              </li>
              <li role="presentation">
                <div class="checkbox">
                  <label>
                    <input type="checkbox">30% and above
                  </label>
                </div>
              </li>
              <li role="presentation">
                <div class="checkbox">
                  <label>
                    <input type="checkbox">20% and above
                  </label>
                </div>
              </li>
              <li role="presentation">
                <div class="checkbox">
                  <label>
                    <input type="checkbox">10% and above
                  </label>
                </div>
              </li>
          </ul>
        </div>

      </div>
    </div>
  </div>


  <div class="col-lg-9">
    <h2 class="text-center">Feature Item</h2>
    <?php 
      $result = get($conn, "select product_id, product_name, round(product_price) as product_price, round((product_price)-(product_price*product_discount/100)) as product_discounted, product_discount, product_path, product_desc, brand_name, cat_name from products, brand, ga_category where products.brand_id = brand.brand_id
        and products.cat_id = ga_category.cat_id order by product_id desc ");
      if (is_array($result)):
        foreach ($result as $value):
    ?>
    <div class="col-lg-3">
      <img class="img-responsive" src="<?php echo $value->product_path;?>"" alt="mens wear"></img>
      <p class="text-center text-capitalize">
        <strong><?php echo $value->brand_name;?></strong>
      </p>
      <p class="text-center text-capitalize">
        <small><?php echo $value->cat_name;?></small>
      </p>
      <p class="text-center text-capitalize">
        <small>
          <b>Rs. <?php echo $value->product_discounted;?></b> 
          <strike>Rs. <?php echo $value->product_price;?></strike>
          <sub style="color: orange;">(<?php echo $value->product_discount;?> OFF)</sub>
        </small>
      </p>
      <p class="text-center"><a class="btn btn-default" type="button">Add to Cart</a></p>
    </div>
    <?php
      endforeach;
    endif;
    ?>
  </div>
</div>

<!-- END OF PRODUCTS -->