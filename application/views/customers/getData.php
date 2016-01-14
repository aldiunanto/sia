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
		<div class="portlet">
			<div class="portlet-body">
				<div class="table-container" id="cust-getData">
					<table class="table table-striped table-hover">
						<thead>
							<tr role="row" class="heading">
								<th>Customer Name</th>
								<th style="width: 10%">&nbsp;</th>
							</tr>
						</thead>
						<tbody>
							<?php if($fetch->num_rows() == 0) : ?>
							<tr>
								<td colspan="2">Sorry, there is no Customer found for this Sales.</td>
							</tr>
							<?php else : ?>
							<?php foreach($fetch->result() as $row) : ?>
							<tr class="cust-item" data-cust-name="<?php echo strtoupper($row->cust_name) ?>">
								<td><?php echo $row->cust_name ?></td>
								<td>
									<button class="take-me-out btn blue btn-sm" role="button" data-id="<?php echo $row->cust_id ?>">
										<i class="fa fa-check-square-o"></i>
									</button>
								</td>
							</tr>
							<?php endforeach; ?>
							<?php endif; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>