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
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'application/views/'; ?>assets/plugins/bootstrap-datepicker/css/datepicker.css"/>
	<!-- END PAGE LEVEL STYLES -->
	<!-- BEGIN THEME STYLES -->
	<link href="<?php echo base_url().'application/views/'; ?>assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url().'application/views/'; ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url().'application/views/'; ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url().'application/views/'; ?>assets/css/plugins.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url().'application/views/'; ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="<?php echo base_url().'application/views/'; ?>assets/css/pages/search.css" rel="stylesheet" type="text/css"/>
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
					Search Results <small>search results</small>
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
								Search Results
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
					<div class="tabbable tabbable-custom tabbable-full-width">
						<ul class="nav nav-tabs">
							<li class="active">
								<a data-toggle="tab" href="#tab_1_3">
									 Classic Search
								</a>
							</li>
							<li>
								<a data-toggle="tab" href="#tab_1_4">
									 Company Search
								</a>
							</li>
							<li>
								<a data-toggle="tab" href="#tab_1_5">
									 User Search
								</a>
							</li>
						</ul>
						<div class="tab-content">
							<div id="tab_1_3" class="tab-pane active">
								<div class="row search-form-default">
									<div class="col-md-12">
										<form class="form-inline" action="#">
											<div class="input-group">
												<div class="input-cont">
													<input type="text" placeholder="Search..." class="form-control"/>
												</div>
												<span class="input-group-btn">
													<button type="button" class="btn green">
													Search &nbsp; <i class="m-icon-swapright m-icon-white"></i>
													</button>
												</span>
											</div>
										</form>
									</div>
								</div>
								<?php
									for($classic=1;$classic<=10;$classic++)
									{
								?>
								<div class="search-classic">
									<h4>
									<a href="#">
										 Artikel ke-<?php echo $classic; ?>
									</a>
									</h4>
									<a href="#">
										 http://www.aldiunanto.com
									</a>
									<p>
										 Aldi Unanto is a responsive admin dashboard template powered with XXX Bootstrap Framework for admin and backend applications. Aldi Unanto has a clean and intuitive pops style design which makes your next pants look awesome and yet user friendly..
									</p>
								</div>
								<?php
									}
								?>
								<div class="margin-top-20">
									<ul class="pagination">
										<li>
											<a href="#">
												 Prev
											</a>
										</li>
										<li>
											<a href="#">
												 1
											</a>
										</li>
										<li>
											<a href="#">
												 2
											</a>
										</li>
										<li class="active">
											<a href="#">
												 3
											</a>
										</li>
										<li>
											<a href="#">
												 4
											</a>
										</li>
										<li>
											<a href="#">
												 5
											</a>
										</li>
										<li>
											<a href="#">
												 Next
											</a>
										</li>
									</ul>
								</div>
							</div>
							<!--end tab-pane-->
							<div id="tab_1_4" class="tab-pane">
								<div class="row search-form-default">
									<div class="col-md-12">
										<form class="form-inline" action="#">
											<div class="input-group">
												<div class="input-cont">
													<input type="text" placeholder="Search..." class="form-control"/>
												</div>
												<span class="input-group-btn">
													<button type="button" class="btn green">
													Search &nbsp; <i class="m-icon-swapright m-icon-white"></i>
													</button>
												</span>
											</div>
										</form>
									</div>
								</div>
								<div class="table-responsive">
									<table class="table table-striped table-bordered table-advance table-hover">
									<thead>
									<tr>
										<th>
											<i class="fa fa-briefcase"></i> Company
										</th>
										<th>
											<i class="fa fa-question"></i> Description
										</th>
										<th>
											<i class="fa fa-bookmark"></i> Amount
										</th>
										<th>
										</th>
									</tr>
									</thead>
									<tbody>
									<?php
										for($cmp=1;$cmp<=15;$cmp++){
									?>
									<tr>
										<td>
											<a href="#">
												 XXX
											</a>
										</td>
										<td>
											 Some interesting guys purchase
										</td>
										<td>
											 52560.10$
											<span class="label label-success label-sm">
												 Not Paid
											</span>
										</td>
										<td>
											<a class="btn default btn-xs green-stripe" href="#">
												 View
											</a>
										</td>
									</tr>
									<?php
										}
									?>
									</tbody>
									</table>
								</div>
								<div class="margin-top-20">
									<ul class="pagination">
										<li>
											<a href="#">
												 Prev
											</a>
										</li>
										<li>
											<a href="#">
												 1
											</a>
										</li>
										<li>
											<a href="#">
												 2
											</a>
										</li>
										<li class="active">
											<a href="#">
												 3
											</a>
										</li>
										<li>
											<a href="#">
												 4
											</a>
										</li>
										<li>
											<a href="#">
												 5
											</a>
										</li>
										<li>
											<a href="#">
												 Next
											</a>
										</li>
									</ul>
								</div>
							</div>
							<!--end tab-pane-->
							<div id="tab_1_5" class="tab-pane">
								<div class="row search-form-default">
									<div class="col-md-12">
										<form class="form-inline" action="#">
											<div class="input-group">
												<div class="input-cont">
													<input type="text" placeholder="Search..." class="form-control"/>
												</div>
												<span class="input-group-btn">
													<button type="button" class="btn green">
													Search &nbsp; <i class="m-icon-swapright m-icon-white"></i>
													</button>
												</span>
											</div>
										</form>
									</div>
								</div>
								<div class="table-responsive">
									<table class="table table-striped table-bordered table-advance table-hover">
									<thead>
									<tr>
										<th>
											 Photo
										</th>
										<th>
											 Fullname
										</th>
										<th>
											 Username
										</th>
										<th>
											 Joined
										</th>
										<th>
											 Points
										</th>
										<th>
											 Status
										</th>
										<th>
										</th>
									</tr>
									</thead>
									<tbody>
									<?php
										for($guy=1;$guy<=15;$guy++){
									?>
									<tr>
										<td>
											<img src="<?php echo base_url().'application/views/'; ?>assets/img/avatar1.jpg" alt=""/>
										</td>
										<td>
											 Wali Songo <?php echo $guy; ?>
										</td>
										<td>
											 ws<?php echo $guy; ?>
										</td>
										<td>
											 29 Jan 1093
										</td>
										<td>
											 -2960
										</td>
										<td>
											<span class="label label-sm label-success">
												 Not Approved
											</span>
										</td>
										<td>
											<a class="btn default btn-xs red-stripe" href="#">
												 View
											</a>
										</td>
									</tr>
									<?php
									}
									?>
									</tbody>
									</table>
								</div>
								<div class="margin-top-20">
									<ul class="pagination">
										<li>
											<a href="#">
												 Prev
											</a>
										</li>
										<li>
											<a href="#">
												 1
											</a>
										</li>
										<li>
											<a href="#">
												 2
											</a>
										</li>
										<li class="active">
											<a href="#">
												 3
											</a>
										</li>
										<li>
											<a href="#">
												 4
											</a>
										</li>
										<li>
											<a href="#">
												 5
											</a>
										</li>
										<li>
											<a href="#">
												 Next
											</a>
										</li>
									</ul>
								</div>
							</div>
							<!--end tab-pane-->
						</div>
					</div>
				</div>
				<!--end tabbable-->
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
<script type="text/javascript" src="<?php echo base_url().'application/views/'; ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url().'application/views/'; ?>assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
<script src="<?php echo base_url().'application/views/'; ?>assets/scripts/core/app.js"></script>
<script src="<?php echo base_url().'application/views/'; ?>assets/scripts/custom/search.js"></script>
<script>
jQuery(document).ready(function() {    
   App.init();
   Search.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>