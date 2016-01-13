	<div class="page-content-wrapper">
		<div class="page-content">
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
			
			<?php $this->load->view('parts/style_customizer') ?>
			
			<div class="row">
				<div class="col-md-12">
					<h3 class="page-title">
					Sales <small>add sales account</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="<?php echo site_url('home'); ?>">
								Home
							</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="<?php echo site_url('sales'); ?>">
								Sales
							</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="<?php echo site_url('sales/edit'); ?>">
								Edit
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="portlet box blue" id="form_wizard_1">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-reorder"></i> Edit Account -
								<span class="step-title">
									 Step 1 of 3
								</span>
							</div>
							<!--
							<div class="tools hidden-xs">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
							-->
						</div>
						<div class="portlet-body form">
							<?php echo $this->session->flashdata('message') ?>
							<form action="<?php echo site_url('sales/update') ?>" class="form-horizontal" id="submit_form" method="post">
								<input type="hidden" name="sales_id" value="<?php echo $sales->sales_id ?>" />
								<div class="form-wizard">
									<div class="form-body">
										<ul class="nav nav-pills nav-justified steps">
											<li>
												<a href="#tab1" data-toggle="tab" class="step">
													<span class="number">
														 1
													</span>
													<span class="desc">
														<i class="fa fa-check"></i> Account Setup
													</span>
												</a>
											</li>
											<li>
												<a href="#tab2" data-toggle="tab" class="step">
													<span class="number">
														 2
													</span>
													<span class="desc">
														<i class="fa fa-check"></i> Profile Setup
													</span>
												</a>
											</li>
											<li>
												<a href="#tab3" data-toggle="tab" class="step">
													<span class="number">
														 3
													</span>
													<span class="desc">
														<i class="fa fa-check"></i> Confirm
													</span>
												</a>
											</li>
										</ul>
										<div id="bar" class="progress progress-striped" role="progressbar">
											<div class="progress-bar progress-bar-success">
											</div>
										</div>
										<div class="tab-content">
											<div class="alert alert-danger display-none">
												<button class="close" data-dismiss="alert"></button>
												You have some form errors. Please check below.
											</div>
											<div class="alert alert-success display-none">
												<button class="close" data-dismiss="alert"></button>
												Sales form validation is successful!
											</div>
											<div class="tab-pane active" id="tab1">
												<h3 class="block">Provide sales account details</h3>
												<div class="form-group">
													<label class="control-label col-md-3">Username
													<span class="required">
														 *
													</span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="sales_username" value="<?php echo $sales->sales_username; ?>"/>
														<span class="help-block">
															 Provide sales username
														</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Old Password
													<span class="required">
														 *
													</span>
													</label>
													<div class="col-md-4">
														<input type="password" class="form-control" name="edit_sales_pwd" />
														<span class="help-block">
															 Provide old password.
														</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">New Password
													<span class="required">
														 *
													</span>
													</label>
													<div class="col-md-4">
														<input type="password" class="form-control" name="edit_sales_npwd" id="edit_sales_npwd" />
														<span class="help-block">
															 Provide new password.
														</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Confirm New Password
													<span class="required">
														 *
													</span>
													</label>
													<div class="col-md-4">
														<input type="password" class="form-control" name="edit_sales_ncpwd"/>
														<span class="help-block">
															 Confirm new password
														</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Email
													<span class="required">
														 *
													</span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="sales_email" value="<?php echo $sales->sales_email; ?>"/>
														<span class="help-block">
															 Provide sales email address
														</span>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="tab2">
												<h3 class="block">Provide sales profile details</h3>
												<div class="form-group">
													<label class="control-label col-md-3">First Name
													<span class="required">
														 *
													</span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="sales_fname" value="<?php echo $sales->sales_fname; ?>"/>
														<span class="help-block">
															 Provide sales first name
														</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Last Name
													<span class="required">
														 *
													</span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="sales_lname" value="<?php echo $sales->sales_lname; ?>"/>
														<span class="help-block">
															 Provide sales last name
														</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Phone Number
													<span class="required">
														 *
													</span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="sales_phone" value="<?php echo $sales->sales_phone; ?>"/>
														<span class="help-block">
															 Provide sales phone number
														</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Gender
													<span class="required">
														 *
													</span>
													</label>
													<div class="col-md-4">
														<div class="radio-list">
															<?php
															$m_check = 'checked="checked"';$f_check = '';
															if($sales->sales_gender == 'F'){$m_check = '';$f_check = 'checked="checked"';}
															?>
															<label>
															<input type="radio" name="sales_gender" value="M" data-title="Male" <?php echo $m_check; ?>/>
															Male </label>
															<label>
															<input type="radio" name="sales_gender" value="F" data-title="Female" <?php echo $f_check; ?>/>
															Female </label>
														</div>
														<div id="sales_gender_error">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Address
													<span class="required">
														 *
													</span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="sales_address" value="<?php echo $sales->sales_address; ?>"/>
														<span class="help-block">
															 Provide sales street address
														</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">City/Town
													<span class="required">
														 *
													</span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="sales_city" value="<?php echo $sales->sales_city; ?>"/>
														<span class="help-block">
															 Provide sales city or town
														</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Region</label>
													<div class="col-md-4">
														<select name="sales_reg" id="country_list" multiple class="form-control">
															<?php foreach($region->result() as $row) : $selected = ($row->reg_id == $sales->sales_reg ? 'selected="selected"' : ''); ?>
															<option value="<?php echo $row->reg_id ?>" <?php echo $selected; ?>><?php echo $row->reg_name ?></option>
															<?php endforeach; ?>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">About</label>
													<div class="col-md-4">
														<textarea class="form-control" rows="3" name="sales_about"><?php echo $sales->sales_city; ?></textarea>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="tab3">
												<h3 class="block">Confirm your account</h3>
												<h4 class="form-section">Account</h4>
												<div class="form-group">
													<label class="control-label col-md-3">Username:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="sales_username">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Email:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="sales_email">
														</p>
													</div>
												</div>
												<h4 class="form-section">Profile</h4>
												<div class="form-group">
													<label class="control-label col-md-3">First Name:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="sales_fname">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Last Name:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="sales_lname">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Gender:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="sales_gender">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Phone:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="sales_phone">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Address:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="sales_address">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">City/Town:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="sales_city">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Region:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="sales_reg">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">About:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="sales_about">
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="form-actions fluid">
										<div class="row">
											<div class="col-md-12">
												<div class="col-md-offset-3 col-md-9">
													<a href="javascript:;" class="btn default button-previous">
														<i class="m-icon-swapleft"></i> Back
													</a>
													<a href="javascript:;" class="btn blue button-next">
														 Continue <i class="m-icon-swapright m-icon-white"></i>
													</a>
													<button type="submit" class="btn green button-submit">
														Submit <i class="m-icon-swapright m-icon-white"></i>
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
