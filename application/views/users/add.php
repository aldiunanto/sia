<div class="page-content-wrapper">
	<div class="page-content">

		<?php $this->load->view('parts/style_customizer') ?>

		<div class="row">
			<div class="col-md-12">
				<h3 class="page-title">
				Users <small>add new user</small>
				</h3>
				<ul class="page-breadcrumb breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo site_url('home') ?>">
							Home
						</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="<?php echo site_url('users') ?>">
							Users
						</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="javascript:;">
							Add New
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="portlet">
					<div class="portlet-body">
						<div class="alert alert-danger numeric-error-msg">Error! <strong></strong> must be numeric.</div>
						<form action="<?php echo site_url('users/store') ?>" method="post">
							<fieldset>
								<legend>General</legend>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label col-md-4">User Uniq Name*</label>
											<div class="col-md-8">
												<input type="text" class="form-control" required="required" name="user_uniq_name" id="user_uniq_name" required onchange='cek_user_uniq_name()' />
												<span class="help-block">
													 This field is required
												</span>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label col-md-4">User Status*</label>
											<div class="col-md-8">
												<select name="user_status" class="form-control" required="required">
													<option value="">-- Select --</option>
													<option value="1">Not Active</option>
													<option value="2">Active</option>
												</select>
												<span class="help-block">
													 This field is required
												</span>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label col-md-4">User Full Name*</label>
											<div class="col-md-8">
												<input type="text" class="form-control" required="required" id="user_fullname" name="user_fullname" />
												<span class="help-block">
													 This field is required
												</span>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label col-md-4">User Email*</label>
											<div class="col-md-8">
												<input type="email" class="form-control" required="required" name="user_email" />
												<span class="help-block">
													 This field is required
												</span>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							</fieldset>
							<fieldset>
								<legend>Security</legend>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label col-md-4">Password*</label>
											<div class="col-md-8">
												<input type="password" class="form-control" required="required" name="user_password" />
												<span class="help-block">
													 This field is required
												</span>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							</fieldset>
							<div class="form-actions right">
								<a href="<?php echo site_url('users') ?>" class="btn default">Cancel</a>
								<button type="submit" class="btn green"><i class="fa fa-save"></i> Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
function cek_user_uniq_name(){
    if($('#user_uniq_name').val().length<5){
      $('#message_content').html('Sorry, user uniq name must be more than 5 character!');
      $('#message').modal({
        show: true,
      });
      $('#message').on('hidden.bs.modal', function () {
        $('#user_uniq_name').focus();
      });
      return;
    }  
  	$.post( "<?=site_url('users/cek_username')?>",{ user_uniq_name: $('#user_uniq_name').val() }, function( data ) {
    if(data.status==true){
        focus = '#user_fullname'; message = 'Yeayy! User uniq name is available';
  	} else {
        focus = '#user_uniq_name';  message = 'Sorry, User uniq name not available!';
  	}
    $('#message_content').html(message);
    $('#message').modal({
      show: true,
    });
    $('#message').on('hidden.bs.modal', function () {
      $(focus).focus();
    });    
  });
}
</script>
	<div id="message" class="modal modal-styled fade">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h3 class="modal-title">Message</h3>
	      </div>
	      <div class="modal-body" id='message_content'>
	        <p><?=$this->session->flashdata('success').$this->session->flashdata('error')?></p>
	      </div>
	      <div class="modal-footer">
	        <!-- <button type="button" class="btn btn-tertiary" data-dismiss="modal">Close</button> -->
	        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->