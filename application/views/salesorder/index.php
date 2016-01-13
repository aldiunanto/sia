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
				Sales Order <small>transaction listing</small>
				</h3>
				<ul class="page-breadcrumb breadcrumb">
					<li class="btn-group">
						<a class="btn blue" href="<?php echo site_url('salesorder/add') ?>">
						<i class="fa fa-plus"></i>
						<span>
							New Transaction
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
						<a href="<?php echo site_url('salesorder') ?>">
							Sales Order
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
							<table class="table table-striped table-bordered table-hover" id="so-list">
								<thead>
									<tr role="row" class="heading">
										<th>No</th>
										<th>SO Number</th>
										<th>Type</th>
										<th>Sales</th>
										<th>Customer</th>
										<th>SO Date</th>
										<th>Delivery Request</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<?php
										$x = 0;
										foreach($fetch->result() as $row){
									?>

											<tr>
												<td><?php echo ++$x ?></td>
												<td><?php echo $row->so_number ?></td>
												<td><?php echo ($row->so_type == 1 ? 'PPN' : 'Non-PPN') ?></td>
												<td><?php echo $row->sales_fname . ' ' . $row->sales_lname ?></td>
												<td><?php echo $row->cust_name ?></td>
												<td><?php echo to_indDate($row->so_date) ?></td>
												<td><?php echo to_indDate($row->so_deliv_req) ?></td>
												<td>
													<div class="btn-group">
														<button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" data-delay="200">
															<i class="fa fa-angle-down"></i>
														</button>
														<ul class="dropdown-menu pull-right">
															<li><a href="<?php echo site_url('salesorder/detail/' . $row->so_id) ?>" class="detail" data-target="#ajax" data-toggle="modal"><i class="fa fa-eye"></i> Detail</a></li>
															<li><a href="<?php echo site_url('salesorder/edit/' . $row->so_id) ?>"><i class="fa fa-edit"></i> Edit</a></li>
															<li><a href="<?php echo site_url('printing/so/' . $row->so_id) ?>"><i class="fa fa-print"></i> Print SO</a></li>
															<li class="divider"></li>
															<li><a href="<?php echo site_url('salesorder/delete/' . $row->so_id) ?>" class="delete"><i class="fa fa-trash-o"></i> Delete</a></li>
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
