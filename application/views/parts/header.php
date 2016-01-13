<?php $userdata = $this->session->userdata('userdata'); ?>
<!-- BEGIN HEADER -->
<div class="header navbar navbar-fixed-top">
	<!-- BEGIN TOP NAVIGATION BAR -->
	<div class="header-inner">
		<!-- BEGIN LOGO -->
		<a class="navbar-brand" href="<?php echo base_url() ?>">
			<img src="<?php echo base_url('assets/img/logo.png') ?>" alt="logo" class="img-responsive"/>
		</a>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<img src="<?php echo base_url('assets/img/menu-toggler.png') ?>" alt=""/>
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<ul class="nav navbar-nav pull-right">
			<!-- BEGIN USER LOGIN DROPDOWN -->
			<li class="dropdown user">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<!-- <img alt="" src="<?php echo base_url('assets/img/avatar1_small.jpg') ?>"/> -->
					<span class="username">
						 <?=$userdata['user_fullname']?>
					</span>
					<i class="fa fa-angle-down"></i>
				</a>
				<ul class="dropdown-menu">
					<!-- <li>
						<a href="<?php echo site_url('users/profile') ?>">
							<i class="fa fa-user"></i> My Profile
						</a>
					</li>
					<li class="divider">
					</li> -->
					<li>
						<a href="javascript:;" id="trigger_fullscreen">
							<i class="fa fa-arrows"></i> Full Screen
						</a>
					</li>
					<!-- <li>
						<a href="<?php echo site_url() ?>">
							<i class="fa fa-lock"></i> Lock Screen
						</a>
					</li> -->
					<li>
						<a href="<?php echo site_url('users/logout'); ?>">
							<i class="fa fa-key"></i> Log Out
						</a>
					</li>
				</ul>
			</li>
			<!-- END USER LOGIN DROPDOWN -->
		</ul>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->