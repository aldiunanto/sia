<div class="page-content-wrapper">
	<div class="page-content">

		<?php $this->load->view('parts/style_customizer') ?>

		<div class="row">
			<div class="col-md-12">
				<h3 class="page-title">
				Products <small>add new product</small>
				</h3>
				<ul class="page-breadcrumb breadcrumb">
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
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="javascript:;">
							Add New
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="portlet">
					<div class="portlet-body">
						<form action="<?php echo site_url('products/store') ?>" method="post">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label col-md-3">Product Name*</label>
										<div class="col-md-9">
											<input type="text" class="form-control" required="required" name="prod_name" />
											<!-- <span class="help-block">
												 This field is required
											</span> -->
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label col-md-3">Category</label>
										<div class="col-md-9">
											<select name="cat_id" class="form-control">
												<option value="">-- Select --</option>
												<?php foreach($categories->result() as $row) : ?>
												<option value="<?php echo $row->cat_id ?>"><?php echo $row->cat_name ?></option>
												<?php endforeach; ?>
											</select>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
