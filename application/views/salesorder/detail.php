<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
	<h4 class="modal-title">Sales Order Detail</h4>
</div>
<div class="modal-body">
	 <div class="portlet">
	 	<div class="portlet-body form">
	 		<form role="form" class="form-horizontal">
	 			<div class="row">
	 				<div class="col-md-6">
						<div class="form-group">
							<label class="control-label col-md-4">SO Number:</label>
							<div class="col-md-8">
								<p class="form-control-static">
									 <?php echo $head->so_number ?>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label col-md-4">Date:</label>
							<div class="col-md-8">
								<p class="form-control-static">
									 <?php echo to_indDate($head->so_date) ?>
								</p>
							</div>
						</div>
					</div>
	 			</div>
	 			<div class="row">
	 				<div class="col-md-6">
						<div class="form-group">
							<label class="control-label col-md-4">SO Type:</label>
							<div class="col-md-8">
								<p class="form-control-static">
									 <?php echo ($head->so_type == 1 ? 'PPN' : 'Non-PPN') ?>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label col-md-4">PO Number:</label>
							<div class="col-md-8">
								<p class="form-control-static">
									 <?php echo $head->so_po_number ?>
								</p>
							</div>
						</div>
					</div>
	 			</div>
	 			<div class="row">
	 				<div class="col-md-6">
						<div class="form-group">
							<label class="control-label col-md-4">Sales:</label>
							<div class="col-md-8">
								<p class="form-control-static">
									 <?php echo $head->sales_fname . ' ' . $head->sales_lname ?>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label col-md-4">Delivery Request:</label>
							<div class="col-md-8">
								<p class="form-control-static">
									 <?php echo to_indDate($head->so_deliv_req) ?>
								</p>
							</div>
						</div>
					</div>
	 			</div>
	 			<div class="row">
	 				<div class="col-md-6">
						<div class="form-group">
							<label class="control-label col-md-4">Customer:</label>
							<div class="col-md-8">
								<p class="form-control-static">
									 <?php echo $head->cust_name ?>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label col-md-4">Pay Terms:</label>
							<div class="col-md-8">
								<p class="form-control-static">
									 <?php echo $head->so_pay_terms ?> day(s)
								</p>
							</div>
						</div>
					</div>
	 			</div>

	 			<h3 class="form-section">Products</h3>
	 			<div class="table-container">
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr role="row" class="heading">
								<th rowspan="2">Product Name</th>
								<th rowspan="2">Category</th>
								<th rowspan="2">QTY</th>
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
							<?php

								$x = 0;
								foreach($sub as $row){
							?>

									<tr>
										<td><?php echo $row->prod_name ?></td>
										<td><?php echo $row->cat_name ?></td>
										<td><?php echo $row->sos_qty ?></td>
										<td><?php echo $row->st_name ?></td>
										<td><?php echo $row->pack_name ?></td>
										<td><?php echo $row->prod_width ?></td>
										<td><?php echo $row->prod_guzzet ?></td>
										<td><?php echo $row->prod_length ?></td>
										<td><?php echo $row->prod_thickness ?></td>
										<td><?php echo ($row->prod_emboss == 2 ? 'NO' : 'YES') ?></td>
									</tr>

							<?php
								}

							?>
						</tbody>
					</table>
				</div>
	 		</form>
	 	</div>
	 </div>
</div>
<div class="modal-footer">
	<a href="<?php echo site_url('salesorder/edit/' . $head->so_id) ?>" class="btn blue true">
		<i class="fa fa-edit"></i> Edit this SO
	</a>
	<button type="button" class="btn default" data-dismiss="modal">Close</button>
</div>