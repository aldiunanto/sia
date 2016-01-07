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
				Products <small>product listing</small>
				</h3>
				<ul class="page-breadcrumb breadcrumb">
					<li class="btn-group">
						<a class="btn blue" href="<?php echo site_url('products/add') ?>">
						<i class="fa fa-plus"></i>
						<span>
							Add New Products
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
						<a href="<?php echo site_url('products') ?>">
							Products
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
						<div class="table-container">
							<table class="table table-striped table-bordered table-hover" id="product-list">
								<thead>
									<tr role="row" class="heading">
										<th rowspan="2">No</th>
										<th rowspan="2">Product Name</th>
										<th rowspan="2">Category</th>
										<th rowspan="2">Seal Type</th>
										<th rowspan="2">Packaging</th>
										<th colspan="4">Size(cm)</th>
										<th rowspan="2">Emboss Surface</th>
										<th rowspan="2">Actions</th>
									</tr>
									<tr role="row" class="heading">
										<th>Width</th>
										<th>Guzzet</th>
										<th>Length</th>
										<th>Thickness</th>
									</tr>
								</thead>
								<tbody>
									<?php

										$x = 0;
										foreach($fetch as $row){
									?>

											<tr>
												<td><?php echo ++$x ?></td>
												<td><?php echo $row->prod_name ?></td>
												<td><?php echo $row->cat_name ?></td>
												<td><?php echo $row->st_name ?></td>
												<td><?php echo $row->pack_name ?></td>
												<td><?php echo $row->prod_width ?></td>
												<td><?php echo $row->prod_guzzet ?></td>
												<td><?php echo $row->prod_length ?></td>
												<td><?php echo $row->prod_thickness ?></td>
												<td><?php echo ($row->prod_emboss == 2 ? 'NO' : 'YES') ?></td>
												<td>
													<div class="btn-group">
														<button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" data-delay="200">
															<i class="fa fa-angle-down"></i>
														</button>
														<ul class="dropdown-menu pull-right">
															<li><a href="<?php echo site_url('products/edit/' . $row->prod_id) ?>"><i class="fa fa-edit"></i> Edit</a></li>
															<li><a href="<?php echo site_url('products/delete/' . $row->prod_id) ?>" class="delete"><i class="fa fa-trash-o"></i> Delete</a></li>
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
