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
				Customers <small>customers listing</small>
				</h3>
				<ul class="page-breadcrumb breadcrumb">
					<li class="btn-group">
						<a class="btn blue" href="<?php echo site_url('customers/add') ?>">
						<i class="fa fa-plus"></i>
						<span>
							Add New Customer
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
						<a href="<?php echo site_url('customers') ?>">
							Customers
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
						<div class="table-container table-responsive">
							<script type="text/javascript" src="<?php echo base_url('assets/plugins/flot/jquery.min.js'); ?>"></script>
							<table class="table table-striped table-bordered table-hover" id="customers-list">
								<thead>
									<tr role="row" class="heading">
										<th rowspan="2">No</th>
										<th rowspan="2">Company Name</th>
										<th rowspan="2">Business</th>
										<th colspan="2">Contact</th>
										<th colspan="2">Office Hours</th>
										<th rowspan="2">Region</th>
										<th rowspan="2">City</th>
										<th rowspan="2">Actions</th>
									</tr>
									<tr role="row" class="heading">
										<th>Phone</th>
										<th>Fax</th>
										<th>Open</th>
										<th>Close</th>
									</tr>
								</thead>
								<tbody>
									<?php

										$x = 0;
										foreach($fetch->result() as $row){
									?>

											<tr>
												<td><?php echo ++$x ?></td>
												<td><?php echo $row->cust_company ?></td>
												<td><?php 
														if($row->cust_business == '1'){$business='Manufacture'; 
														}elseif($row->cust_business == '2'){$business='Distributor'; 
														}elseif($row->cust_business == '3'){$business='Retailer';}
														echo $business;
													?></td>
												<td><?php echo $row->cust_phone1.' / '.$row->cust_phone1 ?></td>
												<td><?php echo $row->cust_fax1.' / '.$row->cust_fax2 ?></td>
												<td><?php echo date("H:i", strtotime($row->cust_open)) ?></td>
												<td><?php echo date("H:i", strtotime($row->cust_close)) ?></td>
												<td><?php echo $row->reg_name ?></td>
												<td><?php echo $row->cust_city ?></td>
												<td>
													<div class="btn-group">
														<button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" data-delay="200">
															<i class="fa fa-angle-down"></i>
														</button>
														<ul class="dropdown-menu pull-right">
															<li><a href="<?php echo site_url('customers/edit/' . $row->cust_id) ?>"><i class="fa fa-edit"></i> Edit</a></li>
															<li><a href="<?php echo site_url('customers/delete/' . $row->cust_id) ?>" class="delete"><i class="fa fa-trash-o"></i> Delete</a></li>
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