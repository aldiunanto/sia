<div class="page-content-wrapper">
	<div class="page-content">

		<?php $this->load->view('parts/style_customizer') ?>

		<div class="row">
			<div class="col-md-12">
				<h3 class="page-title">
				Users <small>user listing</small>
				</h3>
				<ul class="page-breadcrumb breadcrumb">
					<li class="btn-group">
						<a class="btn blue" href="<?php echo site_url('users/add') ?>">
						<i class="fa fa-plus"></i>
						<span>
							Add New Users
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
						<a href="<?php echo site_url('users') ?>">
							Users
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
							<table class="table table-striped table-bordered table-hover" id="user-list">
								<thead>
									<tr role="row" class="heading">
										<th>No</th>
										<th>User Full Name</th>
										<th>User Email</th>
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
												<td><?php echo $row->user_fullname ?></td>
												<td><?php echo $row->user_email ?></td>
												<td>
													<div class="btn-group">
														<button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" data-delay="200">
															<i class="fa fa-angle-down"></i>
														</button>
														<ul class="dropdown-menu pull-right">
															<li><a href="<?php echo site_url('users/edit/' . $row->user_id) ?>"><i class="fa fa-edit"></i> Edit</a></li>
															<li><a href="<?php echo site_url('users/delete/' . $row->user_id) ?>" class="delete"><i class="fa fa-trash-o"></i> Delete</a></li>
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
	<div id="message" class="modal modal-styled fade">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h3 class="modal-title">Message</h3>
	      </div>
	      <div class="modal-body" id='message_content'>
	        <p><?=$this->session->flashdata('success').$this->session->flashdata('error')?></p>
	      </div>
	      <div class="modal-footer">
	        <!-- <button type="button" class="btn btn-tertiary" data-dismiss="modal">Close</button> -->
	        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->