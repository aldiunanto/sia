<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
	<h4 class="modal-title">Invoice Form</h4>
</div>
<form class="form-horizontal" method="post" action="<?php echo site_url('salesorder/storeinvoice') ?>">
<div class="modal-body">
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
								 <?php echo $row->cust_name ?>
							</p>
						</div>
					</div>
				</div>
 			</div>
 			<div class="row">
 				<div class="col-md-12">
					<div class="form-group">
						<label class="control-label col-md-4">Invoice Number:</label>
						<div class="col-md-8">
							<input type="text" name="invo_number" class="form-control" required="required" />
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
						<label class="control-label col-md-4">Invoice Date:</label>
						<div class="col-md-8">
							<div class="input-group date date-picker" data-date-format="dd-mm-yyyy">
								<input type="text" class="form-control" readonly required="required" name="invo_date" value="<?php echo to_indDate(now()) ?>" />
								<span class="input-group-btn">
									<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
								</span>
							</div>
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
</div>
<div class="modal-footer">
	<button type="button" class="btn btn-primary">
		<i class="fa fa-save"></i> Save
	</button>
	<button type="button" class="btn default" data-dismiss="modal">Close</button>
</div>
</form>