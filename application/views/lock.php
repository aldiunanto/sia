<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
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
<link href="<?php echo base_url().'application/views/'; ?>assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url().'application/views/'; ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url().'application/views/'; ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url().'application/views/'; ?>assets/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url().'application/views/'; ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="<?php echo base_url().'application/views/'; ?>assets/css/pages/lock.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url().'application/views/'; ?>assets/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="<?php echo base_url().'application/views/'; ?>favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body>
<div class="page-lock">
	<div class="page-logo">
		<a class="brand" href="#">
			<img src="<?php echo base_url().'application/views/'; ?>assets/img/logo-big.png" alt="logo"/>
		</a>
	</div>
	<div class="page-body">
		<img class="page-lock-img" src="<?php echo base_url().'application/views/'; ?>assets/img/profile/profile.jpg" alt="">
		<div class="page-lock-info">
			<h1>Bob Nilson</h1>
			<span class="email">
				 bob@keenthemes.com
			</span>
			<span class="locked">
				 Locked
			</span>
			<form class="form-inline" action="<?php echo base_url(); ?>">
				<div class="input-group input-medium">
					<input type="text" class="form-control" placeholder="Password">
					<span class="input-group-btn">
						<button type="submit" class="btn blue icn-only"><i class="m-icon-swapright m-icon-white"></i></button>
					</span>
				</div>
				<!-- /input-group -->
				<div class="relogin">
					<a href="<?php echo base_url(); ?>login">
						 Not Bob Nilson ?
					</a>
				</div>
			</form>
		</div>
	</div>
	<div class="page-footer">
		 2015 &copy; SIA - Sales Order | Gunadarma University.
	</div>
</div>
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
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo base_url().'application/views/'; ?>assets/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script src="<?php echo base_url().'application/views/'; ?>assets/scripts/core/app.js"></script>
<script src="<?php echo base_url().'application/views/'; ?>assets/scripts/custom/lock.js"></script>
<script>
jQuery(document).ready(function() {    
   App.init();
   Lock.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>