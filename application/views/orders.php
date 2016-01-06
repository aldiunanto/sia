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
					Orders <small>orders listing</small>
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
							<a href="<?php echo base_url(); ?>">
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
								Orders
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
								<i class="fa fa-shopping-cart"></i>Order Listing
							</div>
							<div class="actions">
								<a href="#" class="btn default yellow-stripe">
									<i class="fa fa-plus"></i>
									<span class="hidden-480">
										 New Order
									</span>
								</a>
								<div class="btn-group">
									<a class="btn default yellow-stripe" href="#" data-toggle="dropdown">
										<i class="fa fa-share"></i>
										<span class="hidden-480">
											 Tools
										</span>
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="dropdown-menu pull-right">
										<li>
											<a href="#">
												 Export to Hamzah
											</a>
										</li>
										<li class="divider">
										</li>
										<li>
											<a href="#">
												 Print Invoices
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-container">
								<div class="table-actions-wrapper">
									<span>
									</span>
									<select class="table-group-action-input form-control input-inline input-small input-sm">
										<option value="">Select...</option>
										<option value="Cancel">Cancel</option>
										<option value="Cancel">Hold</option>
										<option value="Cancel">On Hold</option>
										<option value="Close">Close</option>
									</select>
									<button class="btn btn-sm yellow table-group-action-submit"><i class="fa fa-check"></i> Submit</button>
								</div>
								<table class="table table-striped table-bordered table-hover" id="datatable_orders">
								<thead>
								<tr role="row" class="heading">
									<th width="5%">
										<input type="checkbox" class="group-checkable">
									</th>
									<th width="5%">
										 Order&nbsp;#
									</th>
									<th width="15%">
										 Purchased&nbsp;On
									</th>
									<th width="15%">
										 Customer
									</th>
									<th width="10%">
										 Ship&nbsp;To
									</th>
									<th width="10%">
										 Base&nbsp;Price
									</th>
									<th width="10%">
										 Purchased&nbsp;Price
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
										<input type="text" class="form-control form-filter input-sm" name="order_id">
									</td>
									<td>
										<div class="input-group date date-picker margin-bottom-5" data-date-format="dd/mm/yyyy">
											<input type="text" class="form-control form-filter input-sm" readonly name="order_date_from" placeholder="From">
											<span class="input-group-btn">
												<button class="btn btn-sm default" type="button"><i class="fa fa-calendar"></i></button>
											</span>
										</div>
										<div class="input-group date date-picker" data-date-format="dd/mm/yyyy">
											<input type="text" class="form-control form-filter input-sm" readonly name="order_date_to" placeholder="To">
											<span class="input-group-btn">
												<button class="btn btn-sm default" type="button"><i class="fa fa-calendar"></i></button>
											</span>
										</div>
									</td>
									<td>
										<input type="text" class="form-control form-filter input-sm" name="order_customer_name">
									</td>
									<td>
										<input type="text" class="form-control form-filter input-sm" name="order_ship_to">
									</td>
									<td>
										<div class="margin-bottom-5">
											<input type="text" class="form-control form-filter input-sm" name="order_base_price_from" placeholder="From"/>
										</div>
										<input type="text" class="form-control form-filter input-sm" name="order_base_price_to" placeholder="To"/>
									</td>
									<td>
										<div class="margin-bottom-5">
											<input type="text" class="form-control form-filter input-sm margin-bottom-5 clearfix" name="order_purchase_price_from" placeholder="From"/>
										</div>
										<input type="text" class="form-control form-filter input-sm" name="order_purchase_price_to" placeholder="To"/>
									</td>
									<td>
										<select name="order_status" class="form-control form-filter input-sm">
											<option value="">Select...</option>
											<option value="pending">Pending</option>
											<option value="closed">Closed</option>
											<option value="hold">On Hold</option>
											<option value="fraud">Fraud</option>
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
    <script src="assets/plugins/respond.min.js"></script>
    <script src="assets/plugins/excanvas.min.js"></script> 
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
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url().'application/views/'; ?>assets/scripts/core/app.js"></script>
<script src="<?php echo base_url().'application/views/'; ?>assets/scripts/core/datatable.js"></script>
<script src="<?php echo base_url().'application/views/'; ?>assets/scripts/custom/ecommerce-orders.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
        jQuery(document).ready(function() {    
           App.init();
           EcommerceOrders.init();
        });
    </script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>