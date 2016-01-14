<div class="page-content-wrapper">
	<div class="page-content">
		<div class="modal fade" id="basic" tabindex="-1" role="dialog" aria-hidden="true">
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
						<button type="button" class="btn blue true">Save changes</button>
						<button type="button" class="btn default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade bs-modal-lg" id="ajax" role="basic" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
				</div>
			</div>
		</div>
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
		<form action="<?php echo site_url('salesorder/store') ?>" method="post">
		<div class="row">
			<div class="col-md-12">
				<div class="portlet">
					<div class="portlet-body">
						<div class="alert alert-danger numeric-error-msg">Error! <strong></strong> must be numeric.</div>
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
										<span class="help-block">
											 This field is required
										</span>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-md-4">Delivery Request</label>
									<div class="col-md-8">
										<input type="text" class="form-control date date-picker" name="so_deliv_req" data-date-format="dd-mm-yyyy" />
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="control-label col-md-4">Customer*</label>
									<div class="col-md-8">
										<div class="input-group">
											<input type="hidden" name="cust_id" />
											<input type="text" class="form-control" name="cust_name" />
											<span class="input-group-btn">
												<button class="btn default open-cust" type="button">
													<i class="fa fa-list"></i>
												</button>
											</span>
										</div>
										<span class="help-block">
											 This field is required
										</span>
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
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="portlet">
					<div class="portlet-title">
						<div class="caption">Products</div>
						<div class="actions btn-set">
							<button class="btn yellow add-item" role="button">
								<i class="fa fa-plus"></i> Add Item
							</button>
						</div>
					</div>
					<div class="portlet-body">
						<div class="table-container">
							<table class="table table-striped table-bordered table-hover">
								<thead>
									<tr role="row" class="heading">
										<th rowspan="2">Product Name</th>
										<th rowspan="2">Category</th>
										<th rowspan="2">Seal Type</th>
										<th rowspan="2">Packaging</th>
										<th colspan="4">Size(cm)</th>
										<th rowspan="2">Emboss Surface</th>
										<th rowspan="2">QTY</th>
										<th rowspan="2">&nbsp;</th>
									</tr>
									<tr role="row" class="heading">
										<th>Width</th>
										<th>Guzzet</th>
										<th>Length</th>
										<th>Thickness</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<div class="input-group">
												<input type="hidden" name="prod_id[]" />
												<input type="text" class="form-control input-sm" name="prod_name[]" />
												<span class="input-group-btn">
													<a href="<?php echo site_url('products/getData') ?>" class="btn default open-prod btn-sm" data-target="#ajax" data-toggle="modal">
														<i class="fa fa-list"></i>
													</a>
												</span>
											</div>
										</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td>
											<input type="text" class="form-control input-sm" name="sos_qty[]" />
										</td>
										<td>
											<button class="btn btn-danger btn-sm" role="button">
												<i class="fa fa-times"></i>
											</button>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="form-actions right">
							<a href="<?php echo site_url('salesorder') ?>" class="btn default">Cancel</a>
							<button type="submit" class="btn blue"><i class="fa fa-save"></i> Save</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		</form>
	</div>
</div>
