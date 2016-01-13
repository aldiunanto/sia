<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="utf-8"/>
	<title><?php echo $title.' | UG-SO by 3KA24'; ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<meta content="" name="description"/>
	<meta content="" name="author"/>
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url().'application/views/'; ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url().'application/views/'; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url().'application/views/'; ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	<!-- END GLOBAL MANDATORY STYLES -->
	
	<!-- BEGIN PAGE LEVEL STYLES -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'application/views/'; ?>assets/plugins/select2/select2.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'application/views/'; ?>assets/plugins/select2/select2-metronic.css"/>
	<link rel="stylesheet" href="<?php echo base_url().'application/views/'; ?>assets/plugins/data-tables/DT_bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'application/views/'; ?>assets/plugins/bootstrap-datepicker/css/datepicker.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'application/views/'; ?>assets/plugins/bootstrap-datetimepicker/css/datetimepicker.css"/>
	<!-- END PAGE LEVEL STYLES -->
	<!-- BEGIN THEME STYLES -->
	<link href="<?php echo base_url().'application/views/'; ?>assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url().'application/views/'; ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url().'application/views/'; ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url().'application/views/'; ?>assets/css/plugins.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url().'application/views/'; ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="<?php echo base_url().'application/views/'; ?>assets/css/custom.css" rel="stylesheet" type="text/css"/>
	<!-- END THEME STYLES -->
	<link rel="shortcut icon" href="<?php echo base_url().'application/views/'; ?>favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
	<?php
	include_once('header.php');
	?>
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<?php
	include_once('sidebar.php');
	?>
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
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
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<?php
			include_once('style_customizer.php');
			?>
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
					Order View <small>view order details</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li class="btn-group">
							<button type="button" class="btn blue dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
							<span>
								Actions
							</span>
							<i class="fa fa-angle-down"></i>
							</button>
							<ul class="dropdown-menu pull-right" role="menu">
								<li>
									<a href="#">
										Action
									</a>
								</li>
								<li>
									<a href="#">
										Another action
									</a>
								</li>
								<li>
									<a href="#">
										Something else here
									</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">
										Separated link
									</a>
								</li>
							</ul>
						</li>
						<li>
							<i class="fa fa-home"></i>
							<a href="index.html">
								Home
							</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">
								E-Commerce
							</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">
								Order View
							</a>
						</li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<!-- Begin: life time stats -->
					<div class="portlet">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-shopping-cart"></i>Order #12313232
								<span class="hidden-480">
									 | Dec 27, 2013 7:16:25
								</span>
							</div>
							<div class="actions">
								<a href="#" class="btn default yellow-stripe">
									<i class="fa fa-angle-left"></i>
									<span class="hidden-480">
										 Back
									</span>
								</a>
								<div class="btn-group">
									<a class="btn default yellow-stripe" href="#" data-toggle="dropdown">
										<i class="fa fa-cog"></i>
										<span class="hidden-480">
											 Tools
										</span>
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="dropdown-menu pull-right">
										<li>
											<a href="#">
												 Export to Excel
											</a>
										</li>
										<li>
											<a href="#">
												 Export to CSV
											</a>
										</li>
										<li>
											<a href="#">
												 Export to XML
											</a>
										</li>
										<li class="divider">
										</li>
										<li>
											<a href="#">
												 Print Invoice
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="portlet-body">
							<div class="tabbable">
								<ul class="nav nav-tabs nav-tabs-lg">
									<li class="active">
										<a href="#tab_1" data-toggle="tab">
											 Details
										</a>
									</li>
									<li>
										<a href="#tab_2" data-toggle="tab">
											 Invoices
											<span class="badge badge-success">
												 4
											</span>
										</a>
									</li>
									<li>
										<a href="#tab_3" data-toggle="tab">
											 Credit Memos
										</a>
									</li>
									<li>
										<a href="#tab_4" data-toggle="tab">
											 Shipments
											<span class="badge badge-danger">
												 2
											</span>
										</a>
									</li>
									<li>
										<a href="#tab_5" data-toggle="tab">
											 History
										</a>
									</li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane active" id="tab_1">
										<div class="row">
											<div class="col-md-6 col-sm-12">
												<div class="portlet yellow box">
													<div class="portlet-title">
														<div class="caption">
															<i class="fa fa-cogs"></i>Order Details
														</div>
														<div class="actions">
															<a href="#" class="btn default btn-sm">
																<i class="fa fa-pencil"></i> Edit
															</a>
														</div>
													</div>
													<div class="portlet-body">
														<div class="row static-info">
															<div class="col-md-5 name">
																 Order #:
															</div>
															<div class="col-md-7 value">
																 12313232
																<span class="label label-info label-sm">
																	 Email confirmation was sent
																</span>
															</div>
														</div>
														<div class="row static-info">
															<div class="col-md-5 name">
																 Order Date & Time:
															</div>
															<div class="col-md-7 value">
																 Dec 27, 2013 7:16:25 PM
															</div>
														</div>
														<div class="row static-info">
															<div class="col-md-5 name">
																 Order Status:
															</div>
															<div class="col-md-7 value">
																<span class="label label-success">
																	 Closed
																</span>
															</div>
														</div>
														<div class="row static-info">
															<div class="col-md-5 name">
																 Grand Total:
															</div>
															<div class="col-md-7 value">
																 $175.25
															</div>
														</div>
														<div class="row static-info">
															<div class="col-md-5 name">
																 Payment Information:
															</div>
															<div class="col-md-7 value">
																 Credit Card
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-sm-12">
												<div class="portlet blue box">
													<div class="portlet-title">
														<div class="caption">
															<i class="fa fa-cogs"></i>Customer Information
														</div>
														<div class="actions">
															<a href="#" class="btn default btn-sm">
																<i class="fa fa-pencil"></i> Edit
															</a>
														</div>
													</div>
													<div class="portlet-body">
														<div class="row static-info">
															<div class="col-md-5 name">
																 Customer Name:
															</div>
															<div class="col-md-7 value">
																 Jhon Doe
															</div>
														</div>
														<div class="row static-info">
															<div class="col-md-5 name">
																 Email:
															</div>
															<div class="col-md-7 value">
																 jhon@doe.com
															</div>
														</div>
														<div class="row static-info">
															<div class="col-md-5 name">
																 State:
															</div>
															<div class="col-md-7 value">
																 New York
															</div>
														</div>
														<div class="row static-info">
															<div class="col-md-5 name">
																 Phone Number:
															</div>
															<div class="col-md-7 value">
																 12234389
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6 col-sm-12">
												<div class="portlet green box">
													<div class="portlet-title">
														<div class="caption">
															<i class="fa fa-cogs"></i>Billing Address
														</div>
														<div class="actions">
															<a href="#" class="btn default btn-sm">
																<i class="fa fa-pencil"></i> Edit
															</a>
														</div>
													</div>
													<div class="portlet-body">
														<div class="row static-info">
															<div class="col-md-12 value">
																 Jhon Done<br>
																 #24 Park Avenue Str<br>
																 New York<br>
																 Connecticut, 23456 New York<br>
																 United States<br>
																 T: 123123232<br>
																 F: 231231232<br>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-sm-12">
												<div class="portlet red box">
													<div class="portlet-title">
														<div class="caption">
															<i class="fa fa-cogs"></i>Shipping Address
														</div>
														<div class="actions">
															<a href="#" class="btn default btn-sm">
																<i class="fa fa-pencil"></i> Edit
															</a>
														</div>
													</div>
													<div class="portlet-body">
														<div class="row static-info">
															<div class="col-md-12 value">
																 Jhon Done<br>
																 #24 Park Avenue Str<br>
																 New York<br>
																 Connecticut, 23456 New York<br>
																 United States<br>
																 T: 123123232<br>
																 F: 231231232<br>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12 col-sm-12">
												<div class="portlet purple box">
													<div class="portlet-title">
														<div class="caption">
															<i class="fa fa-cogs"></i>Shopping Cart
														</div>
														<div class="actions">
															<a href="#" class="btn default btn-sm">
																<i class="fa fa-pencil"></i> Edit
															</a>
														</div>
													</div>
													<div class="portlet-body">
														<div class="table-responsive">
															<table class="table table-hover table-bordered table-striped">
															<thead>
															<tr>
																<th>
																	 Product
																</th>
																<th>
																	 Item Status
																</th>
																<th>
																	 Original Price
																</th>
																<th>
																	 Price
																</th>
																<th>
																	 Quantity
																</th>
																<th>
																	 Tax Amount
																</th>
																<th>
																	 Tax Percent
																</th>
																<th>
																	 Discount Amount
																</th>
																<th>
																	 Total
																</th>
															</tr>
															</thead>
															<tbody>
															<tr>
																<td>
																	<a href="#">
																		 Product 1
																	</a>
																</td>
																<td>
																	<span class="label label-sm label-success">
																		 Available
																	</td>
																	<td>
																		 345.50$
																	</td>
																	<td>
																		 345.50$
																	</td>
																	<td>
																		 2
																	</td>
																	<td>
																		 2.00$
																	</td>
																	<td>
																		 4%
																	</td>
																	<td>
																		 0.00$
																	</td>
																	<td>
																		 691.00$
																	</td>
																</tr>
																<tr>
																	<td>
																		<a href="#">
																			 Product 1
																		</a>
																	</td>
																	<td>
																		<span class="label label-sm label-success">
																			 Available
																		</td>
																		<td>
																			 345.50$
																		</td>
																		<td>
																			 345.50$
																		</td>
																		<td>
																			 2
																		</td>
																		<td>
																			 2.00$
																		</td>
																		<td>
																			 4%
																		</td>
																		<td>
																			 0.00$
																		</td>
																		<td>
																			 691.00$
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#">
																				 Product 1
																			</a>
																		</td>
																		<td>
																			<span class="label label-sm label-success">
																				 Available
																			</td>
																			<td>
																				 345.50$
																			</td>
																			<td>
																				 345.50$
																			</td>
																			<td>
																				 2
																			</td>
																			<td>
																				 2.00$
																			</td>
																			<td>
																				 4%
																			</td>
																			<td>
																				 0.00$
																			</td>
																			<td>
																				 691.00$
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#">
																					 Product 1
																				</a>
																			</td>
																			<td>
																				<span class="label label-sm label-success">
																					 Available
																				</td>
																				<td>
																					 345.50$
																				</td>
																				<td>
																					 345.50$
																				</td>
																				<td>
																					 2
																				</td>
																				<td>
																					 2.00$
																				</td>
																				<td>
																					 4%
																				</td>
																				<td>
																					 0.00$
																				</td>
																				<td>
																					 691.00$
																				</td>
																			</tr>
																			</tbody>
																			</table>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-6">
															</div>
															<div class="col-md-6">
																<div class="well">
																	<div class="row static-info align-reverse">
																		<div class="col-md-8 name">
																			 Sub Total:
																		</div>
																		<div class="col-md-3 value">
																			 $1,124.50
																		</div>
																	</div>
																	<div class="row static-info align-reverse">
																		<div class="col-md-8 name">
																			 Shipping:
																		</div>
																		<div class="col-md-3 value">
																			 $40.50
																		</div>
																	</div>
																	<div class="row static-info align-reverse">
																		<div class="col-md-8 name">
																			 Grand Total:
																		</div>
																		<div class="col-md-3 value">
																			 $1,260.00
																		</div>
																	</div>
																	<div class="row static-info align-reverse">
																		<div class="col-md-8 name">
																			 Total Paid:
																		</div>
																		<div class="col-md-3 value">
																			 $1,260.00
																		</div>
																	</div>
																	<div class="row static-info align-reverse">
																		<div class="col-md-8 name">
																			 Total Refunded:
																		</div>
																		<div class="col-md-3 value">
																			 $0.00
																		</div>
																	</div>
																	<div class="row static-info align-reverse">
																		<div class="col-md-8 name">
																			 Total Due:
																		</div>
																		<div class="col-md-3 value">
																			 $1,124.50
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane" id="tab_2">
														<div class="table-container">
															<div class="table-actions-wrapper">
																<span>
																</span>
																<select class="table-group-action-input form-control input-inline input-small input-sm">
																	<option value="">Select...</option>
																	<option value="pending">Pending</option>
																	<option value="paid">Paid</option>
																	<option value="canceled">Canceled</option>
																</select>
																<button class="btn btn-sm yellow table-group-action-submit"><i class="fa fa-check"></i> Submit</button>
															</div>
															<table class="table table-striped table-bordered table-hover" id="datatable_invoices">
															<thead>
															<tr role="row" class="heading">
																<th width="5%">
																	<input type="checkbox" class="group-checkable">
																</th>
																<th width="5%">
																	 Invoice&nbsp;#
																</th>
																<th width="15%">
																	 Bill To
																</th>
																<th width="15%">
																	 Invoice&nbsp;Date
																</th>
																<th width="10%">
																	 Amount
																</th>
																<th width="10%">
																	 Status
																</th>
																<th width="10%">
																	 Actions
																</th>
															</tr>
															<tr role="row" class="filter">
																<td>
																</td>
																<td>
																	<input type="text" class="form-control form-filter input-sm" name="order_invoice_no">
																</td>
																<td>
																	<input type="text" class="form-control form-filter input-sm" name="order_invoice_bill_to">
																</td>
																<td>
																	<div class="input-group date date-picker margin-bottom-5" data-date-format="dd/mm/yyyy">
																		<input type="text" class="form-control form-filter input-sm" readonly name="order_invoice_date_from" placeholder="From">
																		<span class="input-group-btn">
																			<button class="btn btn-sm default" type="button"><i class="fa fa-calendar"></i></button>
																		</span>
																	</div>
																	<div class="input-group date date-picker" data-date-format="dd/mm/yyyy">
																		<input type="text" class="form-control form-filter input-sm" readonly name="order_invoice_date_to" placeholder="To">
																		<span class="input-group-btn">
																			<button class="btn btn-sm default" type="button"><i class="fa fa-calendar"></i></button>
																		</span>
																	</div>
																</td>
																<td>
																	<div class="margin-bottom-5">
																		<input type="text" class="form-control form-filter input-sm" name="order_invoice_amount_from" placeholder="From"/>
																	</div>
																	<input type="text" class="form-control form-filter input-sm" name="order_invoice_amount_to" placeholder="To"/>
																</td>
																<td>
																	<select name="order_invoice_status" class="form-control form-filter input-sm">
																		<option value="">Select...</option>
																		<option value="pending">Pending</option>
																		<option value="paid">Paid</option>
																		<option value="canceled">Canceled</option>
																	</select>
																</td>
																<td>
																	<div class="margin-bottom-5">
																		<button class="btn btn-sm yellow filter-submit margin-bottom"><i class="fa fa-search"></i> Search</button>
																	</div>
																	<button class="btn btn-sm red filter-cancel"><i class="fa fa-times"></i> Reset</button>
																</td>
															</tr>
															</thead>
															<tbody>
															</tbody>
															</table>
														</div>
													</div>
													<div class="tab-pane" id="tab_3">
														<div class="table-container">
															<table class="table table-striped table-bordered table-hover" id="datatable_credit_memos">
															<thead>
															<tr role="row" class="heading">
																<th width="5%">
																	 Credit&nbsp;Memo&nbsp;#
																</th>
																<th width="15%">
																	 Bill To
																</th>
																<th width="15%">
																	 Created&nbsp;Date
																</th>
																<th width="10%">
																	 Status
																</th>
																<th width="10%">
																	 Actions
																</th>
															</tr>
															</thead>
															<tbody>
															</tbody>
															</table>
														</div>
													</div>
													<div class="tab-pane" id="tab_4">
														<div class="table-container">
															<table class="table table-striped table-bordered table-hover" id="datatable_shipment">
															<thead>
															<tr role="row" class="heading">
																<th width="5%">
																	 Shipment&nbsp;#
																</th>
																<th width="15%">
																	 Ship&nbsp;To
																</th>
																<th width="15%">
																	 Shipped&nbsp;Date
																</th>
																<th width="10%">
																	 Quantity
																</th>
																<th width="10%">
																	 Actions
																</th>
															</tr>
															<tr role="row" class="filter">
																<td>
																	<input type="text" class="form-control form-filter input-sm" name="order_shipment_no">
																</td>
																<td>
																	<input type="text" class="form-control form-filter input-sm" name="order_shipment_ship_to">
																</td>
																<td>
																	<div class="input-group date date-picker margin-bottom-5" data-date-format="dd/mm/yyyy">
																		<input type="text" class="form-control form-filter input-sm" readonly name="order_shipment_date_from" placeholder="From">
																		<span class="input-group-btn">
																			<button class="btn btn-sm default" type="button"><i class="fa fa-calendar"></i></button>
																		</span>
																	</div>
																	<div class="input-group date date-picker" data-date-format="dd/mm/yyyy">
																		<input type="text" class="form-control form-filter input-sm" readonly name="order_shipment_date_to" placeholder="To">
																		<span class="input-group-btn">
																			<button class="btn btn-sm default" type="button"><i class="fa fa-calendar"></i></button>
																		</span>
																	</div>
																</td>
																<td>
																	<div class="margin-bottom-5">
																		<input type="text" class="form-control form-filter input-sm" name="order_shipment_quantity_from" placeholder="From"/>
																	</div>
																	<input type="text" class="form-control form-filter input-sm" name="order_shipment_quantity_to" placeholder="To"/>
																</td>
																<td>
																	<div class="margin-bottom-5">
																		<button class="btn btn-sm yellow filter-submit margin-bottom"><i class="fa fa-search"></i> Search</button>
																	</div>
																	<button class="btn btn-sm red filter-cancel"><i class="fa fa-times"></i> Reset</button>
																</td>
															</tr>
															</thead>
															<tbody>
															</tbody>
															</table>
														</div>
													</div>
													<div class="tab-pane" id="tab_5">
														<div class="table-container">
															<table class="table table-striped table-bordered table-hover" id="datatable_history">
															<thead>
															<tr role="row" class="heading">
																<th width="25%">
																	 Datetime
																</th>
																<th width="55%">
																	 Description
																</th>
																<th width="10%">
																	 Notification
																</th>
																<th width="10%">
																	 Actions
																</th>
															</tr>
															<tr role="row" class="filter">
																<td>
																	<div class="input-group date datetime-picker margin-bottom-5" data-date-format="dd/mm/yyyy hh:ii">
																		<input type="text" class="form-control form-filter input-sm" readonly name="order_history_date_from" placeholder="From">
																		<span class="input-group-btn">
																			<button class="btn btn-sm default date-set" type="button"><i class="fa fa-calendar"></i></button>
																		</span>
																	</div>
																	<div class="input-group date datetime-picker" data-date-format="dd/mm/yyyy hh:ii">
																		<input type="text" class="form-control form-filter input-sm" readonly name="order_history_date_to" placeholder="To">
																		<span class="input-group-btn">
																			<button class="btn btn-sm default date-set" type="button"><i class="fa fa-calendar"></i></button>
																		</span>
																	</div>
																</td>
																<td>
																	<input type="text" class="form-control form-filter input-sm" name="order_history_desc" placeholder="To"/>
																</td>
																<td>
																	<select name="order_history_notification" class="form-control form-filter input-sm">
																		<option value="">Select...</option>
																		<option value="pending">Pending</option>
																		<option value="notified">Notified</option>
																		<option value="failed">Failed</option>
																	</select>
																</td>
																<td>
																	<div class="margin-bottom-5">
																		<button class="btn btn-sm yellow filter-submit margin-bottom"><i class="fa fa-search"></i> Search</button>
																	</div>
																	<button class="btn btn-sm red filter-cancel"><i class="fa fa-times"></i> Reset</button>
																</td>
															</tr>
															</thead>
															<tbody>
															</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- End: life time stats -->
								</div>
							</div>
							<!-- END PAGE CONTENT-->
						</div>
					</div>
					<!-- END CONTENT -->
				</div>
				<!-- END CONTAINER -->
				<?php
				include_once('footer.php');
				?>
				<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
				<!-- BEGIN CORE PLUGINS -->
				<!--[if lt IE 9]>
    <script src="<?php echo base_url().'application/views/'; ?>assets/plugins/respond.min.js"></script>
    <script src="<?php echo base_url().'application/views/'; ?>assets/plugins/excanvas.min.js"></script> 
    <![endif]-->
				<script src="<?php echo base_url().'application/views/'; ?>assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
				<script src="<?php echo base_url().'application/views/'; ?>assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
				<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
				<script src="<?php echo base_url().'application/views/'; ?>assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
				<script src="<?php echo base_url().'application/views/'; ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
				<script src="<?php echo base_url().'application/views/'; ?>assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
				<script src="<?php echo base_url().'application/views/'; ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
				<script src="<?php echo base_url().'application/views/'; ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
				<script src="<?php echo base_url().'application/views/'; ?>assets/plugins/jquery.cokie.min.js" type="text/javascript"></script>
				<script src="<?php echo base_url().'application/views/'; ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
				<!-- END CORE PLUGINS -->
				<!-- BEGIN PAGE LEVEL PLUGINS -->
				<script type="text/javascript" src="<?php echo base_url().'application/views/'; ?>assets/plugins/select2/select2.min.js"></script>
				<script type="text/javascript" src="<?php echo base_url().'application/views/'; ?>assets/plugins/data-tables/jquery.dataTables.js"></script>
				<script type="text/javascript" src="<?php echo base_url().'application/views/'; ?>assets/plugins/data-tables/DT_bootstrap.js"></script>
				<script type="text/javascript" src="<?php echo base_url().'application/views/'; ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
				<script type="text/javascript" src="<?php echo base_url().'application/views/'; ?>assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
				<!-- END PAGE LEVEL PLUGINS -->
				<!-- BEGIN PAGE LEVEL SCRIPTS -->
				<script src="<?php echo base_url().'application/views/'; ?>assets/scripts/core/app.js"></script>
				<script src="<?php echo base_url().'application/views/'; ?>assets/scripts/core/datatable.js"></script>
				<script src="<?php echo base_url().'application/views/'; ?>assets/scripts/custom/ecommerce-orders-view.js"></script>
				<!-- END PAGE LEVEL SCRIPTS -->
				<script>
        jQuery(document).ready(function() {    
           App.init();
           EcommerceOrdersView.init();
        });
    </script>
				<!-- END JAVASCRIPTS -->
				</body>
				<!-- END BODY -->
				</html>