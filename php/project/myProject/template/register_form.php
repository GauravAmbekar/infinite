<!-- REGISTRATION FORM -->
<div id="myRegistration" class="container-fluid">
	<div class="row centered-form">
		<div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
			<div class="panel panel-default well-lg">
				<div class="panel-heading">
					<h3 class="panel-title text-center">Register to Myntra</h3>			
				</div>
				<div class="panel-body">
					<form id="register_form" role=form>
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="userName" class="form-control input-sm" placeholder="Name">
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="userMobile" class="form-control input-sm" placeholder="Mobile No.">
								</div>
							</div>
						</div>
						<div class="form-group">
							<!-- Email: <input type="text" name="userEmail"><br/> -->
							<input type="email" name="userEmail" class="form-control input-sm" placeholder="Email Address">
						</div>
						<div class="row">
			    			<div class="col-xs-6 col-sm-6 col-md-6">
			    				<div class="form-group">
									<input type="password" name="userPassword" class="form-control input-sm" placeholder="Password">
									<!-- Password: <input type="password" name="userPass"><br/> -->
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6">
			    				<div class="form-group">
									<!-- Confirm Password: <input type="password" name="userCpass"><br/> -->
									<input type="password" name="userConfirmPassword" class="form-control input-sm" placeholder="Confirm Password">
								</div>
							</div>
						</div>
						<div class="form-group well-lg">
							<!-- <input type="button" value="Submit" class="btn"> -->
							<input type="button" value="Submit" class="btn btn-danger btn-block" id="register_btn">
						</div>
						<div class="form-group">
			    			<div class="msg bg-danger text-center"></div>
			    		</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- <script type="text/javascript" src="js/jquery.js"></script> -->
<!-- <script type="text/javascript" src="project.js"></script> -->