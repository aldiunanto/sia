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
										<td>1</td>
										<td>PE Solid</td>
										<td>PE</td>
										<td>Single</td>
										<td>Sack</td>
										<td>6.0</td>
										<td>0.0</td>
										<td>10.0</td>
										<td>0.0020</td>
										<td>No</td>
									</tr>
									<tr>
										<td>2</td>
										<td>PE Solid</td>
										<td>PE</td>
										<td>Single</td>
										<td>Sack</td>
										<td>6.0</td>
										<td>0.0</td>
										<td>10.0</td>
										<td>0.0020</td>
										<td>No</td>
									</tr>
									<tr>
										<td>3</td>
										<td>PE Solid</td>
										<td>PE</td>
										<td>Single</td>
										<td>Sack</td>
										<td>6.0</td>
										<td>0.0</td>
										<td>10.0</td>
										<td>0.0020</td>
										<td>No</td>
									</tr>
									<tr>
										<td>4</td>
										<td>PE Solid</td>
										<td>PE</td>
										<td>Single</td>
										<td>Sack</td>
										<td>6.0</td>
										<td>0.0</td>
										<td>10.0</td>
										<td>0.0020</td>
										<td>No</td>
									</tr>
									<tr>
										<td>5</td>
										<td>PE Solid</td>
										<td>PE</td>
										<td>Single</td>
										<td>Sack</td>
										<td>6.0</td>
										<td>0.0</td>
										<td>10.0</td>
										<td>0.0020</td>
										<td>No</td>
									</tr>
									<tr>
										<td>6</td>
										<td>PE Solid</td>
										<td>PE</td>
										<td>Single</td>
										<td>Sack</td>
										<td>6.0</td>
										<td>0.0</td>
										<td>10.0</td>
										<td>0.0020</td>
										<td>No</td>
									</tr>
									<tr>
										<td>7</td>
										<td>PE Solid</td>
										<td>PE</td>
										<td>Single</td>
										<td>Sack</td>
										<td>6.0</td>
										<td>0.0</td>
										<td>10.0</td>
										<td>0.0020</td>
										<td>No</td>
									</tr>
									<tr>
										<td>8</td>
										<td>PE Solid</td>
										<td>PE</td>
										<td>Single</td>
										<td>Sack</td>
										<td>6.0</td>
										<td>0.0</td>
										<td>10.0</td>
										<td>0.0020</td>
										<td>No</td>
									</tr>
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