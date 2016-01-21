<form class="form-horizontal" id="invo-form" method="post" action="<?php echo site_url('salesorder/storeinvoice') ?>">
	<div class="portlet">
		<div class="portlet-body form">
			<input type="hidden" name="so_id" value="<?php echo $row->so_id ?>" />
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label class="control-label col-md-4">SO Number:</label>
						<div class="col-md-8">
							<p class="form-control-static">
								<strong><?php echo $row->so_number ?></strong>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label class="control-label col-md-4">Sales:</label>
						<div class="col-md-8">
							<p class="form-control-static">
								 <?php echo $row->sales_fname . ' ' . $row->sales_lname ?>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label class="control-label col-md-4">Customer:</label>
						<div class="col-md-8">
							<p class="form-control-static">
								 <?php echo $row->cust_company ?>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label class="control-label col-md-4">Invoice Number:*</label>
						<div class="col-md-8">
							<input type="text" name="invo_number" class="form-control" />
							<span class="help-block">
								 This field is required
							</span>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label class="control-label col-md-4">DO Number:</label>
						<div class="col-md-8">
							<input type="text" name="do_number" class="form-control" />
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
				<div class="form-group">
					<label class="control-label col-md-4">Extra Charge:</label>
					<div class="col-md-8">
						<input type="text" name="invo_extra_charge" class="form-control" />
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>

	<button type="button" class="btn btn-primary true">
		<i class="fa fa-save"></i> Save
	</button>
	<button type="button" class="btn default" data-dismiss="modal">Close</button>
</form>