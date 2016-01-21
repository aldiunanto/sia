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
					Customers <small>edit customer</small>
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
							<a href="<?php echo site_url('customers'); ?>">
								Customers
							</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="<?php echo site_url('customers/edit'); ?>">
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
								<i class="fa fa-reorder"></i> Edit Customer -
								<span class="step-title">
									 Step 1 of 4
								</span>
							</div>
						</div>
						<div class="portlet-body form">
							<div class="alert alert-danger numeric-error-msg">Error! <strong></strong> must be numeric.</div>
							<?php echo $this->session->flashdata('message') ?>
							<form action="<?php echo site_url('customers/update') ?>" class="form-horizontal" id="submit_form" method="post">
								<input type="hidden" name="cust_id" value="<?php echo $customers->cust_id ?>" />
								<div class="form-wizard">
									<div class="form-body">
										<ul class="nav nav-pills nav-justified steps">
											<li>
												<a href="#tab1" data-toggle="tab" class="step">
													<span class="number">
														 1
													</span>
													<span class="desc">
														<i class="fa fa-check"></i> Company Profile
													</span>
												</a>
											</li>
											<li>
												<a href="#tab2" data-toggle="tab" class="step">
													<span class="number">
														 2
													</span>
													<span class="desc">
														<i class="fa fa-check"></i> Contact Details
													</span>
												</a>
											</li>
											<li>
												<a href="#tab3" data-toggle="tab" class="step">
													<span class="number">
														 3
													</span>
													<span class="desc">
														<i class="fa fa-check"></i> Shipment
													</span>
												</a>
											</li>
											<li>
												<a href="#tab4" data-toggle="tab" class="step">
													<span class="number">
														 4
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
												Costumers form validation is successful!
											</div>
											<div class="tab-pane active" id="tab1">
												<h3 class="block">Provide company profile</h3>
												<div class="form-group">
													<label class="control-label col-md-3">Company Name
													<span class="required">
														 *
													</span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="cust_company" value="<?php echo $customers->cust_company ?>"/>
														<span class="help-block">
															 Provide Company Name
														</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Business Type
													<span class="required">
														 *
													</span>
													</label>
													<div class="col-md-4">
														<div class="radio-list">
															<?php	$checked1='';$checked2='';$checked3='';
																	if($customers->cust_business == '1'){$checked1='checked="checked"'; 
																	}elseif($customers->cust_business == '2'){$checked2='checked="checked"'; 
																	}elseif($customers->cust_business == '3'){$checked3='checked="checked"';}
																	?>
															<label>
															<input type="radio" name="cust_business" value="1" data-title="Manufacture" <?php echo $checked1 ?>/>
															Manufacture </label>
															<label>
															<input type="radio" name="cust_business" value="2" data-title="Distributor" <?php echo $checked2 ?>/>
															Distributor </label>
															<label>
															<input type="radio" name="cust_business" value="3" data-title="Retailer"<?php echo $checked3 ?>/>
															Retailer </label>
														</div>
														<div id="cust_business_error"></div>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Company Product
													<span class="required">
														 *
													</span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="cust_product" value="<?php echo $customers->cust_product ?>"/>
														<span class="help-block">
															 Provide company product
														</span>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="tab2">
												<h3 class="block">Provide company contact details</h3>
												<div class="form-group">
													<label class="control-label col-md-3">Person in Charge (Name)
													<span class="required">
														 *
													</span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="cust_pers" value="<?php echo $customers->cust_pers ?>"/>
														<span class="help-block">
															 Provide name person in charge
														</span>
													</div>
												</div><div class="form-group">
													<label class="control-label col-md-3">Person in Charge Position
													<span class="required">
														 *
													</span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="cust_persposition" value="<?php echo $customers->cust_persposition ?>"/>
														<span class="help-block">
															 Provide person in charge position
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
														<input type="text" class="form-control" name="cust_email" value="<?php echo $customers->cust_email ?>"/>
														<span class="help-block">
															 Provide an email address
														</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Phone Number 1
													<span class="required">
														 *
													</span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="cust_phone1" value="<?php echo $customers->cust_phone1 ?>"/>
														<span class="help-block">
															 Provide primary company phone number
														</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Phone Number 2
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="cust_phone2" value="<?php echo $customers->cust_phone2 ?>"/>
														<span class="help-block">
															 Provide secondary company phone number
														</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Fax Number 1
													<span class="required">
														 *
													</span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="cust_fax1" value="<?php echo $customers->cust_fax1 ?>"/>
														<span class="help-block">
															 Provide primary company fax number
														</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Fax Number 2
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="cust_fax2" value="<?php echo $customers->cust_fax2 ?>"/>
														<span class="help-block">
															 Provide secondary company fax number
														</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Office Open
													<span class="required">
														 *
													</span>
													</label>
													<div class='col-md-3'>
														<div class="input-group">
															<input type="text" class="form-control timepicker timepicker-no-seconds" name="cust_open" readonly="readonly" value="<?php echo date("H:i", strtotime($customers->cust_open)) ?>" />
															<span class="input-group-btn">
																<button class="btn default" type="button"><i class="fa fa-clock-o"></i></button>
															</span>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Office Close
													<span class="required">
														 *
													</span>
													</label>
													<div class='col-md-3'>
														<div class="input-group">
															<input type="text" class="form-control timepicker timepicker-no-seconds" name="cust_close" readonly="readonly" value="<?php echo date("H:i", strtotime($customers->cust_close)) ?>"/>
															<span class="input-group-btn">
																<button class="btn default" type="button"><i class="fa fa-clock-o"></i></button>
															</span>
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
														<input type="text" class="form-control" name="cust_address" value="<?php echo $customers->cust_address ?>"/>
														<span class="help-block">
															 Provide company street address
														</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Zip Code
													<span class="required">
														 *
													</span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="cust_zipcode" value="<?php echo $customers->cust_zipcode ?>"/>
														<span class="help-block">
															 Provide company zip code
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
														<input type="text" class="form-control" name="cust_city" value="<?php echo $customers->cust_city ?>"/>
														<span class="help-block">
															 Provide company city or town
														</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Region</label>
													<div class="col-md-4">
														<select name="cust_reg" id="country_list" multiple class="form-control">
															<?php foreach($region->result() as $row) : $selected = ($row->reg_id == $customers->cust_reg ? 'selected="selected"' : ''); ?>
															<option value="<?php echo $row->reg_id ?>" <?php echo $selected; ?>><?php echo $row->reg_name ?></option>
															<?php endforeach; ?>
														</select>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="tab3">
												<h3 class="block">Provide shipment details</h3>
												<div class="form-group">
													<label class="control-label col-md-3">Taxpayer No. (NPWP) 
													<span class="required">
														 *
													</span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="cust_npwp" value="<?php echo $customers->cust_npwp ?>"/>
														<span class="help-block">
															 Provide Taxpayer Numbers (NPWP)
														</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Remarks</label>
													<div class="col-md-4">
														<textarea class="form-control" rows="3" name="cust_remarks"><?php echo $customers->cust_remarks ?></textarea>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="tab4">
												<h3 class="block">Confirm inserted data</h3>
												<h4 class="form-section">Company Profile</h4>
												<div class="form-group">
													<label class="control-label col-md-3">Company Name :</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="cust_company">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Business Type :</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="cust_business">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Company Product :</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="cust_product">
														</p>
													</div>
												</div>
												<h4 class="form-section">Contact Details</h4>
												<div class="form-group">
													<label class="control-label col-md-3">Person in Charge (Name):</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="cust_pers">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Person in Charge Position :</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="cust_persposition">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Email :</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="cust_email">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Phone Number 1 :</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="cust_phone1">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Phone Number 2 :</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="cust_phone2">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Fax Number 1 :</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="cust_fax1">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Fax Number 2 :</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="cust_fax2">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Office Open :</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="cust_open">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Office Close :</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="cust_close">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Address :</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="cust_address">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Zip Code :</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="cust_zipcode">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">City/Town :</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="cust_city">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Region :</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="cust_reg">
														</p>
													</div>
												</div>
												<h4 class="form-section">Shipment</h4>
												<div class="form-group">
													<label class="control-label col-md-3">Taxpayer No. (NPWP) :</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="cust_npwp">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Remarks :</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="cust_remarks">
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