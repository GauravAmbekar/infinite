<div id="mybrand" class="container-fluid">
  <div class="row centered-form">
    <div class="col-lg-6">
      <div class="panel panel-default well-lg">
        <div class="panel-heading">
          <h3 class="panel-title text-center">Brand form</h3>     
        </div>
        <div class="panel-body">
          <form id="brand_form" role=form>
            <div class="form-group">
              <input type="text" id="brand_name" name="brand_name" class="form-control input-sm" placeholder="Brand name">
            </div>
            <div class="form-group well-lg">
              <input type="button" value="Add" class="btn btn-danger btn-block" id="add_brand">
            </div>
            <div class="form-group">
                <div class="msg bg-danger text-center"></div>
              </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="panel panel-default well-lg">
        <div class="panel-heading">
          <h3 class="panel-title text-center">Show Brand</h3>     
        <div class="panel-body">
          <?php
            $q = "select * from brand";
            $result = $conn->query($q) or die($conn->error);

            if ($result->num_rows > 0) {
              echo "<ul id='brand_data'>";
              while ($ans = $result->fetch_object()) {
                echo "<li>";
                  echo $ans->brand_name;
                echo "</li>";
              }
              echo "</ul>";
            }
          ?>
        </div>
      </div>
    </div>
  </div>