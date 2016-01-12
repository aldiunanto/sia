<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="utf-8"/>
	<title><?php echo $title.' | UG-SO by 3KA24'; ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('assets/plugins/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('assets/plugins/uniform/css/uniform.default.css') ?>" rel="stylesheet" type="text/css" />
	
	<link href="<?php echo base_url('assets/css/style-metronic.css') ?>" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url('assets/css/style-responsive.css') ?>" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url('assets/css/plugins.css') ?>" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url('assets/css/pages/tasks.css') ?>" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url('assets/css/themes/default.css') ?>" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="<?php echo base_url('assets/css/print.css') ?>" rel="stylesheet" type="text/css" media="print"/>
	<link href="<?php echo base_url('assets/css/custom.css') ?>" rel="stylesheet" type="text/css"/>

	<?php
		if(! empty($css)){
			foreach($css as $file){
	?>
				<link href="<?php echo base_url('assets/css/' . $file . '.css') ?>" rel="stylesheet" type="text/css"/>
	<?php
			}
		}
	?>
	<link href="<?php echo base_url('assets/css/global.css') ?>" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url('assets/css/' . $this->router->fetch_class() . '.css') ?>" rel="stylesheet" type="text/css"/>
	
	<link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.ico') ?>" />
</head>
<body class="page-header-fixed page-sidebar-fixed" data-controller="<?php echo $this->router->fetch_class() ?>" data-method="<?php echo $this->router->fetch_method() ?>">

	<?php $this->load->view('parts/header.php') ?>
	<div class="clearfix"></div>

	<div class="page-container">
		<?php $this->load->view('parts/sidebar.php') ?>
		<?php $this->load->view($content) ?>
	</div>

	<?php $this->load->view('parts/footer.php') ?>

	<!--[if lt IE 9]>
	<script src="assets/plugins/respond.min.js"></script>
	<script src="assets/plugins/excanvas.min.js"></script> 
	<![endif]-->
	<script src="<?php echo base_url('assets/plugins/jquery-1.10.2.min.js') ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/plugins/jquery-migrate-1.2.1.min.js') ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js') ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js') ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js') ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/plugins/jquery.blockui.min.js') ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/plugins/jquery.cokie.min.js') ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/plugins/uniform/jquery.uniform.min.js') ?>" type="text/javascript"></script>

	<?php
		if(! empty($js)){
			foreach($js as $file){
	?>
				<script src="<?php echo base_url('assets/scripts/' . $file . '.js') ?>" type="text/javascript"></script>
	<?php
			}
		}
	?>

	<script src="<?php echo base_url('assets/scripts/core/app.js') ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/scripts/custom/index.js') ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/scripts/custom/tasks.js') ?>" type="text/javascript"></script>

	<script>
		var options = {
			baseUrl 	: '<?php echo base_url() ?>',
			siteUrl		: '<?php echo site_url() ?>'
		}
	</script>
	<script src="<?php echo base_url('assets/scripts/libs.js') ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/scripts/' . $this->router->fetch_class() . '.js') ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/scripts/exec.js') ?>" type="text/javascript"></script>

	<script>
	jQuery(document).ready(function() {    
	   App.init(); // initlayout and core plugins
	   Index.init();
	   Index.initJQVMAP(); // init index page's custom scripts
	   Index.initCalendar(); // init index page's custom scripts
	   Index.initCharts(); // init index page's custom scripts
	   Index.initChat();
	   Index.initMiniCharts();
	   Index.initDashboardDaterange();
	   Index.initIntro();
	   Tasks.initDashboardWidget();
	});
	</script>
</body>
</html>