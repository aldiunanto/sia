<div class="row">
	<div class="col-md-6">
		<form action="" method="post">
			<div class="input-group">
				<input type="text" class="form-control" name="filter" placeholder="Search" />
				<span class="input-group-btn">
					<button class="btn default open-cust" type="button">
						<i class="fa fa-search"></i>
					</button>
				</span>
			</div>
		</form>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="table-container table-responsive" id="prod-getData">
			<table class="table table-striped table-bordered table-hover" id="products-list">
				<thead>
					<tr role="row" class="heading">
						<th rowspan="2">No</th>
						<th rowspan="2">Product Name</th>
						<th rowspan="2">Category</th>
						<th rowspan="2">Seal Type</th>
						<th rowspan="2">Packaging</th>
						<th colspan="4">Size(cm)</th>
						<th rowspan="2">Emboss Surface</th>
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
					<?php

						$x = 0;
						foreach($fetch->result() as $row){
					?>

							<tr class="prod-item" data-prod-name="<?php echo strtoupper($row->prod_name) ?>">
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
									<button class="prod-take-me-out btn blue btn-sm" role="button" data-id="<?php echo $row->prod_id ?>">
										<i class="fa fa-check-square-o"></i>
									</button>
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