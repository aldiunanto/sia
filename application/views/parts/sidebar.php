<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<!-- add "navbar-no-scroll" class to disable the scrolling of the sidebar menu -->
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200">
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler hidden-phone">
					</div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
				<li class="sidebar-search-wrapper">
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<form class="sidebar-search" action="<?php echo base_url(); ?>search" method="POST">
						<div class="form-container">
							<div class="input-box">
								<a href="javascript:;" class="remove">
								</a>
								<input type="text" placeholder="Search..."/>
								<input type="button" class="submit" value=" "/>
							</div>
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
				<li <?php isActive('home') ?>>
					<a href="<?php echo base_url(); ?>">
						<i class="fa fa-home"></i>
						<span class="title">
							Dashboard
						</span>
						<span class="selected">
						</span>
					</a>
				</li>
				<li <?php isActive('products') ?>>
					<a href="javascript:;">
						<i class="fa fa-sitemap"></i>
						<span class="title">Products</span>
						<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo site_url('products') ?>">
								<i class="fa fa-bars"></i> Data List
							</a>
						</li>
						<li>
							<a href="<?php echo site_url('products/add') ?>">
								<i class="fa fa-plus-square"></i> New Product
							</a>
						</li>
					</ul>
				</li>
				<!--
				<li>
					<a href="javascript:;">
						<i class="fa fa-shopping-cart"></i>
						<span class="title">
							E-Commerce
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo base_url(); ?>orders">
								<i class="fa fa-shopping-cart"></i>
								Orders
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
						<i class="fa fa-sitemap"></i>
						<span class="title">
							Pages
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo base_url(); ?>about">
								<i class="fa fa-group"></i>
								About Us
							</a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>contact">
								<i class="fa fa-envelope-o"></i>
								Contact Us
							</a>
						</li>
					</ul>
				</li>
				<li class="start">
					<a href="javascript:;">
						<i class="fa fa-gift"></i>
						<span class="title">
							Extra
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li class="active">
							<a href="<?php echo base_url(); ?>profile">
								 User Profile
							</a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>lock">
								 Lock Screen
							</a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>invoice">
								 Invoice
							</a>
						</li>
					</ul>
				</li>
				-->
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->