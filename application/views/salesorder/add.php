<div class="page-content-wrapper">
	<div class="page-content">

		<?php $this->load->view('parts/style_customizer') ?>

		<div class="row">
			<div class="col-md-12">
				<h3 class="page-title">
				Sales Order <small>new transaction</small>
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
						<a href="<?php echo site_url('salesorder') ?>">
							Sales Order
						</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="javascript:;">
							New Input
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
						<form action="<?php echo site_url('salesorder/store') ?>" method="post">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label col-md-4">Type*</label>
										<div class="col-md-8">
											<select name="so_type" class="form-control">
												<option value="">-- Select --</option>
												<option value="1">PPN</option>
												<option value="2">Non-PPN</option>
											</select>
											<span class="help-block">
												 This field is required
											</span>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label col-md-4">Date*</label>
										<div class="col-md-8">
											<div class="input-group date date-picker" data-date-format="dd-mm-yyyy">
												<input type="text" class="form-control" readonly required="required" name="so_date" value="<?php echo to_indDate(now()) ?>" />
												<span class="input-group-btn">
													<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
												</span>
											</div>
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
										<label class="control-label col-md-4">SO Number*</label>
										<div class="col-md-8">
											<input type="text" class="form-control" required="required" name="so_number" />
											<span class="help-block">
												 This field is required
											</span>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label col-md-4">PO Number</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="so_po_number" />
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label col-md-4">Sales*</label>
										<div class="col-md-8">
											<select name="sales_id" class="form-control">
												<option value="">-- Select --</option>
												<?php foreach($sales->result() as $row) : ?>
												<option value="<?php echo $row->sales_id ?>"><?php echo $row->sales_fname . ' ' . $row->sales_lname ?></option>
												<?php endforeach; ?>
											</select>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label col-md-4">Delivery Request</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="so_deliv_req" />
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="" class="control-label col-md-4">Customer</label>
										<div class="col-md-8">
											<div class="input-group">
												<input type="hidden" name="cust_id" />
												<input type="text" class="form-control" name="cust_name" />
												<span class="input-group-btn">
													<button class="btn green open-cust" type="button">
														<i class="fa fa-list"></i>
													</button>
												</span>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label col-md-4">Pay Terms</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="so_pay_terms" />
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							<fieldset>
								<legend>Products</legend>
								
							</fieldset>
							<div class="form-actions right">
								<a href="<?php echo site_url('salesorder') ?>" class="btn default">Cancel</a>
								<button type="submit" class="btn blue"><i class="fa fa-save"></i> Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
