<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
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
	
	<!-- BEGIN THEME STYLES -->
	<link href="<?php echo base_url().'application/views/'; ?>assets/css/print.css" rel="stylesheet" type="text/css" media="print"/>
	<link href="<?php echo base_url().'application/views/'; ?>assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url().'application/views/'; ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url().'application/views/'; ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url().'application/views/'; ?>assets/css/plugins.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url().'application/views/'; ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="<?php echo base_url().'application/views/'; ?>assets/css/pages/invoice.css" rel="stylesheet" type="text/css"/>
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
			<div class="row hidden-print">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
					Invoice <small>invoice sample</small>
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
								Extra
							</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">
								Invoice
							</a>
						</li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="invoice">
				<div class="row invoice-logo">
					<div class="col-xs-6 invoice-logo-space">
						<img src="<?php echo base_url().'application/views/'; ?>assets/img/invoice/walmart.png" alt=""/>
					</div>
					<div class="col-xs-6">
						<p>
							 #5652256 / 28 Feb 2013
							<span class="muted">
								 Consectetuer adipiscing elit
							</span>
						</p>
					</div>
				</div>
				<hr/>
				<div class="row">
					<div class="col-xs-4">
						<h4>Client:</h4>
						<ul class="list-unstyled">
							<li>
								 John Doe
							</li>
							<li>
								 Mr Nilson Otto
							</li>
							<li>
								 FoodMaster Ltd
							</li>
							<li>
								 Madrid
							</li>
							<li>
								 Spain
							</li>
							<li>
								 1982 OOP
							</li>
						</ul>
					</div>
					<div class="col-xs-4">
						<h4>About:</h4>
						<ul class="list-unstyled">
							<li>
								 Drem psum dolor sit amet
							</li>
							<li>
								 Laoreet dolore magna
							</li>
							<li>
								 Consectetuer adipiscing elit
							</li>
							<li>
								 Magna aliquam tincidunt erat volutpat
							</li>
							<li>
								 Olor sit amet adipiscing eli
							</li>
							<li>
								 Laoreet dolore magna
							</li>
						</ul>
					</div>
					<div class="col-xs-4 invoice-payment">
						<h4>Payment Details:</h4>
						<ul class="list-unstyled">
							<li>
								<strong>V.A.T Reg #:</strong> 542554(DEMO)78
							</li>
							<li>
								<strong>Account Name:</strong> FoodMaster Ltd
							</li>
							<li>
								<strong>SWIFT code:</strong> 45454DEMO545DEMO
							</li>
							<li>
								<strong>V.A.T Reg #:</strong> 542554(DEMO)78
							</li>
							<li>
								<strong>Account Name:</strong> FoodMaster Ltd
							</li>
							<li>
								<strong>SWIFT code:</strong> 45454DEMO545DEMO
							</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<table class="table table-striped table-hover">
						<thead>
						<tr>
							<th>
								 #
							</th>
							<th>
								 Item
							</th>
							<th class="hidden-480">
								 Description
							</th>
							<th class="hidden-480">
								 Quantity
							</th>
							<th class="hidden-480">
								 Unit Cost
							</th>
							<th>
								 Total
							</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>
								 1
							</td>
							<td>
								 Hardware
							</td>
							<td class="hidden-480">
								 Server hardware purchase
							</td>
							<td class="hidden-480">
								 32
							</td>
							<td class="hidden-480">
								 $75
							</td>
							<td>
								 $2152
							</td>
						</tr>
						<tr>
							<td>
								 2
							</td>
							<td>
								 Furniture
							</td>
							<td class="hidden-480">
								 Office furniture purchase
							</td>
							<td class="hidden-480">
								 15
							</td>
							<td class="hidden-480">
								 $169
							</td>
							<td>
								 $4169
							</td>
						</tr>
						<tr>
							<td>
								 3
							</td>
							<td>
								 Foods
							</td>
							<td class="hidden-480">
								 Company Anual Dinner Catering
							</td>
							<td class="hidden-480">
								 69
							</td>
							<td class="hidden-480">
								 $49
							</td>
							<td>
								 $1260
							</td>
						</tr>
						<tr>
							<td>
								 3
							</td>
							<td>
								 Software
							</td>
							<td class="hidden-480">
								 Payment for Jan 2013
							</td>
							<td class="hidden-480">
								 149
							</td>
							<td class="hidden-480">
								 $12
							</td>
							<td>
								 $866
							</td>
						</tr>
						</tbody>
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-4">
						<div class="well">
							<address>
							<strong>Loop, Inc.</strong><br/>
							795 Park Ave, Suite 120<br/>
							San Francisco, CA 94107<br/>
							<abbr title="Phone">P:</abbr> (234) 145-1810 </address>
							<address>
							<strong>Full Name</strong><br/>
							<a href="mailto:#">
								 first.last@email.com
							</a>
							</address>
						</div>
					</div>
					<div class="col-xs-8 invoice-block">
						<ul class="list-unstyled amounts">
							<li>
								<strong>Sub - Total amount:</strong> $9265
							</li>
							<li>
								<strong>Discount:</strong> 12.9%
							</li>
							<li>
								<strong>VAT:</strong> -----
							</li>
							<li>
								<strong>Grand Total:</strong> $12489
							</li>
						</ul>
						<br/>
						<a class="btn btn-lg blue hidden-print" onclick="javascript:window.print();">
							 Print <i class="fa fa-print"></i>
						</a>
						<a class="btn btn-lg green hidden-print">
							 Submit Your Invoice <i class="fa fa-check"></i>
						</a>
					</div>
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
<script src="<?php echo base_url().'application/views/'; ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url().'application/views/'; ?>assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php echo base_url().'application/views/'; ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo base_url().'application/views/'; ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url().'application/views/'; ?>assets/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?php echo base_url().'application/views/'; ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<script src="<?php echo base_url().'application/views/'; ?>assets/scripts/core/app.js"></script>
<script>
jQuery(document).ready(function() {    
   App.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>