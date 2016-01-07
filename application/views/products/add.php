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
						<div class="alert alert-danger numeric-error-msg">Error! <strong></strong> must be numeric.</div>
						<form action="<?php echo site_url('products/store') ?>" method="post">
							<fieldset>
								<legend>General</legend>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label col-md-4">Product Name*</label>
											<div class="col-md-8">
												<input type="text" class="form-control" required="required" name="prod_name" />
												<span class="help-block">
													 This field is required
												</span>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label col-md-4">Category*</label>
											<div class="col-md-8">
												<select name="cat_id" class="form-control" required="required">
													<option value="">-- Select --</option>
													<?php foreach($categories->result() as $row) : ?>
													<option value="<?php echo $row->cat_id ?>"><?php echo $row->cat_name ?></option>
													<?php endforeach; ?>
												</select>
												<span class="help-block">
													 This field is required
												</span>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label col-md-4">Seal Type</label>
											<div class="col-md-8">
												<select name="st_id" class="form-control">
													<option value="">-- Select --</option>
													<?php foreach($seal_type->result() as $row) : ?>
													<option value="<?php echo $row->st_id ?>"><?php echo $row->st_name ?></option>
													<?php endforeach; ?>
												</select>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label col-md-4">Packaging</label>
											<div class="col-md-8">
												<select name="pack_id" class="form-control">
													<option value="">-- Select --</option>
													<?php foreach($packs->result() as $row) : ?>
													<option value="<?php echo $row->pack_id ?>"><?php echo $row->pack_name ?></option>
													<?php endforeach; ?>
												</select>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label col-md-4">Emboss Surface</label>
											<div class="col-md-8">
												<div class="radio-list">
													<label class="radio-inline"><input type="radio" name="prod_emboss" value="1" />Yes </label>
													<label class="radio-inline"><input type="radio" name="prod_emboss" value="2" />No </label>
												</div>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="col-md-6"></div>
								</div>
							</fieldset>
							<fieldset>
								<legend>Size(cm)</legend>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label col-md-4">Width*</label>
											<div class="col-md-8">
												<input type="text" class="form-control" required="required" name="prod_width" />
												<span class="help-block">
													 This field is required
												</span>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label col-md-4">Guzzet*</label>
											<div class="col-md-8">
												<input type="text" class="form-control" required="required" name="prod_guzzet" />
												<span class="help-block">
													 This field is required
												</span>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label col-md-4">Length*</label>
											<div class="col-md-8">
												<input type="text" class="form-control" required="required" name="prod_length" />
												<span class="help-block">
													 This field is required
												</span>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label col-md-4">Thickness*</label>
											<div class="col-md-8">
												<input type="text" class="form-control" required="required" name="prod_thickness" />
												<span class="help-block">
													 This field is required
												</span>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							</fieldset>
							<div class="form-actions right">
								<a href="<?php echo site_url('products') ?>" class="btn default">Cancel</a>
								<button type="submit" class="btn green"><i class="fa fa-save"></i> Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
