<div id="myLogin" class="container-fluid">
	<div class="row centered-form">
		<div class="col-lg-6">
			<div class="panel panel-default well-lg">
				<div class="panel-heading">
					<h3 class="panel-title text-center">Category form</h3>			
				</div>
				<div class="panel-body">
					<form id="category_form" role=form>
						<div class="form-group">
							<input type="text" id="cat_name" name="cat_name" class="form-control input-sm" placeholder="Category name">
						</div>
						<div class="form-group well-lg">
							<input type="button" value="Add" class="btn btn-danger btn-block" id="add_cat">
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
					<h3 class="panel-title text-center">Show Category</h3>			
				</div>
				<div class="panel-body">
					<?php
						$q = "select * from ga_category";
						$result = $conn->query($q) or die($conn->error);

						if ($result->num_rows > 0) {
							echo "<ul id='cat_data'>";
							while ($ans = $result->fetch_object()) {
								echo "<li>";
									echo $ans->cat_name;
								echo "</li>";
							}
							echo "</ul>";
						}
					?>
				</div>
			</div>
		</div>
	</div>
</div>