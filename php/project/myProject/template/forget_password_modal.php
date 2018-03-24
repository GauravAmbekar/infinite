<!-- Modal -->
<div class="modal fade" id="myForgetModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content ">
	    	<div class="modal-header">
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        	<h4 class="modal-title" id="myModalLabel">Forgot Password</h4>
	      	</div>
	      	<div class="modal-body alert alert-info">

	      		<form id="forgot_form1" role=form>
					<div class="form-group">
						<input type="email" name="userEmail" id="userEmail" class="form-control input-sm" placeholder="Email Address">
					</div>
					<div class="modal-footer">
	        			<button type="button" class="btn btn-info" id="forgot_btn1" >Send OTP</button>
	      			</div>
	      		</form>

	      		<form id="forgot_form2" role=form>
					<div class="form-group">
						<input type="text" name="userOtp" class="form-control input-sm" placeholder="OTP">
					</div>
					<div class="modal-footer">
	        			<button type="button" class="btn btn-info" id="forgot_btn2">Check OTP</button>
	      			</div>
	      		</form>

	      		<form id="forgot_form3" role=form>
					<div class="form-group">
						<input type="password" name="userPassword" class="form-control input-sm" placeholder="New Password">
					</div>
					<div class="form-group">
						<input type="password" name="userConfirmPassword" class="form-control input-sm" placeholder="Confirm New Password">
					</div>
					<div class="modal-footer">
	        			<button type="button" class="btn btn-info" id="forgot_btn3">Update Password</button>
	      			</div>
	      		</form>

				<div class="form-group">
			    	<div class="msg1 bg-danger text-center"></div>
			    </div>
	      	</div>
	    </div>
	</div>
</div>
<!-- End of Modal -->