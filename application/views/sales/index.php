<div class="page-content-wrapper">
	<div class="page-content">
		<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
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

		<?php $this->load->view('parts/style_customizer') ?>

		<div class="row">
			<div class="col-md-12">
				<h3 class="page-title">
				Sales <small>sales listing</small>
				</h3>
				<ul class="page-breadcrumb breadcrumb">
					<li class="btn-group">
						<a class="btn blue" href="<?php echo site_url('sales/add') ?>">
						<i class="fa fa-plus"></i>
						<span>
							Add New Sales
						</span>
						</a>
					</li>
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo site_url('home') ?>">
							Home
						</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="<?php echo site_url('sales') ?>">
							Sales
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<!-- Begin: life time stats -->
				<div class="portlet">
					<div class="portlet-body">
						<?php echo $this->session->flashdata('message') ?>
						<div class="table-container">
							<script type="text/javascript" src="<?php echo base_url('assets/plugins/jquery-validation/dist/jquery.validate.min.js'); ?>"></script>
							<script type="text/javascript" src="<?php echo base_url('assets/plugins/flot/jquery.min.js'); ?>"></script>
							<table class="table table-striped table-bordered table-hover" id="sales-list">
								<thead>
									<tr role="row" class="heading">
										<th rowspan="2">No</th>
										<th rowspan="2">Username</th>
										<th colspan="2">Name</th>
										<th rowspan="2">Phone</th>
										<th rowspan="2">Region</th>
										<th rowspan="2">City</th>
										<th rowspan="2">Actions</th>
									</tr>
									<tr role="row" class="heading">
										<th>First</th>
										<th>Last</th>
									</tr>
								</thead>
								<tbody>
									<?php

										$x = 0;
										foreach($fetch->result() as $row){
									?>

											<tr>
												<td><?php echo ++$x ?></td>
												<td><?php echo $row->sales_username ?></td>
												<td><?php echo $row->sales_fname ?></td>
												<td><?php echo $row->sales_lname ?></td>
												<td><?php echo $row->sales_phone ?></td>
												<td><?php echo $row->reg_name ?></td>
												<td><?php echo $row->sales_city ?></td>
												<td>
													<div class="btn-group">
														<button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" data-delay="200">
															<i class="fa fa-angle-down"></i>
														</button>
														<ul class="dropdown-menu pull-right">
															<li><a href="<?php echo site_url('sales/edit/' . $row->sales_id) ?>"><i class="fa fa-edit"></i> Edit</a></li>
															<li><a href="<?php echo site_url('sales/delete/' . $row->sales_id) ?>" class="delete"><i class="fa fa-trash-o"></i> Delete</a></li>
														</ul>
													</div>
												</td>
											</tr>

									<?php
										}

									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- End: life time stats -->
			</div>
		</div>
	</div>
</div>