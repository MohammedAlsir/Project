<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.2
Version: 3.7.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" dir="rtl">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Metronic | Form Stuff - Material Design Form Controls</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
<link href="../../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
<link href="../../assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css">
<link href="../../assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
<link href="../../assets/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="../../assets/global/css/components-md-rtl.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="../../assets/global/css/plugins-md-rtl.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/admin/layout4/css/layout-rtl.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="../../assets/admin/layout4/css/themes/light-rtl.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/admin/layout4/css/custom-rtl.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-md page-header-fixed page-sidebar-closed-hide-logo ">
<!-- BEGIN HEADER -->
<div class="page-header md-shadow-z-1-i navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="index.html">
			<img src="../../assets/admin/layout4/img/logo-light.png" alt="logo" class="logo-default"/>
			</a>
			<div class="menu-toggler sidebar-toggler">
				<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
			</div>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN PAGE ACTIONS -->
		<!-- DOC: Remove "hide" class to enable the page header actions -->
		<div class="page-actions">
			<div class="btn-group">
				<button type="button" class="btn red-haze btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
				<span class="hidden-sm hidden-xs">Actions&nbsp;</span><i class="fa fa-angle-down"></i>
				</button>
				<ul class="dropdown-menu" role="menu">
					<li>
						<a href="javascript:;">
						<i class="icon-docs"></i> New Post </a>
					</li>
					<li>
						<a href="javascript:;">
						<i class="icon-tag"></i> New Comment </a>
					</li>
					<li>
						<a href="javascript:;">
						<i class="icon-share"></i> Share </a>
					</li>
					<li class="divider">
					</li>
					<li>
						<a href="javascript:;">
						<i class="icon-flag"></i> Comments <span class="badge badge-success">4</span>
						</a>
					</li>
					<li>
						<a href="javascript:;">
						<i class="icon-users"></i> Feedbacks <span class="badge badge-danger">2</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<!-- END PAGE ACTIONS -->
		<!-- BEGIN PAGE TOP -->
		<div class="page-top">
			<!-- BEGIN HEADER SEARCH BOX -->
			<!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
			<form class="search-form" action="extra_search.html" method="GET">
				<div class="input-group">
					<input type="text" class="form-control input-sm" placeholder="Search..." name="query">
					<span class="input-group-btn">
					<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
					</span>
				</div>
			</form>
			<!-- END HEADER SEARCH BOX -->
			<!-- BEGIN TOP NAVIGATION MENU -->
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">
					<li class="separator hide">
					</li>
					<!-- BEGIN NOTIFICATION DROPDOWN -->
					<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
					<li class="dropdown dropdown-extended dropdown-notification dropdown-dark" id="header_notification_bar">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<i class="icon-bell"></i>
						<span class="badge badge-success">
						7 </span>
						</a>
						<ul class="dropdown-menu">
							<li class="external">
								<h3><span class="bold">12 pending</span> notifications</h3>
								<a href="extra_profile.html">view all</a>
							</li>
							<li>
								<ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
									<li>
										<a href="javascript:;">
										<span class="time">just now</span>
										<span class="details">
										<span class="label label-sm label-icon label-success">
										<i class="fa fa-plus"></i>
										</span>
										New user registered. </span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="time">3 mins</span>
										<span class="details">
										<span class="label label-sm label-icon label-danger">
										<i class="fa fa-bolt"></i>
										</span>
										Server #12 overloaded. </span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="time">10 mins</span>
										<span class="details">
										<span class="label label-sm label-icon label-warning">
										<i class="fa fa-bell-o"></i>
										</span>
										Server #2 not responding. </span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="time">14 hrs</span>
										<span class="details">
										<span class="label label-sm label-icon label-info">
										<i class="fa fa-bullhorn"></i>
										</span>
										Application error. </span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="time">2 days</span>
										<span class="details">
										<span class="label label-sm label-icon label-danger">
										<i class="fa fa-bolt"></i>
										</span>
										Database overloaded 68%. </span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="time">3 days</span>
										<span class="details">
										<span class="label label-sm label-icon label-danger">
										<i class="fa fa-bolt"></i>
										</span>
										A user IP blocked. </span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="time">4 days</span>
										<span class="details">
										<span class="label label-sm label-icon label-warning">
										<i class="fa fa-bell-o"></i>
										</span>
										Storage Server #4 not responding dfdfdfd. </span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="time">5 days</span>
										<span class="details">
										<span class="label label-sm label-icon label-info">
										<i class="fa fa-bullhorn"></i>
										</span>
										System Error. </span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="time">9 days</span>
										<span class="details">
										<span class="label label-sm label-icon label-danger">
										<i class="fa fa-bolt"></i>
										</span>
										Storage server failed. </span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<!-- END NOTIFICATION DROPDOWN -->
					<li class="separator hide">
					</li>
					<!-- BEGIN INBOX DROPDOWN -->
					<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
					<li class="dropdown dropdown-extended dropdown-inbox dropdown-dark" id="header_inbox_bar">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<i class="icon-envelope-open"></i>
						<span class="badge badge-danger">
						4 </span>
						</a>
						<ul class="dropdown-menu">
							<li class="external">
								<h3>You have <span class="bold">7 New</span> Messages</h3>
								<a href="inbox.html">view all</a>
							</li>
							<li>
								<ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
									<li>
										<a href="inbox.html?a=view">
										<span class="photo">
										<img src="../../assets/admin/layout3/img/avatar2.jpg" class="img-circle" alt="">
										</span>
										<span class="subject">
										<span class="from">
										Lisa Wong </span>
										<span class="time">Just Now </span>
										</span>
										<span class="message">
										Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
										</a>
									</li>
									<li>
										<a href="inbox.html?a=view">
										<span class="photo">
										<img src="../../assets/admin/layout3/img/avatar3.jpg" class="img-circle" alt="">
										</span>
										<span class="subject">
										<span class="from">
										Richard Doe </span>
										<span class="time">16 mins </span>
										</span>
										<span class="message">
										Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
										</a>
									</li>
									<li>
										<a href="inbox.html?a=view">
										<span class="photo">
										<img src="../../assets/admin/layout3/img/avatar1.jpg" class="img-circle" alt="">
										</span>
										<span class="subject">
										<span class="from">
										Bob Nilson </span>
										<span class="time">2 hrs </span>
										</span>
										<span class="message">
										Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
										</a>
									</li>
									<li>
										<a href="inbox.html?a=view">
										<span class="photo">
										<img src="../../assets/admin/layout3/img/avatar2.jpg" class="img-circle" alt="">
										</span>
										<span class="subject">
										<span class="from">
										Lisa Wong </span>
										<span class="time">40 mins </span>
										</span>
										<span class="message">
										Vivamus sed auctor 40% nibh congue nibh... </span>
										</a>
									</li>
									<li>
										<a href="inbox.html?a=view">
										<span class="photo">
										<img src="../../assets/admin/layout3/img/avatar3.jpg" class="img-circle" alt="">
										</span>
										<span class="subject">
										<span class="from">
										Richard Doe </span>
										<span class="time">46 mins </span>
										</span>
										<span class="message">
										Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<!-- END INBOX DROPDOWN -->
					<li class="separator hide">
					</li>
					<!-- BEGIN TODO DROPDOWN -->
					<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
					<li class="dropdown dropdown-extended dropdown-tasks dropdown-dark" id="header_task_bar">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<i class="icon-calendar"></i>
						<span class="badge badge-primary">
						3 </span>
						</a>
						<ul class="dropdown-menu extended tasks">
							<li class="external">
								<h3>You have <span class="bold">12 pending</span> tasks</h3>
								<a href="page_todo.html">view all</a>
							</li>
							<li>
								<ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
									<li>
										<a href="javascript:;">
										<span class="task">
										<span class="desc">New release v1.2 </span>
										<span class="percent">30%</span>
										</span>
										<span class="progress">
										<span style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">40% Complete</span></span>
										</span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="task">
										<span class="desc">Application deployment</span>
										<span class="percent">65%</span>
										</span>
										<span class="progress">
										<span style="width: 65%;" class="progress-bar progress-bar-danger" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">65% Complete</span></span>
										</span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="task">
										<span class="desc">Mobile app release</span>
										<span class="percent">98%</span>
										</span>
										<span class="progress">
										<span style="width: 98%;" class="progress-bar progress-bar-success" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">98% Complete</span></span>
										</span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="task">
										<span class="desc">Database migration</span>
										<span class="percent">10%</span>
										</span>
										<span class="progress">
										<span style="width: 10%;" class="progress-bar progress-bar-warning" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">10% Complete</span></span>
										</span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="task">
										<span class="desc">Web server upgrade</span>
										<span class="percent">58%</span>
										</span>
										<span class="progress">
										<span style="width: 58%;" class="progress-bar progress-bar-info" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">58% Complete</span></span>
										</span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="task">
										<span class="desc">Mobile development</span>
										<span class="percent">85%</span>
										</span>
										<span class="progress">
										<span style="width: 85%;" class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">85% Complete</span></span>
										</span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="task">
										<span class="desc">New UI release</span>
										<span class="percent">38%</span>
										</span>
										<span class="progress progress-striped">
										<span style="width: 38%;" class="progress-bar progress-bar-important" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">38% Complete</span></span>
										</span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<!-- END TODO DROPDOWN -->
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
					<li class="dropdown dropdown-user dropdown-dark">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<span class="username username-hide-on-mobile">
						Nick </span>
						<!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
						<img alt="" class="img-circle" src="../../assets/admin/layout4/img/avatar9.jpg"/>
						</a>
						<ul class="dropdown-menu dropdown-menu-default">
							<li>
								<a href="extra_profile.html">
								<i class="icon-user"></i> My Profile </a>
							</li>
							<li>
								<a href="page_calendar.html">
								<i class="icon-calendar"></i> My Calendar </a>
							</li>
							<li>
								<a href="inbox.html">
								<i class="icon-envelope-open"></i> My Inbox <span class="badge badge-danger">
								3 </span>
								</a>
							</li>
							<li>
								<a href="page_todo.html">
								<i class="icon-rocket"></i> My Tasks <span class="badge badge-success">
								7 </span>
								</a>
							</li>
							<li class="divider">
							</li>
							<li>
								<a href="extra_lock.html">
								<i class="icon-lock"></i> Lock Screen </a>
							</li>
							<li>
								<a href="login.html">
								<i class="icon-key"></i> Log Out </a>
							</li>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
			</div>
			<!-- END TOP NAVIGATION MENU -->
		</div>
		<!-- END PAGE TOP -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar md-shadow-z-2-i  navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
			<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
			<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
			<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
			<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
			<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
			<ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<li class="start ">
					<a href="index.html">
					<i class="icon-home"></i>
					<span class="title">Dashboard</span>
					</a>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-basket"></i>
					<span class="title">eCommerce</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="ecommerce_index.html">
							<i class="icon-home"></i>
							Dashboard</a>
						</li>
						<li>
							<a href="ecommerce_orders.html">
							<i class="icon-basket"></i>
							Orders</a>
						</li>
						<li>
							<a href="ecommerce_orders_view.html">
							<i class="icon-tag"></i>
							Order View</a>
						</li>
						<li>
							<a href="ecommerce_products.html">
							<i class="icon-handbag"></i>
							Products</a>
						</li>
						<li>
							<a href="ecommerce_products_edit.html">
							<i class="icon-pencil"></i>
							Product Edit</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-rocket"></i>
					<span class="title">Page Layouts</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="layout_sidebar_reversed.html">
							<span class="badge badge-warning">new</span>Right Sidebar Page</a>
						</li>
						<li>
							<a href="layout_sidebar_fixed.html">
							Sidebar Fixed Page</a>
						</li>
						<li>
							<a href="layout_sidebar_closed.html">
							Sidebar Closed Page</a>
						</li>
						<li>
							<a href="layout_blank_page.html">
							Blank Page</a>
						</li>
						<li>
							<a href="layout_boxed_page.html">
							Boxed Page</a>
						</li>
						<li>
							<a href="layout_language_bar.html">
							Language Switch Bar</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-diamond"></i>
					<span class="title">UI Features</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="ui_general.html">
							General Components</a>
						</li>
						<li>
							<a href="ui_buttons.html">
							Buttons</a>
						</li>
						<li>
							<a href="ui_icons.html">
							<span class="badge badge-danger">new</span>Font Icons</a>
						</li>
						<li>
							<a href="ui_colors.html">
							Flat UI Colors</a>
						</li>
						<li>
							<a href="ui_typography.html">
							Typography</a>
						</li>
						<li>
							<a href="ui_tabs_accordions_navs.html">
							Tabs, Accordions & Navs</a>
						</li>
						<li>
							<a href="ui_tree.html">
							<span class="badge badge-danger">new</span>Tree View</a>
						</li>
						<li>
							<a href="ui_page_progress_style_1.html">
							<span class="badge badge-warning">new</span>Page Progress Bar - Style 1</a>
						</li>
						<li>
							<a href="ui_blockui.html">
							Block UI</a>
						</li>
						<li>
							<a href="ui_bootstrap_growl.html">
							<span class="badge badge-roundless badge-warning">new</span>Bootstrap Growl Notifications</a>
						</li>
						<li>
							<a href="ui_notific8.html">
							Notific8 Notifications</a>
						</li>
						<li>
							<a href="ui_toastr.html">
							Toastr Notifications</a>
						</li>
						<li>
							<a href="ui_alert_dialog_api.html">
							<span class="badge badge-danger">new</span>Alerts & Dialogs API</a>
						</li>
						<li>
							<a href="ui_session_timeout.html">
							Session Timeout</a>
						</li>
						<li>
							<a href="ui_idle_timeout.html">
							User Idle Timeout</a>
						</li>
						<li>
							<a href="ui_modals.html">
							Modals</a>
						</li>
						<li>
							<a href="ui_extended_modals.html">
							Extended Modals</a>
						</li>
						<li>
							<a href="ui_tiles.html">
							Tiles</a>
						</li>
						<li>
							<a href="ui_datepaginator.html">
							<span class="badge badge-success">new</span>Date Paginator</a>
						</li>
						<li>
							<a href="ui_nestable.html">
							Nestable List</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-puzzle"></i>
					<span class="title">UI Components</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="components_pickers.html">
							Date & Time Pickers</a>
						</li>
						<li>
							<a href="components_context_menu.html">
							Context Menu</a>
						</li>
						<li>
							<a href="components_dropdowns.html">
							Custom Dropdowns</a>
						</li>
						<li>
							<a href="components_form_tools.html">
							Form Widgets & Tools</a>
						</li>
						<li>
							<a href="components_form_tools2.html">
							Form Widgets & Tools 2</a>
						</li>
						<li>
							<a href="components_editors.html">
							Markdown & WYSIWYG Editors</a>
						</li>
						<li>
							<a href="components_ion_sliders.html">
							Ion Range Sliders</a>
						</li>
						<li>
							<a href="components_noui_sliders.html">
							NoUI Range Sliders</a>
						</li>
						<li>
							<a href="components_jqueryui_sliders.html">
							jQuery UI Sliders</a>
						</li>
						<li>
							<a href="components_knob_dials.html">
							Knob Circle Dials</a>
						</li>
					</ul>
				</li>
				<!-- BEGIN ANGULARJS LINK -->
				<li class="tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="AngularJS version demo">
					<a href="angularjs" target="_blank">
					<i class="icon-paper-plane"></i>
					<span class="title">
					AngularJS Version </span>
					</a>
				</li>
				<!-- END ANGULARJS LINK -->
				<li class="active open">
					<a href="javascript:;">
					<i class="icon-settings"></i>
					<span class="title">Form Stuff</span>
					<span class="arrow open"></span>
					</a>
					<ul class="sub-menu">
						<li class="active">
							<a href="form_controls_md.html">
							<span class="badge badge-roundless badge-danger">new</span>Material Design<br>
							Form Controls</a>
						</li>
						<li>
							<a href="form_controls.html">
							Bootstrap<br>
							Form Controls</a>
						</li>
						<li>
							<a href="form_layouts.html">
							Form Layouts</a>
						</li>
						<li>
							<a href="form_editable.html">
							<span class="badge badge-warning">new</span>Form X-editable</a>
						</li>
						<li>
							<a href="form_wizard.html">
							Form Wizard</a>
						</li>
						<li>
							<a href="form_validation.html">
							Form Validation</a>
						</li>
						<li>
							<a href="form_image_crop.html">
							<span class="badge badge-danger">new</span>Image Cropping</a>
						</li>
						<li>
							<a href="form_fileupload.html">
							Multiple File Upload</a>
						</li>
						<li>
							<a href="form_dropzone.html">
							Dropzone File Upload</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-briefcase"></i>
					<span class="title">Data Tables</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="table_basic.html">
							Basic Datatables</a>
						</li>
						<li>
							<a href="table_tree.html">
							Tree Datatables</a>
						</li>
						<li>
							<a href="table_responsive.html">
							Responsive Datatables</a>
						</li>
						<li>
							<a href="table_managed.html">
							Managed Datatables</a>
						</li>
						<li>
							<a href="table_editable.html">
							Editable Datatables</a>
						</li>
						<li>
							<a href="table_advanced.html">
							Advanced Datatables</a>
						</li>
						<li>
							<a href="table_ajax.html">
							Ajax Datatables</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-wallet"></i>
					<span class="title">Portlets</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="portlet_general.html">
							General Portlets</a>
						</li>
						<li>
							<a href="portlet_general2.html">
							<span class="badge badge-danger">new</span>New Portlets #1</a>
						</li>
						<li>
							<a href="portlet_general3.html">
							<span class="badge badge-danger">new</span>New Portlets #2</a>
						</li>
						<li>
							<a href="portlet_ajax.html">
							Ajax Portlets</a>
						</li>
						<li>
							<a href="portlet_draggable.html">
							Draggable Portlets</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-bar-chart"></i>
					<span class="title">Charts</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="charts_amcharts.html">
							Amchart</a>
						</li>
						<li>
							<a href="charts_flotcharts.html">
							Flotchart</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-docs"></i>
					<span class="title">Pages</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="page_timeline.html">
							<i class="icon-paper-plane"></i>
							<span class="badge badge-warning">2</span>New Timeline</a>
						</li>
						<li>
							<a href="extra_profile.html">
							<i class="icon-user-following"></i>
							<span class="badge badge-success badge-roundless">new</span>New User Profile</a>
						</li>
						<li>
							<a href="page_todo.html">
							<i class="icon-hourglass"></i>
							<span class="badge badge-danger">4</span>Todo</a>
						</li>
						<li>
							<a href="inbox.html">
							<i class="icon-envelope"></i>
							<span class="badge badge-danger">4</span>Inbox</a>
						</li>
						<li>
							<a href="extra_faq.html">
							<i class="icon-info"></i>
							FAQ</a>
						</li>
						<li>
							<a href="page_portfolio.html">
							<i class="icon-feed"></i>
							Portfolio</a>
						</li>
						<li>
							<a href="page_timeline.html">
							<i class="icon-clock"></i>
							<span class="badge badge-info">4</span>Timeline</a>
						</li>
						<li>
							<a href="page_coming_soon.html">
							<i class="icon-flag"></i>
							Coming Soon</a>
						</li>
						<li>
							<a href="page_calendar.html">
							<i class="icon-calendar"></i>
							<span class="badge badge-danger">14</span>Calendar</a>
						</li>
						<li>
							<a href="extra_invoice.html">
							<i class="icon-flag"></i>
							Invoice</a>
						</li>
						<li>
							<a href="page_blog.html">
							<i class="icon-speech"></i>
							Blog</a>
						</li>
						<li>
							<a href="page_blog_item.html">
							<i class="icon-link"></i>
							Blog Post</a>
						</li>
						<li>
							<a href="page_news.html">
							<i class="icon-eye"></i>
							<span class="badge badge-success">9</span>News</a>
						</li>
						<li>
							<a href="page_news_item.html">
							<i class="icon-bell"></i>
							News View</a>
						</li>
						<li>
							<a href="page_timeline_old.html">
							<i class="icon-paper-plane"></i>
							<span class="badge badge-warning">2</span>Old Timeline</a>
						</li>
						<li>
							<a href="extra_profile_old.html">
							<i class="icon-user"></i>
							Old User Profile</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-present"></i>
					<span class="title">Extra</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="page_about.html">
							About Us</a>
						</li>
						<li>
							<a href="page_contact.html">
							Contact Us</a>
						</li>
						<li>
							<a href="extra_search.html">
							Search Results</a>
						</li>
						<li>
							<a href="extra_pricing_table.html">
							Pricing Tables</a>
						</li>
						<li>
							<a href="extra_404_option1.html">
							404 Page Option 1</a>
						</li>
						<li>
							<a href="extra_404_option2.html">
							404 Page Option 2</a>
						</li>
						<li>
							<a href="extra_404_option3.html">
							404 Page Option 3</a>
						</li>
						<li>
							<a href="extra_500_option1.html">
							500 Page Option 1</a>
						</li>
						<li>
							<a href="extra_500_option2.html">
							500 Page Option 2</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-folder"></i>
					<span class="title">Multi Level Menu</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
							<i class="icon-settings"></i> Item 1 <span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="javascript:;">
									<i class="icon-user"></i>
									Sample Link 1 <span class="arrow"></span>
									</a>
									<ul class="sub-menu">
										<li>
											<a href="#"><i class="icon-power"></i> Sample Link 1</a>
										</li>
										<li>
											<a href="#"><i class="icon-paper-plane"></i> Sample Link 1</a>
										</li>
										<li>
											<a href="#"><i class="icon-star"></i> Sample Link 1</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-camera"></i> Sample Link 1</a>
								</li>
								<li>
									<a href="#"><i class="icon-link"></i> Sample Link 2</a>
								</li>
								<li>
									<a href="#"><i class="icon-pointer"></i> Sample Link 3</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
							<i class="icon-globe"></i> Item 2 <span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="#"><i class="icon-tag"></i> Sample Link 1</a>
								</li>
								<li>
									<a href="#"><i class="icon-pencil"></i> Sample Link 1</a>
								</li>
								<li>
									<a href="#"><i class="icon-graph"></i> Sample Link 1</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#">
							<i class="icon-bar-chart"></i>
							Item 3 </a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-user"></i>
					<span class="title">Login Options</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="login.html">
							Login Form 1</a>
						</li>
						<li>
							<a href="login_2.html">
							Login Form 2</a>
						</li>
						<li>
							<a href="login_3.html">
							Login Form 3</a>
						</li>
						<li>
							<a href="login_soft.html">
							Login Form 4</a>
						</li>
						<li>
							<a href="extra_lock.html">
							Lock Screen 1</a>
						</li>
						<li>
							<a href="extra_lock2.html">
							Lock Screen 2</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-envelope-open"></i>
					<span class="title">Email Templates</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="email_template1.html">
							New Email Template 1</a>
						</li>
						<li>
							<a href="email_template2.html">
							New Email Template 2</a>
						</li>
						<li>
							<a href="email_template3.html">
							New Email Template 3</a>
						</li>
						<li>
							<a href="email_template4.html">
							New Email Template 4</a>
						</li>
						<li>
							<a href="email_newsletter.html">
							Old Email Template 1</a>
						</li>
						<li>
							<a href="email_system.html">
							Old Email Template 2</a>
						</li>
					</ul>
				</li>
				<li class="last ">
					<a href="javascript:;">
					<i class="icon-pointer"></i>
					<span class="title">Maps</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="maps_google.html">
							Google Maps</a>
						</li>
						<li>
							<a href="maps_vector.html">
							Vector Maps</a>
						</li>
					</ul>
				</li>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->
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
			<!-- BEGIN PAGE HEADER-->
			<!-- BEGIN PAGE HEAD -->
			<div class="page-head">
				<!-- BEGIN PAGE TITLE -->
				<div class="page-title">
					<h1>Material Design Form Controls <small>material design form inputs, checkboxes and radios</small></h1>
				</div>
				<!-- END PAGE TITLE -->
				<!-- BEGIN PAGE TOOLBAR -->
				<div class="page-toolbar">
					<!-- BEGIN THEME PANEL -->
					<div class="btn-group btn-theme-panel">
						<a href="javascript:;" class="btn dropdown-toggle" data-toggle="dropdown">
						<i class="icon-settings"></i>
						</a>
						<div class="dropdown-menu theme-panel pull-right dropdown-custom hold-on-click">
							<div class="row">
								<div class="col-md-4 col-sm-4 col-xs-12">
									<h3>THEME</h3>
									<ul class="theme-colors">
										<li class="theme-color theme-color-default active" data-theme="default">
											<span class="theme-color-view"></span>
											<span class="theme-color-name">Dark Header</span>
										</li>
										<li class="theme-color theme-color-light" data-theme="light">
											<span class="theme-color-view"></span>
											<span class="theme-color-name">Light Header</span>
										</li>
									</ul>
								</div>
								<div class="col-md-8 col-sm-8 col-xs-12 seperator">
									<h3>LAYOUT</h3>
									<ul class="theme-settings">
										<li>
											 Theme Style
											<select class="layout-style-option form-control input-small input-sm">
												<option value="square" selected="selected">Square corners</option>
												<option value="rounded">Rounded corners</option>
											</select>
										</li>
										<li>
											 Layout
											<select class="layout-option form-control input-small input-sm">
												<option value="fluid" selected="selected">Fluid</option>
												<option value="boxed">Boxed</option>
											</select>
										</li>
										<li>
											 Header
											<select class="page-header-option form-control input-small input-sm">
												<option value="fixed" selected="selected">Fixed</option>
												<option value="default">Default</option>
											</select>
										</li>
										<li>
											 Top Dropdowns
											<select class="page-header-top-dropdown-style-option form-control input-small input-sm">
												<option value="light">Light</option>
												<option value="dark" selected="selected">Dark</option>
											</select>
										</li>
										<li>
											 Sidebar Mode
											<select class="sidebar-option form-control input-small input-sm">
												<option value="fixed">Fixed</option>
												<option value="default" selected="selected">Default</option>
											</select>
										</li>
										<li>
											 Sidebar Menu
											<select class="sidebar-menu-option form-control input-small input-sm">
												<option value="accordion" selected="selected">Accordion</option>
												<option value="hover">Hover</option>
											</select>
										</li>
										<li>
											 Sidebar Position
											<select class="sidebar-pos-option form-control input-small input-sm">
												<option value="left" selected="selected">Left</option>
												<option value="right">Right</option>
											</select>
										</li>
										<li>
											 Footer
											<select class="page-footer-option form-control input-small input-sm">
												<option value="fixed">Fixed</option>
												<option value="default" selected="selected">Default</option>
											</select>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- END THEME PANEL -->
				</div>
				<!-- END PAGE TOOLBAR -->
			</div>
			<!-- END PAGE HEAD -->
			<!-- BEGIN PAGE BREADCRUMB -->
			<ul class="page-breadcrumb breadcrumb">
				<li>
					<a href="index.html">Home</a>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="#">Form Stuff</a>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="#">Material Design Form Controls</a>
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-6 ">
					<!-- BEGIN SAMPLE FORM PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption font-red-sunglo">
								<i class="icon-settings font-red-sunglo"></i>
								<span class="caption-subject bold uppercase"> Line Inputs</span>
							</div>
							<div class="actions">
								<div class="btn-group">
									<a class="btn btn-sm green dropdown-toggle" href="javascript:;" data-toggle="dropdown">
									Actions <i class="fa fa-angle-down"></i>
									</a>
									<ul class="dropdown-menu pull-right">
										<li>
											<a href="javascript:;">
											<i class="fa fa-pencil"></i> Edit </a>
										</li>
										<li>
											<a href="javascript:;">
											<i class="fa fa-trash-o"></i> Delete </a>
										</li>
										<li>
											<a href="javascript:;">
											<i class="fa fa-ban"></i> Ban </a>
										</li>
										<li class="divider">
										</li>
										<li>
											<a href="javascript:;">
											<i class="i"></i> Make admin </a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="portlet-body form">
							<form role="form">
								<div class="form-body">
									<div class="form-group form-md-line-input">
										<input type="text" class="form-control" id="form_control_1" placeholder="Enter your name">
										<label for="form_control_1">Regular input</label>
										<span class="help-block">Some help goes here...</span>
									</div>
									<div class="form-group form-md-line-input">
										<input type="text" class="form-control" id="form_control_1" placeholder="Enter your email">
										<label for="form_control_1">Input with help</label>
										<span class="help-block">Some help goes here...</span>
									</div>
									<div class="form-group form-md-line-input has-success">
										<input type="text" class="form-control" id="form_control_1" placeholder="Success state">
										<label for="form_control_1">Success input</label>
									</div>
									<div class="form-group form-md-line-input has-warning">
										<input type="text" class="form-control" id="form_control_1" placeholder="Warning state">
										<label for="form_control_1">Warning input</label>
									</div>
									<div class="form-group form-md-line-input has-error">
										<input type="text" class="form-control" id="form_control_1" placeholder="Error state">
										<label for="form_control_1">Error input</label>
									</div>
									<div class="form-group form-md-line-input has-info">
										<input type="text" class="form-control" id="form_control_1" placeholder="Info state">
										<label for="form_control_1">Info input</label>
									</div>
									<div class="form-group form-md-line-input has-info">
										<select class="form-control" id="form_control_1">
											<option value=""></option>
											<option value="">Option 1</option>
											<option value="">Option 2</option>
											<option value="">Option 3</option>
											<option value="">Option 4</option>
										</select>
										<label for="form_control_1">Dropdown sample</label>
									</div>
									<div class="form-group form-md-line-input">
										<textarea class="form-control" rows="3" placeholder="Enter more text"></textarea>
										<label for="form_control_1">Textarea input</label>
									</div>
									<div class="form-group form-md-line-input has-error">
										<input type="text" class="form-control" disabled id="form_control_1" placeholder="Disable">
										<label for="form_control_1">Disabled</label>
									</div>
									<div class="form-group form-md-line-input has-error">
										<input type="text" class="form-control" readonly value="You can't edit this" id="form_control_1">
										<label for="form_control_1">Readonly</label>
									</div>
									<div class="form-group form-md-line-input">
										<div class="form-control form-control-static">
											email@example.com
										</div>
										<label for="form_control_1">Static Control</label>
									</div>
									<div class="form-group form-md-line-input has-info">
										<input type="text" class="form-control input-sm" id="form_control_1" placeholder=".input-sm">
										<label for="form_control_1">Small input</label>
									</div>
									<div class="form-group form-md-line-input has-info">
										<input type="text" class="form-control input-lg" id="form_control_1" placeholder=".input-lg">
										<label for="form_control_1">Large input</label>
									</div>
								</div>
								<div class="form-actions noborder">
									<button type="button" class="btn blue">Submit</button>
									<button type="button" class="btn default">Cancel</button>
								</div>
							</form>
						</div>
					</div>
					<!-- END SAMPLE FORM PORTLET-->
					<!-- BEGIN SAMPLE FORM PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption font-red-sunglo">
								<span class="caption-subject bold uppercase"> Input Groups & Icons</span>
							</div>
							<div class="actions">
								<a class="btn btn-circle btn-icon-only blue" href="javascript:;">
								<i class="icon-cloud-upload"></i>
								</a>
								<a class="btn btn-circle btn-icon-only green" href="javascript:;">
								<i class="icon-wrench"></i>
								</a>
								<a class="btn btn-circle btn-icon-only red" href="javascript:;">
								<i class="icon-trash"></i>
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<form role="form">
								<div class="form-body">
									<div class="form-group form-md-line-input has-success">
										<div class="input-icon">
											<input type="text" class="form-control" placeholder="Left icon">
											<label for="form_control_1">Regular input</label>
											<span class="help-block">Some help goes here...</span>
											<i class="fa fa-bell-o"></i>
										</div>
									</div>
									<div class="form-group form-md-line-input has-success">
										<div class="input-icon right">
											<input type="text" class="form-control" placeholder="Right icon">
											<label for="form_control_1">Input With Hint</label>
											<span class="help-block">Some help goes here...</span>
											<i class="icon-user"></i>
										</div>
									</div>
									<div class="form-group form-md-line-input has-info">
										<div class="input-group">
											<span class="input-group-addon">
											<i class="fa fa-envelope"></i>
											</span>
											<input type="text" class="form-control" placeholder="Email Address">
											<label for="form_control_1">Input Group</label>
										</div>
									</div>
									<div class="form-group form-md-line-input has-error">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Email Address">
											<label for="form_control_1">Input Group</label>
											<span class="input-group-addon">
											<i class="fa fa-envelope"></i>
											</span>
										</div>
									</div>
									<div class="form-group form-md-line-input has-warning">
										<div class="input-group">
											<span class="input-group-addon">$</span>
											<input type="text" class="form-control">
											<span class="input-group-addon">.00</span>
											<label for="form_control_1">Input Group</label>
										</div>
									</div>
									<div class="form-group form-md-line-input has-warning">
										<div class="input-group">
											<span class="input-group-btn btn-left">
											<button class="btn blue-madison" type="button">Go!</button>
											</span>
											<div class="input-group-control">
												<input type="text" class="form-control edited" placeholder="Placeholder">
												<label for="form_control_1">Input Group</label>
											</div>
										</div>
									</div>
									<div class="form-group form-md-line-input has-error">
										<div class="input-group">
											<div class="input-group-control">
												<input type="text" class="form-control" placeholder="Placeholder">
												<label for="form_control_1">Input Group</label>
											</div>
											<span class="input-group-btn btn-right">
											<button type="button" class="btn green-haze dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											Action <i class="fa fa-angle-down"></i>
											</button>
											<ul class="dropdown-menu pull-right" role="menu">
												<li>
													<a href="javascript:;">Action</a>
												</li>
												<li>
													<a href="javascript:;">Another action</a>
												</li>
												<li>
													<a href="javascript:;">Something else here</a>
												</li>
												<li class="divider">
												</li>
												<li>
													<a href="javascript:;">Separated link</a>
												</li>
											</ul>
											</span>
										</div>
									</div>
									<div class="form-group form-md-line-input has-info">
										<div class="input-group">
											<span class="input-group-btn btn-left">
											<button class="btn red-intense" type="button">Go!</button>
											</span>
											<div class="input-group-control">
												<input type="text" class="form-control" placeholder="Input group">
												<label for="form_control_1">Input Group</label>
											</div>
											<span class="input-group-btn btn-right">
											<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											Action <i class="fa fa-angle-down"></i>
											</button>
											<ul class="dropdown-menu pull-right" role="menu">
												<li>
													<a href="javascript:;">Action</a>
												</li>
												<li>
													<a href="javascript:;">Another action</a>
												</li>
												<li>
													<a href="javascript:;">Something else here</a>
												</li>
												<li class="divider">
												</li>
												<li>
													<a href="javascript:;">Separated link</a>
												</li>
											</ul>
											</span>
										</div>
									</div>
									<div class="form-group form-md-line-input has-info">
										<div class="input-group input-group-sm">
											<span class="input-group-btn btn-left">
											<button class="btn red-intense" type="button">Go!</button>
											</span>
											<div class="input-group-control">
												<input type="text" class="form-control input-sm" placeholder=".input-sm">
												<label for="form_control_1">Small Input Group</label>
											</div>
											<span class="input-group-btn btn-right">
											<button class="btn green-haze" type="button">Go!</button>
											</span>
										</div>
									</div>
									<div class="form-group form-md-line-input has-info">
										<div class="input-group input-group-lg">
											<span class="input-group-btn btn-left">
											<button class="btn red-intense" type="button">Go!</button>
											</span>
											<div class="input-group-control">
												<input type="text" class="form-control input-lg" placeholder=".input-lg">
												<label for="form_control_1">Large Input Group</label>
											</div>
											<span class="input-group-btn btn-right">
											<button class="btn green-haze" type="button">Go!</button>
											</span>
										</div>
									</div>
								</div>
								<div class="form-actions noborder">
									<button type="button" class="btn blue">Submit</button>
									<button type="button" class="btn default">Cancel</button>
								</div>
							</form>
						</div>
					</div>
					<!-- END SAMPLE FORM PORTLET-->
					<!-- BEGIN SAMPLE FORM PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption font-red-sunglo">
								<i class="icon-check font-red-sunglo"></i>
								<span class="caption-subject bold uppercase"> Checkboxes</span>
							</div>
							<div class="actions">
								<div class="btn-group">
									<a class="btn btn-sm red dropdown-toggle" href="javascript:;" data-toggle="dropdown">
									Settings <i class="fa fa-angle-down"></i>
									</a>
									<ul class="dropdown-menu pull-right">
										<li>
											<a href="javascript:;">
											<i class="fa fa-pencil"></i> Edit </a>
										</li>
										<li>
											<a href="javascript:;">
											<i class="fa fa-trash-o"></i> Delete </a>
										</li>
										<li>
											<a href="javascript:;">
											<i class="fa fa-ban"></i> Ban </a>
										</li>
										<li class="divider">
										</li>
										<li>
											<a href="javascript:;">
											<i class="i"></i> Make admin </a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="portlet-body form">
							<form role="form">
								<div class="form-group form-md-checkboxes">
									<label>Checkboxes</label>
									<div class="md-checkbox-list">
										<div class="md-checkbox">
											<input type="checkbox" id="checkbox1" class="md-check">
											<label for="checkbox1">
											<span></span>
											<span class="check"></span>
											<span class="box"></span>
											Option 1 </label>
										</div>
										<div class="md-checkbox">
											<input type="checkbox" id="checkbox2" class="md-check" checked>
											<label for="checkbox2">
											<span></span>
											<span class="check"></span>
											<span class="box"></span>
											Option 2 </label>
										</div>
										<div class="md-checkbox">
											<input type="checkbox" id="checkbox3" class="md-check">
											<label for="checkbox3">
											<span></span>
											<span class="check"></span>
											<span class="box"></span>
											Option 3 </label>
										</div>
										<div class="md-checkbox">
											<input type="checkbox" id="checkbox4" disabled class="md-check">
											<label for="checkbox4">
											<span></span>
											<span class="check"></span>
											<span class="box"></span>
											Disabled </label>
										</div>
									</div>
								</div>
								<div class="form-group form-md-checkboxes">
									<label>Inline Checkboxes</label>
									<div class="md-checkbox-inline">
										<div class="md-checkbox">
											<input type="checkbox" id="checkbox6" class="md-check">
											<label for="checkbox6">
											<span></span>
											<span class="check"></span>
											<span class="box"></span>
											Option 1 </label>
										</div>
										<div class="md-checkbox">
											<input type="checkbox" id="checkbox7" class="md-check" checked>
											<label for="checkbox7">
											<span></span>
											<span class="check"></span>
											<span class="box"></span>
											Option 2 </label>
										</div>
										<div class="md-checkbox">
											<input type="checkbox" id="checkbox8" class="md-check">
											<label for="checkbox8">
											<span></span>
											<span class="check"></span>
											<span class="box"></span>
											Option 3 </label>
										</div>
									</div>
								</div>
								<div class="form-group form-md-checkboxes">
									<label>Checkboxes</label>
									<div class="md-checkbox-list">
										<div class="md-checkbox has-success">
											<input type="checkbox" id="checkbox9" class="md-check">
											<label for="checkbox9">
											<span></span>
											<span class="check"></span>
											<span class="box"></span>
											Option 1 </label>
										</div>
										<div class="md-checkbox has-error">
											<input type="checkbox" id="checkbox10" class="md-check" checked>
											<label for="checkbox10">
											<span></span>
											<span class="check"></span>
											<span class="box"></span>
											Option 2 </label>
										</div>
										<div class="md-checkbox has-warning">
											<input type="checkbox" id="checkbox11" class="md-check">
											<label for="checkbox11">
											<span></span>
											<span class="check"></span>
											<span class="box"></span>
											Option 3 </label>
										</div>
										<div class="md-checkbox has-info">
											<input type="checkbox" id="checkbox12" disabled class="md-check">
											<label for="checkbox12">
											<span></span>
											<span class="check"></span>
											<span class="box"></span>
											Disabled </label>
										</div>
									</div>
								</div>
								<div class="form-group form-md-checkboxes">
									<label>Inline Checkboxes</label>
									<div class="md-checkbox-inline">
										<div class="md-checkbox has-success">
											<input type="checkbox" id="checkbox14" class="md-check">
											<label for="checkbox14">
											<span></span>
											<span class="check"></span>
											<span class="box"></span>
											Option 1 </label>
										</div>
										<div class="md-checkbox has-error">
											<input type="checkbox" id="checkbox15" class="md-check" checked>
											<label for="checkbox15">
											<span></span>
											<span class="check"></span>
											<span class="box"></span>
											Option 2 </label>
										</div>
										<div class="md-checkbox has-info">
											<input type="checkbox" id="checkbox16" class="md-check">
											<label for="checkbox16">
											<span></span>
											<span class="check"></span>
											<span class="box"></span>
											Option 3 </label>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<!-- END SAMPLE FORM PORTLET-->
				</div>
				<div class="col-md-6 ">
					<!-- BEGIN SAMPLE FORM PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption font-green">
								<i class="icon-pin font-green"></i>
								<span class="caption-subject bold uppercase"> Floating Labels</span>
							</div>
							<div class="actions">
								<div class="btn-group">
									<a class="btn btn-sm default dropdown-toggle" href="javascript:;" data-toggle="dropdown">
									Settings <i class="fa fa-angle-down"></i>
									</a>
									<ul class="dropdown-menu pull-right">
										<li>
											<a href="javascript:;">
											<i class="fa fa-pencil"></i> Edit </a>
										</li>
										<li>
											<a href="javascript:;">
											<i class="fa fa-trash-o"></i> Delete </a>
										</li>
										<li>
											<a href="javascript:;">
											<i class="fa fa-ban"></i> Ban </a>
										</li>
										<li class="divider">
										</li>
										<li>
											<a href="javascript:;">
											<i class="i"></i> Make admin </a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="portlet-body form">
							<form role="form">
								<div class="form-body">
									<div class="form-group form-md-line-input form-md-floating-label">
										<input type="text" class="form-control" id="form_control_1">
										<label for="form_control_1">Regular input</label>
										<span class="help-block">Some help goes here...</span>
									</div>
									<div class="form-group form-md-line-input form-md-floating-label">
										<input type="text" class="form-control" id="form_control_1">
										<label for="form_control_1">Input with help</label>
										<span class="help-block">Some help goes here...</span>
									</div>
									<div class="form-group form-md-line-input form-md-floating-label has-success">
										<input type="text" class="form-control" id="form_control_1">
										<label for="form_control_1">Success input</label>
									</div>
									<div class="form-group form-md-line-input form-md-floating-label has-warning">
										<input type="text" class="form-control" id="form_control_1">
										<label for="form_control_1">Warning input</label>
									</div>
									<div class="form-group form-md-line-input form-md-floating-label has-error">
										<input type="text" class="form-control" id="form_control_1">
										<label for="form_control_1">Error input</label>
									</div>
									<div class="form-group form-md-line-input form-md-floating-label has-info">
										<input type="text" class="form-control" id="form_control_1">
										<label for="form_control_1">Info input</label>
									</div>
									<div class="form-group form-md-line-input form-md-floating-label has-info">
										<select class="form-control" id="form_control_1">
											<option value=""></option>
											<option value="">Option 1</option>
											<option value="">Option 2</option>
											<option value="">Option 3</option>
											<option value="">Option 4</option>
										</select>
										<label for="form_control_1">Dropdown sample</label>
									</div>
									<div class="form-group form-md-line-input form-md-floating-label">
										<textarea class="form-control" rows="3"></textarea>
										<label for="form_control_1">Textarea input</label>
									</div>
									<div class="form-group form-md-line-input form-md-floating-label has-error">
										<input type="text" class="form-control" disabled id="form_control_1">
										<label for="form_control_1">Disabled</label>
									</div>
									<div class="form-group form-md-line-input form-md-floating-label has-error">
										<input type="text" class="form-control" readonly value="You can't edit this" id="form_control_1">
										<label for="form_control_1">Readonly</label>
									</div>
									<div class="form-group form-md-line-input form-md-floating-label">
										<div class="form-control form-control-static">
											email@example.com
										</div>
										<label for="form_control_1">Static Control</label>
									</div>
									<div class="form-group form-md-line-input form-md-floating-label has-info">
										<input type="text" class="form-control input-sm" id="form_control_1">
										<label for="form_control_1">Small input</label>
									</div>
									<div class="form-group form-md-line-input form-md-floating-label has-info">
										<input type="text" class="form-control input-lg" id="form_control_1">
										<label for="form_control_1">Large input</label>
									</div>
								</div>
								<div class="form-actions noborder">
									<button type="button" class="btn blue">Submit</button>
									<button type="button" class="btn default">Cancel</button>
								</div>
							</form>
						</div>
					</div>
					<!-- END SAMPLE FORM PORTLET-->
					<!-- BEGIN SAMPLE FORM PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption font-red-sunglo">
								<span class="caption-subject bold uppercase">Input Groups & Icons</span>
							</div>
							<div class="actions">
								<a class="btn btn-circle btn-icon-only blue" href="javascript:;">
								<i class="icon-cloud-upload"></i>
								</a>
								<a class="btn btn-circle btn-icon-only green" href="javascript:;">
								<i class="icon-wrench"></i>
								</a>
								<a class="btn btn-circle btn-icon-only red" href="javascript:;">
								<i class="icon-trash"></i>
								</a>
								<a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title="">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<form role="form">
								<div class="form-body">
									<div class="form-group form-md-line-input has-success form-md-floating-label">
										<div class="input-icon">
											<input type="text" class="form-control">
											<label for="form_control_1">Regular input</label>
											<span class="help-block">Some help goes here...</span>
											<i class="fa fa-bell-o"></i>
										</div>
									</div>
									<div class="form-group form-md-line-input has-success form-md-floating-label">
										<div class="input-icon right">
											<input type="text" class="form-control">
											<label for="form_control_1">Regular input</label>
											<span class="help-block">Some help goes here...</span>
											<i class="icon-user"></i>
										</div>
									</div>
									<div class="form-group form-md-line-input has-info form-md-floating-label">
										<div class="input-group left-addon">
											<span class="input-group-addon">
											<i class="fa fa-envelope"></i>
											</span>
											<input type="text" class="form-control">
											<label for="form_control_1">Input Group</label>
										</div>
									</div>
									<div class="form-group form-md-line-input has-error form-md-floating-label">
										<div class="input-group right-addon">
											<input type="text" class="form-control">
											<label for="form_control_1">Input Group</label>
											<span class="input-group-addon">
											<i class="fa fa-envelope"></i>
											</span>
										</div>
									</div>
									<div class="form-group form-md-line-input has-warning form-md-floating-label">
										<div class="input-group left-addon right-addon">
											<span class="input-group-addon">$</span>
											<input type="text" class="form-control">
											<span class="input-group-addon">.00</span>
											<label for="form_control_1">Input Group</label>
										</div>
									</div>
									<div class="form-group form-md-line-input has-warning form-md-floating-label">
										<div class="input-group">
											<span class="input-group-btn btn-left">
											<button class="btn blue-madison" type="button">Go!</button>
											</span>
											<div class="input-group-control">
												<input type="text" class="form-control edited">
												<label for="form_control_1">Input Group</label>
											</div>
										</div>
									</div>
									<div class="form-group form-md-line-input has-error form-md-floating-label">
										<div class="input-group">
											<div class="input-group-control">
												<input type="text" class="form-control">
												<label for="form_control_1">Input Group</label>
											</div>
											<span class="input-group-btn btn-right">
											<button type="button" class="btn green-haze dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											Action <i class="fa fa-angle-down"></i>
											</button>
											<ul class="dropdown-menu pull-right" role="menu">
												<li>
													<a href="javascript:;">Action</a>
												</li>
												<li>
													<a href="javascript:;">Another action</a>
												</li>
												<li>
													<a href="javascript:;">Something else here</a>
												</li>
												<li class="divider">
												</li>
												<li>
													<a href="javascript:;">Separated link</a>
												</li>
											</ul>
											</span>
										</div>
									</div>
									<div class="form-group form-md-line-input has-info form-md-floating-label">
										<div class="input-group">
											<span class="input-group-btn btn-left">
											<button class="btn red-intense" type="button">Go!</button>
											</span>
											<div class="input-group-control">
												<input type="text" class="form-control">
												<label for="form_control_1">Input Group</label>
											</div>
											<span class="input-group-btn btn-right">
											<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											Action <i class="fa fa-angle-down"></i>
											</button>
											<ul class="dropdown-menu pull-right" role="menu">
												<li>
													<a href="javascript:;">Action</a>
												</li>
												<li>
													<a href="javascript:;">Another action</a>
												</li>
												<li>
													<a href="javascript:;">Something else here</a>
												</li>
												<li class="divider">
												</li>
												<li>
													<a href="javascript:;">Separated link</a>
												</li>
											</ul>
											</span>
										</div>
									</div>
									<div class="form-group form-md-line-input has-info form-md-floating-label">
										<div class="input-group input-group-sm">
											<span class="input-group-btn btn-left">
											<button class="btn red-intense" type="button">Go!</button>
											</span>
											<div class="input-group-control">
												<input type="text" class="form-control input-sm">
												<label for="form_control_1">Input Group</label>
											</div>
											<span class="input-group-btn btn-right">
											<button class="btn green-haze" type="button">Go!</button>
											</span>
										</div>
									</div>
									<div class="form-group form-md-line-input has-info form-md-floating-label">
										<div class="input-group input-group-lg">
											<span class="input-group-btn btn-left">
											<button class="btn red-intense" type="button">Go!</button>
											</span>
											<div class="input-group-control">
												<input type="text" class="form-control input-lg">
												<label for="form_control_1">Input Group</label>
											</div>
											<span class="input-group-btn btn-right">
											<button class="btn green-haze" type="button">Go!</button>
											</span>
										</div>
									</div>
								</div>
								<div class="form-actions noborder">
									<button type="button" class="btn blue">Submit</button>
									<button type="button" class="btn default">Cancel</button>
								</div>
							</form>
						</div>
					</div>
					<!-- END SAMPLE FORM PORTLET-->
					<!-- BEGIN SAMPLE FORM PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption font-red-sunglo">
								<i class="icon-drop font-red-sunglo"></i>
								<span class="caption-subject bold uppercase"> Radios</span>
							</div>
							<div class="actions">
								<a class="btn btn-circle btn-icon-only blue" href="javascript:;">
								<i class="icon-cloud-upload"></i>
								</a>
								<a class="btn btn-circle btn-icon-only green" href="javascript:;">
								<i class="icon-wrench"></i>
								</a>
								<a class="btn btn-circle btn-icon-only red" href="javascript:;">
								<i class="icon-trash"></i>
								</a>
								<a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title="">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<form role="form">
								<div class="form-group form-md-radios">
									<label>Checkboxes</label>
									<div class="md-radio-list">
										<div class="md-radio">
											<input type="radio" id="radio1" name="radio1" class="md-radiobtn">
											<label for="radio1">
											<span></span>
											<span class="check"></span>
											<span class="box"></span>
											Option 1 </label>
										</div>
										<div class="md-radio">
											<input type="radio" id="radio2" name="radio1" class="md-radiobtn" checked>
											<label for="radio2">
											<span></span>
											<span class="check"></span>
											<span class="box"></span>
											Option 2 </label>
										</div>
										<div class="md-radio">
											<input type="radio" id="radio3" name="radio1" class="md-radiobtn">
											<label for="radio3">
											<span></span>
											<span class="check"></span>
											<span class="box"></span>
											Option 3 </label>
										</div>
										<div class="md-radio">
											<input type="radio" id="radio5" name="radio1" disabled class="md-radiobtn">
											<label for="radio5">
											<span></span>
											<span class="check"></span>
											<span class="box"></span>
											Disabled </label>
										</div>
									</div>
								</div>
								<div class="form-group form-md-radios">
									<label>Checkboxes</label>
									<div class="md-radio-inline">
										<div class="md-radio">
											<input type="radio" id="radio6" name="radio2" class="md-radiobtn">
											<label for="radio6">
											<span></span>
											<span class="check"></span>
											<span class="box"></span>
											Option 1 </label>
										</div>
										<div class="md-radio">
											<input type="radio" id="radio7" name="radio2" class="md-radiobtn" checked>
											<label for="radio7">
											<span></span>
											<span class="check"></span>
											<span class="box"></span>
											Option 2 </label>
										</div>
										<div class="md-radio">
											<input type="radio" id="radio8" name="radio2" class="md-radiobtn">
											<label for="radio8">
											<span></span>
											<span class="check"></span>
											<span class="box"></span>
											Option 3 </label>
										</div>
									</div>
								</div>
								<div class="form-group form-md-radios">
									<label>Checkboxes</label>
									<div class="md-radio-list">
										<div class="md-radio">
											<input type="radio" id="radio9" name="radio1" class="md-radiobtn">
											<label for="radio9">
											<span></span>
											<span class="check"></span>
											<span class="box"></span>
											Option 1 </label>
										</div>
										<div class="md-radio has-error">
											<input type="radio" id="radio10" name="radio1" class="md-radiobtn" checked>
											<label for="radio10">
											<span></span>
											<span class="check"></span>
											<span class="box"></span>
											Option 2 </label>
										</div>
										<div class="md-radio has-warning">
											<input type="radio" id="radio11" name="radio1" class="md-radiobtn">
											<label for="radio11">
											<span></span>
											<span class="check"></span>
											<span class="box"></span>
											Option 3 </label>
										</div>
										<div class="md-radio has-success">
											<input type="radio" id="radio13" name="radio1" disabled class="md-radiobtn">
											<label for="radio13">
											<span></span>
											<span class="check"></span>
											<span class="box"></span>
											Disabled </label>
										</div>
									</div>
								</div>
								<div class="form-group form-md-radios">
									<label>Checkboxes</label>
									<div class="md-radio-inline">
										<div class="md-radio">
											<input type="radio" id="radio14" name="radio2" class="md-radiobtn">
											<label for="radio14">
											<span></span>
											<span class="check"></span>
											<span class="box"></span>
											Option 1 </label>
										</div>
										<div class="md-radio has-error">
											<input type="radio" id="radio15" name="radio2" class="md-radiobtn" checked>
											<label for="radio15">
											<span></span>
											<span class="check"></span>
											<span class="box"></span>
											Option 2 </label>
										</div>
										<div class="md-radio has-warning">
											<input type="radio" id="radio16" name="radio2" class="md-radiobtn">
											<label for="radio16">
											<span></span>
											<span class="check"></span>
											<span class="box"></span>
											Option 3 </label>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<!-- END SAMPLE FORM PORTLET-->
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN SAMPLE FORM PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption font-green-haze">
								<i class="icon-settings font-green-haze"></i>
								<span class="caption-subject bold uppercase"> Horizontal Form</span>
							</div>
							<div class="actions">
								<a class="btn btn-circle btn-icon-only blue" href="javascript:;">
								<i class="icon-cloud-upload"></i>
								</a>
								<a class="btn btn-circle btn-icon-only green" href="javascript:;">
								<i class="icon-wrench"></i>
								</a>
								<a class="btn btn-circle btn-icon-only red" href="javascript:;">
								<i class="icon-trash"></i>
								</a>
								<a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title="">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<form role="form" class="form-horizontal">
								<div class="form-body">
									<div class="form-group form-md-line-input">
										<label class="col-md-2 control-label" for="form_control_1">Regular input</label>
										<div class="col-md-10">
											<input type="text" class="form-control" id="form_control_1" placeholder="Enter your name">
											<div class="form-control-focus">
											</div>
										</div>
									</div>
									<div class="form-group form-md-line-input">
										<label class="col-md-2 control-label" for="form_control_1">Input with hint</label>
										<div class="col-md-10">
											<input type="text" class="form-control" id="form_control_1" placeholder="Enter your email">
											<div class="form-control-focus">
											</div>
											<span class="help-block">Some help goes here...</span>
										</div>
									</div>
									<div class="form-group form-md-line-input has-success">
										<label class="col-md-2 control-label" for="form_control_1">Success Input</label>
										<div class="col-md-10">
											<input type="text" class="form-control" id="form_control_1" placeholder="Success state">
											<div class="form-control-focus">
											</div>
										</div>
									</div>
									<div class="form-group form-md-line-input has-warning">
										<label class="col-md-2 control-label" for="form_control_1">Warning Input</label>
										<div class="col-md-10">
											<input type="text" class="form-control" id="form_control_1" placeholder="Warning state">
											<div class="form-control-focus">
											</div>
										</div>
									</div>
									<div class="form-group form-md-line-input has-error">
										<label class="col-md-2 control-label" for="form_control_1">Error State</label>
										<div class="col-md-10">
											<input type="text" class="form-control" id="form_control_1" placeholder="Error state">
											<div class="form-control-focus">
											</div>
										</div>
									</div>
									<div class="form-group form-md-line-input">
										<label class="col-md-2 control-label" for="form_control_1">Dropdown Input</label>
										<div class="col-md-10">
											<select class="form-control" id="form_control_1">
												<option value=""></option>
												<option value="">Option 1</option>
												<option value="">Option 2</option>
												<option value="">Option 3</option>
												<option value="">Option 4</option>
											</select>
											<div class="form-control-focus">
											</div>
										</div>
									</div>
									<div class="form-group form-md-line-input has-success">
										<label class="col-md-2 control-label" for="form_control_1">Textarea</label>
										<div class="col-md-10">
											<textarea class="form-control" rows="3" placeholder="Enter more text"></textarea>
											<div class="form-control-focus">
											</div>
										</div>
									</div>
									<div class="form-group form-md-line-input">
										<label class="col-md-2 control-label" for="form_control_1">Disabled</label>
										<div class="col-md-10">
											<input type="text" class="form-control" disabled id="form_control_1" placeholder="Placeholder...">
											<div class="form-control-focus">
											</div>
										</div>
									</div>
									<div class="form-group form-md-line-input">
										<label class="col-md-2 control-label" for="form_control_1">Readonly</label>
										<div class="col-md-10">
											<input type="text" class="form-control" readonly value="Some value" id="form_control_1" placeholder="Placeholder...">
											<div class="form-control-focus">
											</div>
										</div>
									</div>
									<div class="form-group form-md-line-input">
										<label class="col-md-2 control-label" for="form_control_1">Readonly</label>
										<div class="col-md-10">
											<div class="form-control form-control-static">
												email@example.com
											</div>
											<div class="form-control-focus">
											</div>
										</div>
									</div>
									<div class="form-group form-md-line-input">
										<label class="col-md-2 control-label" for="form_control_1">Small</label>
										<div class="col-md-10">
											<input type="text" class="form-control input-sm" id="form_control_1" placeholder=".input-sm">
											<div class="form-control-focus">
											</div>
										</div>
									</div>
									<div class="form-group form-md-line-input">
										<label class="col-md-2 control-label" for="form_control_1">Large</label>
										<div class="col-md-10">
											<input type="text" class="form-control input-lg" id="form_control_1" placeholder=".input-lg">
											<div class="form-control-focus">
											</div>
										</div>
									</div>
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-2 col-md-10">
											<button type="button" class="btn default">Cancel</button>
											<button type="button" class="btn blue">Submit</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<!-- END SAMPLE FORM PORTLET-->
					<!-- BEGIN SAMPLE FORM PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption font-green-haze">
								<i class="icon-settings font-green-haze"></i>
								<span class="caption-subject bold uppercase"> Checkbox & Radios</span>
							</div>
							<div class="actions">
								<a class="btn btn-circle btn-icon-only blue" href="javascript:;">
								<i class="icon-cloud-upload"></i>
								</a>
								<a class="btn btn-circle btn-icon-only green" href="javascript:;">
								<i class="icon-wrench"></i>
								</a>
								<a class="btn btn-circle btn-icon-only red" href="javascript:;">
								<i class="icon-trash"></i>
								</a>
								<a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title="">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<form role="form" class="form-horizontal">
								<div class="form-body">
									<div class="form-group form-md-line-input">
										<label class="col-md-2 control-label" for="form_control_1">Checkboxes</label>
										<div class="col-md-10">
											<div class="md-checkbox-list">
												<div class="md-checkbox">
													<input type="checkbox" id="checkbox30" class="md-check">
													<label for="checkbox30">
													<span></span>
													<span class="check"></span>
													<span class="box"></span>
													Option 1 </label>
												</div>
												<div class="md-checkbox has-error">
													<input type="checkbox" id="checkbox31" class="md-check" checked>
													<label for="checkbox31">
													<span></span>
													<span class="check"></span>
													<span class="box"></span>
													Option 2 </label>
												</div>
												<div class="md-checkbox has-warning">
													<input type="checkbox" id="checkbox32" class="md-check">
													<label for="checkbox32">
													<span></span>
													<span class="check"></span>
													<span class="box"></span>
													Option 3 </label>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group form-md-line-input">
										<label class="col-md-2 control-label" for="form_control_1">Inline Checkboxes</label>
										<div class="col-md-10">
											<div class="md-checkbox-inline">
												<div class="md-checkbox">
													<input type="checkbox" id="checkbox33" class="md-check">
													<label for="checkbox33">
													<span></span>
													<span class="check"></span>
													<span class="box"></span>
													Option 1 </label>
												</div>
												<div class="md-checkbox has-error">
													<input type="checkbox" id="checkbox34" class="md-check" checked>
													<label for="checkbox34">
													<span></span>
													<span class="check"></span>
													<span class="box"></span>
													Option 2 </label>
												</div>
												<div class="md-checkbox has-info">
													<input type="checkbox" id="checkbox35" class="md-check">
													<label for="checkbox35">
													<span></span>
													<span class="check"></span>
													<span class="box"></span>
													Option 3 </label>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group form-md-line-input">
										<label class="col-md-2 control-label" for="form_control_1">Radios</label>
										<div class="col-md-10">
											<div class="md-radio-list">
												<div class="md-radio">
													<input type="radio" id="radio50" name="radio211" class="md-radiobtn">
													<label for="radio50">
													<span></span>
													<span class="check"></span>
													<span class="box"></span>
													Option 1 </label>
												</div>
												<div class="md-radio has-error">
													<input type="radio" id="radio51" name="radio211" class="md-radiobtn" checked>
													<label for="radio51">
													<span></span>
													<span class="check"></span>
													<span class="box"></span>
													Option 2 </label>
												</div>
												<div class="md-radio has-warning">
													<input type="radio" id="radio52" name="radio231" class="md-radiobtn">
													<label for="radio52">
													<span></span>
													<span class="check"></span>
													<span class="box"></span>
													Option 3 </label>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group form-md-line-input">
										<label class="col-md-2 control-label" for="form_control_1">Inline Radios</label>
										<div class="col-md-10">
											<div class="md-radio-inline">
												<div class="md-radio">
													<input type="radio" id="radio53" name="radio2" class="md-radiobtn">
													<label for="radio53">
													<span></span>
													<span class="check"></span>
													<span class="box"></span>
													Option 1 </label>
												</div>
												<div class="md-radio has-error">
													<input type="radio" id="radio54" name="radio2" class="md-radiobtn" checked>
													<label for="radio54">
													<span></span>
													<span class="check"></span>
													<span class="box"></span>
													Option 2 </label>
												</div>
												<div class="md-radio has-warning">
													<input type="radio" id="radio55" name="radio2" class="md-radiobtn">
													<label for="radio55">
													<span></span>
													<span class="check"></span>
													<span class="box"></span>
													Option 3 </label>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-2 col-md-10">
											<button type="button" class="btn default">Cancel</button>
											<button type="button" class="btn blue">Submit</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<!-- END SAMPLE FORM PORTLET-->
					<!-- BEGIN SAMPLE FORM PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption font-green-haze">
								<i class="icon-settings font-green-haze"></i>
								<span class="caption-subject bold uppercase"> Input Groups & Icons</span>
							</div>
							<div class="actions">
								<a class="btn btn-circle btn-icon-only blue" href="javascript:;">
								<i class="icon-cloud-upload"></i>
								</a>
								<a class="btn btn-circle btn-icon-only green" href="javascript:;">
								<i class="icon-wrench"></i>
								</a>
								<a class="btn btn-circle btn-icon-only red" href="javascript:;">
								<i class="icon-trash"></i>
								</a>
								<a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title="">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<form role="form" class="form-horizontal">
								<div class="form-body">
									<div class="form-group form-md-line-input has-danger">
										<label class="col-md-2 control-label" for="form_control_1">Left icon</label>
										<div class="col-md-10">
											<div class="input-icon">
												<input type="text" class="form-control" placeholder="Left icon">
												<div class="form-control-focus">
												</div>
												<span class="help-block">Some help goes here...</span>
												<i class="fa fa-bell-o"></i>
											</div>
										</div>
									</div>
									<div class="form-group form-md-line-input has-success">
										<label class="col-md-2 control-label" for="form_control_1">Right icon</label>
										<div class="col-md-10">
											<div class="input-icon right">
												<input type="text" class="form-control" placeholder="Right icon">
												<div class="form-control-focus">
												</div>
												<span class="help-block">Some help goes here...</span>
												<i class="icon-user"></i>
											</div>
										</div>
									</div>
									<div class="form-group form-md-line-input">
										<label class="col-md-2 control-label" for="form_control_1">Input Group</label>
										<div class="col-md-10">
											<div class="input-group has-success">
												<span class="input-group-addon">
												<i class="fa fa-envelope"></i>
												</span>
												<input type="text" class="form-control" placeholder="Email Address">
												<div class="form-control-focus">
												</div>
											</div>
										</div>
									</div>
									<div class="form-group form-md-line-input has-info">
										<label class="col-md-2 control-label" for="form_control_1">Input Group</label>
										<div class="col-md-10">
											<div class="input-group">
												<input type="text" class="form-control" placeholder="Email Address">
												<div class="form-control-focus">
												</div>
												<span class="input-group-addon">
												<i class="fa fa-envelope"></i>
												</span>
												<span class="help-block">Some help goes here...</span>
											</div>
										</div>
									</div>
									<div class="form-group form-md-line-input">
										<label class="col-md-2 control-label" for="form_control_1">Both Addons</label>
										<div class="col-md-10">
											<div class="input-group">
												<span class="input-group-addon">$</span>
												<input type="text" class="form-control" placeholder="Enter amount">
												<div class="form-control-focus">
												</div>
												<span class="input-group-addon">.00</span>
											</div>
										</div>
									</div>
									<div class="form-group form-md-line-input">
										<label class="col-md-2 control-label" for="form_control_1">Action Button</label>
										<div class="col-md-10">
											<div class="input-group">
												<span class="input-group-btn btn-left">
												<button class="btn blue-madison" type="button">Go!</button>
												</span>
												<div class="input-group-control">
													<input type="text" class="form-control" placeholder="Placeholder">
													<div class="form-control-focus">
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group form-md-line-input">
										<label class="col-md-2 control-label" for="form_control_1">Dropdowm Menu</label>
										<div class="col-md-10">
											<div class="input-group">
												<div class="input-group-control">
													<input type="text" class="form-control" placeholder="Placeholder">
													<div class="form-control-focus">
													</div>
												</div>
												<span class="input-group-btn btn-right">
												<button type="button" class="btn green-haze dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
												Action <i class="fa fa-angle-down"></i>
												</button>
												<ul class="dropdown-menu pull-right" role="menu">
													<li>
														<a href="javascript:;">Action</a>
													</li>
													<li>
														<a href="javascript:;">Another action</a>
													</li>
													<li>
														<a href="javascript:;">Something else here</a>
													</li>
													<li class="divider">
													</li>
													<li>
														<a href="javascript:;">Separated link</a>
													</li>
												</ul>
												</span>
											</div>
										</div>
									</div>
									<div class="form-group form-md-line-input">
										<label class="col-md-2 control-label" for="form_control_1">Action Buttons(small size)</label>
										<div class="col-md-10">
											<div class="input-group input-group-sm">
												<span class="input-group-btn btn-left">
												<button class="btn red-intense" type="button">Go!</button>
												</span>
												<div class="input-group-control">
													<input type="text" class="form-control input-sm" placeholder=".input-sm">
													<div class="form-control-focus">
													</div>
												</div>
												<span class="input-group-btn btn-right">
												<button class="btn green-haze" type="button">Go!</button>
												</span>
											</div>
										</div>
									</div>
									<div class="form-group form-md-line-input">
										<label class="col-md-2 control-label" for="form_control_1">Action Buttons(large size)</label>
										<div class="col-md-10">
											<div class="input-group input-group-lg">
												<span class="input-group-btn btn-left">
												<button class="btn red-intense" type="button">Go!</button>
												</span>
												<div class="input-group-control">
													<input type="text" class="form-control input-lg" placeholder=".input-lg">
													<div class="form-control-focus">
													</div>
												</div>
												<span class="input-group-btn btn-right">
												<button class="btn green-haze" type="button">Go!</button>
												</span>
											</div>
										</div>
									</div>
								</div>
								<div class="form-actions margin-top-10">
									<div class="row">
										<div class="col-md-offset-2 col-md-10">
											<button type="button" class="btn default">Cancel</button>
											<button type="button" class="btn blue">Submit</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<!-- END SAMPLE FORM PORTLET-->
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN SAMPLE FORM PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption font-green-haze">
								<i class="icon-settings font-green-haze"></i>
								<span class="caption-subject bold uppercase"> Form Layouts</span>
							</div>
							<div class="actions">
								<a class="btn btn-circle btn-icon-only blue" href="javascript:;">
								<i class="icon-cloud-upload"></i>
								</a>
								<a class="btn btn-circle btn-icon-only green" href="javascript:;">
								<i class="icon-wrench"></i>
								</a>
								<a class="btn btn-circle btn-icon-only red" href="javascript:;">
								<i class="icon-trash"></i>
								</a>
								<a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title="">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<h4>Inline Form</h4>
							<form class="form-inline margin-bottom-40" role="form">
								<div class="form-group form-md-line-input has-success">
									<input type="text" class="form-control" id="form_control_1" placeholder="Email email">
									<div class="form-control-focus">
									</div>
								</div>
								<div class="form-group form-md-line-input has-success">
									<input type="text" class="form-control" id="form_control_1" placeholder="Enter password">
									<div class="form-control-focus">
									</div>
								</div>
								<div class="md-checkbox md-checkbox-inline has-success">
									<input type="checkbox" id="checkbox113" class="md-check">
									<label for="checkbox113">
									<span></span>
									<span class="check"></span>
									<span class="box"></span>
									Remember me </label>
								</div>
								<button type="button" class="btn btn-warning">Sign in</button>
							</form>
							<h4>Inline Form With Icons</h4>
							<form class="form-inline margin-bottom-40" role="form">
								<div class="form-group form-md-line-input has-error">
									<div class="input-icon">
										<input type="email" class="form-control" placeholder="Email">
										<div class="form-control-focus">
										</div>
										<span class="help-block">Some help goes here...</span>
										<i class="fa fa-envelope-o"></i>
									</div>
								</div>
								<div class="form-group form-md-line-input has-error">
									<div class="input-icon">
										<input type="password" class="form-control" placeholder="Password">
										<div class="form-control-focus">
										</div>
										<span class="help-block">Some help goes here...</span>
										<i class="fa fa-key"></i>
									</div>
								</div>
								<div class="md-checkbox md-checkbox-inline has-success">
									<input type="checkbox" id="checkbox111" class="md-check">
									<label for="checkbox111">
									<span></span>
									<span class="check"></span>
									<span class="box"></span>
									Remember me </label>
								</div>
								<button type="button" class="btn btn-success">Sign in</button>
							</form>
							<h4>Horizontal Form</h4>
							<form class="form-horizontal margin-bottom-40" role="form">
								<div class="form-group form-md-line-input">
									<label for="inputEmail1" class="col-md-2 control-label">Email</label>
									<div class="col-md-4">
										<input type="email" class="form-control" id="form_control_1" placeholder="Email">
										<div class="form-control-focus">
										</div>
									</div>
								</div>
								<div class="form-group form-md-line-input">
									<label for="inputPassword12" class="col-md-2 control-label">Password</label>
									<div class="col-md-4">
										<input type="password" class="form-control" id="form_control_1" placeholder="Password">
										<div class="form-control-focus">
										</div>
									</div>
								</div>
								<div class="form-group form-md-line-input">
									<div class="col-md-offset-2 col-md-4">
										<div class="md-checkbox-list">
											<div class="md-checkbox">
												<input type="checkbox" id="checkbox1111" class="md-check">
												<label for="checkbox1111">
												<span></span>
												<span class="check"></span>
												<span class="box"></span>
												Remember me </label>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-offset-2 col-md-10">
										<button type="button" class="btn blue">Sign in</button>
									</div>
								</div>
							</form>
							<h4>Horizontal Form With Icons</h4>
							<form class="form-horizontal margin-bottom-40" role="form">
								<div class="form-group form-md-line-input">
									<label for="inputEmail12" class="col-md-2 control-label">Email</label>
									<div class="col-md-4">
										<div class="input-icon">
											<input type="email" class="form-control" placeholder="Email">
											<div class="form-control-focus">
											</div>
											<i class="fa fa-envelope-o"></i>
										</div>
									</div>
								</div>
								<div class="form-group form-md-line-input">
									<label for="inputPassword1" class="col-md-2 control-label">Password</label>
									<div class="col-md-4">
										<div class="input-icon right">
											<input type="password" class="form-control" placeholder="Password">
											<div class="form-control-focus">
											</div>
											<i class="fa fa-key"></i>
										</div>
										<div class="help-block">
											 with right aligned icon
										</div>
									</div>
								</div>
								<div class="form-group form-md-line-input">
									<div class="col-md-offset-2 col-md-4">
										<div class="md-checkbox-list">
											<div class="md-checkbox">
												<input type="checkbox" id="checkbox11111" class="md-check">
												<label for="checkbox11111">
												<span></span>
												<span class="check"></span>
												<span class="box"></span>
												Remember me </label>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-offset-2 col-md-10">
										<button type="button" class="btn green">Sign in</button>
									</div>
								</div>
							</form>
							<h4>Column Sizing</h4>
							<form role="form" class="margin-bottom-40">
								<div class="row">
									<div class="col-md-2">
										<div class="form-group form-md-line-input has-success">
											<input type="text" class="form-control" id="form_control_1" placeholder=".col-md-2">
											<div class="form-control-focus">
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group form-md-line-input has-warning">
											<input type="text" class="form-control" id="form_control_1" placeholder=".col-md-3">
											<div class="form-control-focus">
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group form-md-line-input has-info">
											<input type="text" class="form-control" id="form_control_1" placeholder=".col-md-4">
											<div class="form-control-focus">
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group form-md-line-input has-error">
											<input type="text" class="form-control" id="form_control_1" placeholder=".col-md-3">
											<div class="form-control-focus">
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- END SAMPLE FORM PORTLET-->
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="page-footer-inner">
		 2014 &copy; Metronic by keenthemes.
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="../../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="../../assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<script src="../../assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="../../assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="../../assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<script>
jQuery(document).ready(function() {   
   // initiate layout and plugins
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>