<!-- LOGIN FORM -->
<div id="myLogin" class="container-fluid">
	<div class="row centered-form">
		<div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
			<div class="panel panel-default well-lg">
				<div class="panel-heading">
					<h3 class="panel-title text-center">Login to Myntra</h3>			
				</div>
				<div class="panel-body">
					<form id="login_form" role=form>
						<div class="form-group">
							<input type="email" name="userEmail" class="form-control input-sm" placeholder="Email Address">
						</div>
						<div class="form-group">
							<input type="password" name="userPassword" class="form-control input-sm" placeholder="Password">
						</div>
						<div class="form-group well-lg">
							<input type="button" value="Login" class="btn btn-danger btn-block" id="login_btn">
							<input type="button" value="Forget Password" class="btn btn-danger btn-block" 
							data-toggle="modal" data-target="#myForgetModal" id="forget_btn">
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