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
<title>Metronic | Form Stuff - Form Layouts</title>
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
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="../../assets/global/plugins/select2/select2.css"/>
<!-- END PAGE LEVEL SCRIPTS -->
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
						<li>
							<a href="form_controls_md.html">
							<span class="badge badge-roundless badge-danger">new</span>Material Design<br>
							Form Controls</a>
						</li>
						<li>
							<a href="form_controls.html">
							Bootstrap<br>
							Form Controls</a>
						</li>
						<li class="active">
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
					<h1>Form Layouts <small>form layouts</small></h1>
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
					<a href="#">Form Layouts</a>
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<div class="tabbable tabbable-custom tabbable-noborder  tabbable-reversed">
						<ul class="nav nav-tabs">
							<li class="active">
								<a href="#tab_0" data-toggle="tab">
								Form Actions </a>
							</li>
							<li>
								<a href="#tab_1" data-toggle="tab">
								2 Cols </a>
							</li>
							<li>
								<a href="#tab_2" data-toggle="tab">
								2 Cols Horizontal </a>
							</li>
							<li>
								<a href="#tab_3" data-toggle="tab">
								2 Cols View Only </a>
							</li>
							<li>
								<a href="#tab_4" data-toggle="tab">
								Row Seperated </a>
							</li>
							<li>
								<a href="#tab_5" data-toggle="tab">
								Bordered </a>
							</li>
							<li>
								<a href="#tab_6" data-toggle="tab">
								Row Stripped </a>
							</li>
							<li>
								<a href="#tab_7" data-toggle="tab">
								Label Stripped </a>
							</li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tab_0">
								<div class="portlet box green">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-gift"></i>Form Actions On Bottom
										</div>
										<div class="tools">
											<a href="javascript:;" class="collapse">
											</a>
											<a href="#portlet-config" data-toggle="modal" class="config">
											</a>
											<a href="javascript:;" class="reload">
											</a>
											<a href="javascript:;" class="remove">
											</a>
										</div>
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="#" class="form-horizontal">
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-3 control-label">Text</label>
													<div class="col-md-4">
														<input type="text" class="form-control input-circle" placeholder="Enter text">
														<span class="help-block">
														A block of help text. </span>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Email Address</label>
													<div class="col-md-4">
														<div class="input-group">
															<span class="input-group-addon input-circle-left">
															<i class="fa fa-envelope"></i>
															</span>
															<input type="email" class="form-control input-circle-right" placeholder="Email Address">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Password</label>
													<div class="col-md-4">
														<div class="input-group">
															<input type="password" class="form-control input-circle-left" placeholder="Password">
															<span class="input-group-addon input-circle-right">
															<i class="fa fa-user"></i>
															</span>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Left Icon</label>
													<div class="col-md-4">
														<div class="input-icon">
															<i class="fa fa-bell-o"></i>
															<input type="text" class="form-control input-circle" placeholder="Left icon">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Right Icon</label>
													<div class="col-md-4">
														<div class="input-icon right">
															<i class="fa fa-microphone"></i>
															<input type="text" class="form-control input-circle" placeholder="Right icon">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Input With Spinner</label>
													<div class="col-md-4">
														<input type="password" class="form-control spinner input-circle" placeholder="Password">
													</div>
												</div>
												<div class="form-group last">
													<label class="col-md-3 control-label">Static Control</label>
													<div class="col-md-4">
														<span class="form-control-static">
														email@example.com </span>
													</div>
												</div>
											</div>
											<div class="form-actions">
												<div class="row">
													<div class="col-md-offset-3 col-md-9">
														<button type="submit" class="btn btn-circle blue">Submit</button>
														<button type="button" class="btn btn-circle default">Cancel</button>
													</div>
												</div>
											</div>
										</form>
										<!-- END FORM-->
									</div>
								</div>
								<div class="portlet box blue-hoki">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-gift"></i>Form Actions On Top
										</div>
										<div class="tools">
											<a href="javascript:;" class="collapse">
											</a>
											<a href="#portlet-config" data-toggle="modal" class="config">
											</a>
											<a href="javascript:;" class="reload">
											</a>
											<a href="javascript:;" class="remove">
											</a>
										</div>
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="#" class="form-horizontal">
											<div class="form-actions top">
												<div class="row">
													<div class="col-md-offset-3 col-md-9">
														<button type="submit" class="btn green">Submit</button>
														<button type="button" class="btn default">Cancel</button>
													</div>
												</div>
											</div>
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-3 control-label">Text</label>
													<div class="col-md-4">
														<input type="text" class="form-control" placeholder="Enter text">
														<span class="help-block">
														A block of help text. </span>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Email Address</label>
													<div class="col-md-4">
														<div class="input-group">
															<span class="input-group-addon">
															<i class="fa fa-envelope"></i>
															</span>
															<input type="email" class="form-control" placeholder="Email Address">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Password</label>
													<div class="col-md-4">
														<div class="input-group">
															<input type="password" class="form-control" placeholder="Password">
															<span class="input-group-addon">
															<i class="fa fa-user"></i>
															</span>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Left Icon</label>
													<div class="col-md-4">
														<div class="input-icon">
															<i class="fa fa-bell-o"></i>
															<input type="text" class="form-control" placeholder="Left icon">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Right Icon</label>
													<div class="col-md-4">
														<div class="input-icon right">
															<i class="fa fa-microphone"></i>
															<input type="text" class="form-control" placeholder="Right icon">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Input With Spinner</label>
													<div class="col-md-4">
														<input type="password" class="form-control spinner" placeholder="Password">
													</div>
												</div>
												<div class="form-group last">
													<label class="col-md-3 control-label">Static Control</label>
													<div class="col-md-4">
														<p class="form-control-static">
															 email@example.com
														</p>
													</div>
												</div>
											</div>
										</form>
										<!-- END FORM-->
									</div>
								</div>
								<div class="portlet box yellow">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-gift"></i>Form Actions On Top & Bottom
										</div>
										<div class="tools">
											<a href="javascript:;" class="collapse">
											</a>
											<a href="#portlet-config" data-toggle="modal" class="config">
											</a>
											<a href="javascript:;" class="reload">
											</a>
											<a href="javascript:;" class="remove">
											</a>
										</div>
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="#" class="form-horizontal">
											<div class="form-actions top">
												<div class="row">
													<div class="col-md-offset-3 col-md-9">
														<button type="submit" class="btn green">Submit</button>
														<button type="button" class="btn default">Cancel</button>
													</div>
												</div>
											</div>
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-3 control-label">Text</label>
													<div class="col-md-4">
														<input type="text" class="form-control" placeholder="Enter text">
														<span class="help-block">
														A block of help text. </span>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Email Address</label>
													<div class="col-md-4">
														<div class="input-group">
															<span class="input-group-addon">
															<i class="fa fa-envelope"></i>
															</span>
															<input type="email" class="form-control" placeholder="Email Address">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Password</label>
													<div class="col-md-4">
														<div class="input-group">
															<input type="password" class="form-control" placeholder="Password">
															<span class="input-group-addon">
															<i class="fa fa-user"></i>
															</span>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Left Icon</label>
													<div class="col-md-4">
														<div class="input-icon">
															<i class="fa fa-bell-o"></i>
															<input type="text" class="form-control" placeholder="Left icon">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Right Icon</label>
													<div class="col-md-4">
														<div class="input-icon right">
															<i class="fa fa-microphone"></i>
															<input type="text" class="form-control" placeholder="Right icon">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Input With Spinner</label>
													<div class="col-md-4">
														<input type="password" class="form-control spinner" placeholder="Password">
													</div>
												</div>
												<div class="form-group last">
													<label class="col-md-3 control-label">Static Control</label>
													<div class="col-md-4">
														<p class="form-control-static">
															 email@example.com
														</p>
													</div>
												</div>
											</div>
											<div class="form-actions fluid">
												<div class="row">
													<div class="col-md-offset-3 col-md-9">
														<button type="submit" class="btn green">Submit</button>
														<button type="button" class="btn default">Cancel</button>
													</div>
												</div>
											</div>
										</form>
										<!-- END FORM-->
									</div>
								</div>
								<div class="portlet light bordered">
									<div class="portlet-title">
										<div class="caption">
											<i class="icon-equalizer font-red-sunglo"></i>
											<span class="caption-subject font-red-sunglo bold uppercase">Form Sample</span>
											<span class="caption-helper">form actions without bg color</span>
										</div>
										<div class="actions">
											<div class="portlet-input input-inline input-small">
												<div class="input-icon right">
													<i class="icon-magnifier"></i>
													<input type="text" class="form-control input-circle" placeholder="search...">
												</div>
											</div>
										</div>
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="#" class="form-horizontal">
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-3 control-label">Text</label>
													<div class="col-md-4">
														<input type="text" class="form-control" placeholder="Enter text">
														<span class="help-block">
														A block of help text. </span>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Email Address</label>
													<div class="col-md-4">
														<div class="input-group">
															<span class="input-group-addon">
															<i class="fa fa-envelope"></i>
															</span>
															<input type="email" class="form-control" placeholder="Email Address">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Password</label>
													<div class="col-md-4">
														<div class="input-group">
															<input type="password" class="form-control" placeholder="Password">
															<span class="input-group-addon">
															<i class="fa fa-user"></i>
															</span>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Left Icon</label>
													<div class="col-md-4">
														<div class="input-icon">
															<i class="fa fa-bell-o"></i>
															<input type="text" class="form-control" placeholder="Left icon">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Right Icon</label>
													<div class="col-md-4">
														<div class="input-icon right">
															<i class="fa fa-microphone"></i>
															<input type="text" class="form-control" placeholder="Right icon">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Input With Spinner</label>
													<div class="col-md-4">
														<input type="password" class="form-control spinner" placeholder="Password">
													</div>
												</div>
												<div class="form-group last">
													<label class="col-md-3 control-label">Static Control</label>
													<div class="col-md-4">
														<p class="form-control-static">
															 email@example.com
														</p>
													</div>
												</div>
											</div>
											<div class="form-actions">
												<div class="row">
													<div class="col-md-offset-3 col-md-9">
														<button type="submit" class="btn green">Submit</button>
														<button type="button" class="btn default">Cancel</button>
													</div>
												</div>
											</div>
										</form>
										<!-- END FORM-->
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="portlet box red">
											<div class="portlet-title">
												<div class="caption">
													<i class="fa fa-gift"></i>Left Aligned
												</div>
												<div class="tools">
													<a href="javascript:;" class="collapse">
													</a>
													<a href="#portlet-config" data-toggle="modal" class="config">
													</a>
													<a href="javascript:;" class="reload">
													</a>
													<a href="javascript:;" class="remove">
													</a>
												</div>
											</div>
											<div class="portlet-body form">
												<!-- BEGIN FORM-->
												<form action="#">
													<div class="form-actions top">
														<button type="submit" class="btn green">Submit</button>
														<button type="button" class="btn default">Cancel</button>
													</div>
													<div class="form-body">
														<div class="form-group">
															<label class="control-label">Text</label>
															<input type="text" class="form-control" placeholder="Enter text">
															<span class="help-block">
															A block of help text. </span>
														</div>
														<div class="form-group">
															<label class="control-label">Email Address</label>
															<div class="input-group">
																<span class="input-group-addon">
																<i class="fa fa-envelope"></i>
																</span>
																<input type="email" class="form-control" placeholder="Email Address">
															</div>
														</div>
														<div class="form-group">
															<label class="control-label">Password</label>
															<div class="input-group">
																<input type="password" class="form-control" placeholder="Password">
																<span class="input-group-addon">
																<i class="fa fa-user"></i>
																</span>
															</div>
														</div>
														<div class="form-group">
															<label class="control-label">Left Icon</label>
															<div class="input-icon">
																<i class="fa fa-bell-o"></i>
																<input type="text" class="form-control" placeholder="Left icon">
															</div>
														</div>
														<div class="form-group">
															<label class="control-label">Right Icon</label>
															<div class="input-icon right">
																<i class="fa fa-microphone"></i>
																<input type="text" class="form-control" placeholder="Right icon">
															</div>
														</div>
														<div class="form-group">
															<label class="control-label">Input With Spinner</label>
															<input type="password" class="form-control spinner" placeholder="Password">
														</div>
														<div class="form-group last">
															<label class="control-label">Static Control</label>
															<p class="form-control-static">
																 email@example.com
															</p>
														</div>
													</div>
													<div class="form-actions">
														<button type="submit" class="btn green">Submit</button>
														<button type="button" class="btn default">Cancel</button>
													</div>
												</form>
												<!-- END FORM-->
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="portlet box purple">
											<div class="portlet-title">
												<div class="caption">
													<i class="fa fa-gift"></i>Right Aligned
												</div>
												<div class="tools">
													<a href="javascript:;" class="collapse">
													</a>
													<a href="#portlet-config" data-toggle="modal" class="config">
													</a>
													<a href="javascript:;" class="reload">
													</a>
													<a href="javascript:;" class="remove">
													</a>
												</div>
											</div>
											<div class="portlet-body form">
												<!-- BEGIN FORM-->
												<form action="#">
													<div class="form-actions top right">
														<button type="submit" class="btn green">Submit</button>
														<button type="button" class="btn default">Cancel</button>
													</div>
													<div class="form-body">
														<div class="form-group">
															<label class="control-label">Text</label>
															<input type="text" class="form-control" placeholder="Enter text">
															<span class="help-block">
															A block of help text. </span>
														</div>
														<div class="form-group">
															<label class="control-label">Email Address</label>
															<div class="input-group">
																<span class="input-group-addon">
																<i class="fa fa-envelope"></i>
																</span>
																<input type="email" class="form-control" placeholder="Email Address">
															</div>
														</div>
														<div class="form-group">
															<label class="control-label">Password</label>
															<div class="input-group">
																<input type="password" class="form-control" placeholder="Password">
																<span class="input-group-addon">
																<i class="fa fa-user"></i>
																</span>
															</div>
														</div>
														<div class="form-group">
															<label class="control-label">Left Icon</label>
															<div class="input-icon">
																<i class="fa fa-bell-o"></i>
																<input type="text" class="form-control" placeholder="Left icon">
															</div>
														</div>
														<div class="form-group">
															<label class="control-label">Right Icon</label>
															<div class="input-icon right">
																<i class="fa fa-microphone"></i>
																<input type="text" class="form-control" placeholder="Right icon">
															</div>
														</div>
														<div class="form-group">
															<label class="control-label">Input With Spinner</label>
															<input type="password" class="form-control spinner" placeholder="Password">
														</div>
														<div class="form-group last">
															<label class="control-label">Static Control</label>
															<p class="form-control-static">
																 email@example.com
															</p>
														</div>
													</div>
													<div class="form-actions right">
														<button type="submit" class="btn green">Submit</button>
														<button type="button" class="btn default">Cancel</button>
													</div>
												</form>
												<!-- END FORM-->
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="portlet box yellow">
											<div class="portlet-title">
												<div class="caption">
													<i class="fa fa-gift"></i>Actions Buttons
												</div>
												<div class="tools">
													<a href="javascript:;" class="collapse">
													</a>
													<a href="#portlet-config" data-toggle="modal" class="config">
													</a>
													<a href="javascript:;" class="reload">
													</a>
													<a href="javascript:;" class="remove">
													</a>
												</div>
											</div>
											<div class="portlet-body form">
												<!-- BEGIN FORM-->
												<form action="#">
													<div class="form-actions top">
														<div class="btn-set pull-left">
															<button type="submit" class="btn green">Submit</button>
															<button type="button" class="btn blue">Other Action</button>
														</div>
														<div class="btn-set pull-right">
															<button type="button" class="btn default">Action 1</button>
															<button type="button" class="btn red">Action 2</button>
															<button type="button" class="btn yellow">Action 3</button>
														</div>
													</div>
													<div class="form-body">
														<div class="form-group">
															<label class="control-label">Text</label>
															<input type="text" class="form-control" placeholder="Enter text">
															<span class="help-block">
															A block of help text. </span>
														</div>
														<div class="form-group">
															<label class="control-label">Email Address</label>
															<div class="input-group">
																<span class="input-group-addon">
																<i class="fa fa-envelope"></i>
																</span>
																<input type="email" class="form-control" placeholder="Email Address">
															</div>
														</div>
														<div class="form-group">
															<label class="control-label">Password</label>
															<div class="input-group">
																<input type="password" class="form-control" placeholder="Password">
																<span class="input-group-addon">
																<i class="fa fa-user"></i>
																</span>
															</div>
														</div>
														<div class="form-group">
															<label class="control-label">Left Icon</label>
															<div class="input-icon">
																<i class="fa fa-bell-o"></i>
																<input type="text" class="form-control" placeholder="Left icon">
															</div>
														</div>
														<div class="form-group">
															<label class="control-label">Right Icon</label>
															<div class="input-icon right">
																<i class="fa fa-microphone"></i>
																<input type="text" class="form-control" placeholder="Right icon">
															</div>
														</div>
														<div class="form-group">
															<label class="control-label">Input With Spinner</label>
															<input type="password" class="form-control spinner" placeholder="Password">
														</div>
														<div class="form-group last">
															<label class="control-label">Static Control</label>
															<p class="form-control-static">
																 email@example.com
															</p>
														</div>
													</div>
													<div class="form-actions">
														<div class="btn-set pull-left">
															<button type="submit" class="btn green">Submit</button>
															<button type="button" class="btn blue">Other Action</button>
														</div>
														<div class="btn-set pull-right">
															<button type="button" class="btn default">Action 1</button>
															<button type="button" class="btn red">Action 2</button>
															<button type="button" class="btn yellow">Action 3</button>
														</div>
													</div>
												</form>
												<!-- END FORM-->
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="tab_1">
								<div class="portlet box blue">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-gift"></i>Form Sample
										</div>
										<div class="tools">
											<a href="javascript:;" class="collapse">
											</a>
											<a href="#portlet-config" data-toggle="modal" class="config">
											</a>
											<a href="javascript:;" class="reload">
											</a>
											<a href="javascript:;" class="remove">
											</a>
										</div>
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="#" class="horizontal-form">
											<div class="form-body">
												<h3 class="form-section">Person Info</h3>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label">First Name</label>
															<input type="text" id="firstName" class="form-control" placeholder="Chee Kin">
															<span class="help-block">
															This is inline help </span>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group has-error">
															<label class="control-label">Last Name</label>
															<input type="text" id="lastName" class="form-control" placeholder="Lim">
															<span class="help-block">
															This field has error. </span>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label">Gender</label>
															<select class="form-control">
																<option value="">Male</option>
																<option value="">Female</option>
															</select>
															<span class="help-block">
															Select your gender </span>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label">Date of Birth</label>
															<input type="text" class="form-control" placeholder="dd/mm/yyyy">
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label">Category</label>
															<select class="select2_category form-control" data-placeholder="Choose a Category" tabindex="1">
																<option value="Category 1">Category 1</option>
																<option value="Category 2">Category 2</option>
																<option value="Category 3">Category 5</option>
																<option value="Category 4">Category 4</option>
															</select>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label">Membership</label>
															<div class="radio-list">
																<label class="radio-inline">
																<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked> Option 1 </label>
																<label class="radio-inline">
																<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> Option 2 </label>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<h3 class="form-section">Address</h3>
												<div class="row">
													<div class="col-md-12 ">
														<div class="form-group">
															<label>Street</label>
															<input type="text" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>City</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label>State</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Post Code</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label>Country</label>
															<select class="form-control">
															</select>
														</div>
													</div>
													<!--/span-->
												</div>
											</div>
											<div class="form-actions right">
												<button type="button" class="btn default">Cancel</button>
												<button type="submit" class="btn blue"><i class="fa fa-check"></i> Save</button>
											</div>
										</form>
										<!-- END FORM-->
									</div>
								</div>
								<div class="portlet light bordered">
									<div class="portlet-title">
										<div class="caption">
											<i class="icon-equalizer font-blue-hoki"></i>
											<span class="caption-subject font-blue-hoki bold uppercase">Form Sample</span>
											<span class="caption-helper">demo form...</span>
										</div>
										<div class="tools">
											<a href="" class="collapse">
											</a>
											<a href="#portlet-config" data-toggle="modal" class="config">
											</a>
											<a href="" class="reload">
											</a>
											<a href="" class="remove">
											</a>
										</div>
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="#" class="horizontal-form">
											<div class="form-body">
												<h3 class="form-section">Person Info</h3>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label">First Name</label>
															<input type="text" id="firstName" class="form-control" placeholder="Chee Kin">
															<span class="help-block">
															This is inline help </span>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group has-error">
															<label class="control-label">Last Name</label>
															<input type="text" id="lastName" class="form-control" placeholder="Lim">
															<span class="help-block">
															This field has error. </span>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label">Gender</label>
															<select class="form-control">
																<option value="">Male</option>
																<option value="">Female</option>
															</select>
															<span class="help-block">
															Select your gender </span>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label">Date of Birth</label>
															<input type="text" class="form-control" placeholder="dd/mm/yyyy">
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label">Category</label>
															<select class="select2_category form-control" data-placeholder="Choose a Category" tabindex="1">
																<option value="Category 1">Category 1</option>
																<option value="Category 2">Category 2</option>
																<option value="Category 3">Category 5</option>
																<option value="Category 4">Category 4</option>
															</select>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label">Membership</label>
															<div class="radio-list">
																<label class="radio-inline">
																<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked> Option 1 </label>
																<label class="radio-inline">
																<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> Option 2 </label>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<h3 class="form-section">Address</h3>
												<div class="row">
													<div class="col-md-12 ">
														<div class="form-group">
															<label>Street</label>
															<input type="text" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>City</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label>State</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Post Code</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label>Country</label>
															<select class="form-control">
															</select>
														</div>
													</div>
													<!--/span-->
												</div>
											</div>
											<div class="form-actions right">
												<button type="button" class="btn default">Cancel</button>
												<button type="submit" class="btn blue"><i class="fa fa-check"></i> Save</button>
											</div>
										</form>
										<!-- END FORM-->
									</div>
								</div>
							</div>
							<div class="tab-pane" id="tab_2">
								<div class="portlet box green">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-gift"></i>Form Sample
										</div>
										<div class="tools">
											<a href="javascript:;" class="collapse">
											</a>
											<a href="#portlet-config" data-toggle="modal" class="config">
											</a>
											<a href="javascript:;" class="reload">
											</a>
											<a href="javascript:;" class="remove">
											</a>
										</div>
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="#" class="form-horizontal">
											<div class="form-body">
												<h3 class="form-section">Person Info</h3>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">First Name</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="Chee Kin">
																<span class="help-block">
																This is inline help </span>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group has-error">
															<label class="control-label col-md-3">Last Name</label>
															<div class="col-md-9">
																<select name="foo" class="select2me form-control">
																	<option value="1">Abc</option>
																	<option value="1">Abc</option>
																	<option value="1">This is a really long value that breaks the fluid design for a select2</option>
																</select>
																<span class="help-block">
																This field has error. </span>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Gender</label>
															<div class="col-md-9">
																<select class="form-control">
																	<option value="">Male</option>
																	<option value="">Female</option>
																</select>
																<span class="help-block">
																Select your gender. </span>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Date of Birth</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="dd/mm/yyyy">
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Category</label>
															<div class="col-md-9">
																<select class="select2_category form-control" data-placeholder="Choose a Category" tabindex="1">
																	<option value="Category 1">Category 1</option>
																	<option value="Category 2">Category 2</option>
																	<option value="Category 3">Category 5</option>
																	<option value="Category 4">Category 4</option>
																</select>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Membership</label>
															<div class="col-md-9">
																<div class="radio-list">
																	<label class="radio-inline">
																	<input type="radio" name="optionsRadios2" value="option1"/>
																	Free </label>
																	<label class="radio-inline">
																	<input type="radio" name="optionsRadios2" value="option2" checked/>
																	Professional </label>
																</div>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<h3 class="form-section">Address</h3>
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Address 1</label>
															<div class="col-md-9">
																<input type="text" class="form-control">
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Address 2</label>
															<div class="col-md-9">
																<input type="text" class="form-control">
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">City</label>
															<div class="col-md-9">
																<input type="text" class="form-control">
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">State</label>
															<div class="col-md-9">
																<input type="text" class="form-control">
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Post Code</label>
															<div class="col-md-9">
																<input type="text" class="form-control">
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Country</label>
															<div class="col-md-9">
																<select class="form-control">
																	<option>Country 1</option>
																	<option>Country 2</option>
																</select>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
											</div>
											<div class="form-actions">
												<div class="row">
													<div class="col-md-6">
														<div class="row">
															<div class="col-md-offset-3 col-md-9">
																<button type="submit" class="btn green">Submit</button>
																<button type="button" class="btn default">Cancel</button>
															</div>
														</div>
													</div>
													<div class="col-md-6">
													</div>
												</div>
											</div>
										</form>
										<!-- END FORM-->
									</div>
								</div>
								<div class="portlet light bordered">
									<div class="portlet-title">
										<div class="caption">
											<i class="icon-equalizer font-red-sunglo"></i>
											<span class="caption-subject font-red-sunglo bold uppercase">Form Sample</span>
											<span class="caption-helper">some info...</span>
										</div>
										<div class="tools">
											<a href="" class="collapse">
											</a>
											<a href="#portlet-config" data-toggle="modal" class="config">
											</a>
											<a href="" class="reload">
											</a>
											<a href="" class="remove">
											</a>
										</div>
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="#" class="form-horizontal">
											<div class="form-body">
												<h3 class="form-section">Person Info</h3>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">First Name</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="Chee Kin">
																<span class="help-block">
																This is inline help </span>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group has-error">
															<label class="control-label col-md-3">Last Name</label>
															<div class="col-md-9">
																<select name="foo" class="select2me form-control">
																	<option value="1">Abc</option>
																	<option value="1">Abc</option>
																	<option value="1">This is a really long value that breaks the fluid design for a select2</option>
																</select>
																<span class="help-block">
																This field has error. </span>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Gender</label>
															<div class="col-md-9">
																<select class="form-control">
																	<option value="">Male</option>
																	<option value="">Female</option>
																</select>
																<span class="help-block">
																Select your gender. </span>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Date of Birth</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="dd/mm/yyyy">
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Category</label>
															<div class="col-md-9">
																<select class="select2_category form-control" data-placeholder="Choose a Category" tabindex="1">
																	<option value="Category 1">Category 1</option>
																	<option value="Category 2">Category 2</option>
																	<option value="Category 3">Category 5</option>
																	<option value="Category 4">Category 4</option>
																</select>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Membership</label>
															<div class="col-md-9">
																<div class="radio-list">
																	<label class="radio-inline">
																	<input type="radio" name="optionsRadios2" value="option1"/>
																	Free </label>
																	<label class="radio-inline">
																	<input type="radio" name="optionsRadios2" value="option2" checked/>
																	Professional </label>
																</div>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<h3 class="form-section">Address</h3>
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Address 1</label>
															<div class="col-md-9">
																<input type="text" class="form-control">
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Address 2</label>
															<div class="col-md-9">
																<input type="text" class="form-control">
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">City</label>
															<div class="col-md-9">
																<input type="text" class="form-control">
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">State</label>
															<div class="col-md-9">
																<input type="text" class="form-control">
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Post Code</label>
															<div class="col-md-9">
																<input type="text" class="form-control">
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Country</label>
															<div class="col-md-9">
																<select class="form-control">
																	<option>Country 1</option>
																	<option>Country 2</option>
																</select>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
											</div>
											<div class="form-actions">
												<div class="row">
													<div class="col-md-6">
														<div class="row">
															<div class="col-md-offset-3 col-md-9">
																<button type="submit" class="btn green">Submit</button>
																<button type="button" class="btn default">Cancel</button>
															</div>
														</div>
													</div>
													<div class="col-md-6">
													</div>
												</div>
											</div>
										</form>
										<!-- END FORM-->
									</div>
								</div>
							</div>
							<div class="tab-pane" id="tab_3">
								<div class="portlet box blue">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-gift"></i>Form Sample
										</div>
										<div class="tools">
											<a href="javascript:;" class="collapse">
											</a>
											<a href="#portlet-config" data-toggle="modal" class="config">
											</a>
											<a href="javascript:;" class="reload">
											</a>
											<a href="javascript:;" class="remove">
											</a>
										</div>
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form class="form-horizontal" role="form">
											<div class="form-body">
												<h2 class="margin-bottom-20"> View User Info - Bob Nilson </h2>
												<h3 class="form-section">Person Info</h3>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">First Name:</label>
															<div class="col-md-9">
																<p class="form-control-static">
																	 Bob
																</p>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Last Name:</label>
															<div class="col-md-9">
																<p class="form-control-static">
																	 Nilson
																</p>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Gender:</label>
															<div class="col-md-9">
																<p class="form-control-static">
																	 Male
																</p>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Date of Birth:</label>
															<div class="col-md-9">
																<p class="form-control-static">
																	 20.01.1984
																</p>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Category:</label>
															<div class="col-md-9">
																<p class="form-control-static">
																	 Category1
																</p>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Membership:</label>
															<div class="col-md-9">
																<p class="form-control-static">
																	 Free
																</p>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<h3 class="form-section">Address</h3>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Address:</label>
															<div class="col-md-9">
																<p class="form-control-static">
																	 #24 Sun Park Avenue, Rolton Str
																</p>
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">City:</label>
															<div class="col-md-9">
																<p class="form-control-static">
																	 New York
																</p>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">State:</label>
															<div class="col-md-9">
																<p class="form-control-static">
																	 New York
																</p>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Post Code:</label>
															<div class="col-md-9">
																<p class="form-control-static">
																	 457890
																</p>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Country:</label>
															<div class="col-md-9">
																<p class="form-control-static">
																	 USA
																</p>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
											</div>
											<div class="form-actions">
												<div class="row">
													<div class="col-md-6">
														<div class="row">
															<div class="col-md-offset-3 col-md-9">
																<button type="submit" class="btn green"><i class="fa fa-pencil"></i> Edit</button>
																<button type="button" class="btn default">Cancel</button>
															</div>
														</div>
													</div>
													<div class="col-md-6">
													</div>
												</div>
											</div>
										</form>
										<!-- END FORM-->
									</div>
								</div>
								<div class="portlet light bordered">
									<div class="portlet-title">
										<div class="caption">
											<i class="icon-equalizer font-green-haze"></i>
											<span class="caption-subject font-green-haze bold uppercase">Form Sample</span>
											<span class="caption-helper">some info...</span>
										</div>
										<div class="tools">
											<a href="" class="collapse">
											</a>
											<a href="#portlet-config" data-toggle="modal" class="config">
											</a>
											<a href="" class="reload">
											</a>
											<a href="" class="remove">
											</a>
										</div>
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form class="form-horizontal" role="form">
											<div class="form-body">
												<h2 class="margin-bottom-20"> View User Info - Bob Nilson </h2>
												<h3 class="form-section">Person Info</h3>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">First Name:</label>
															<div class="col-md-9">
																<p class="form-control-static">
																	 Bob
																</p>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Last Name:</label>
															<div class="col-md-9">
																<p class="form-control-static">
																	 Nilson
																</p>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Gender:</label>
															<div class="col-md-9">
																<p class="form-control-static">
																	 Male
																</p>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Date of Birth:</label>
															<div class="col-md-9">
																<p class="form-control-static">
																	 20.01.1984
																</p>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Category:</label>
															<div class="col-md-9">
																<p class="form-control-static">
																	 Category1
																</p>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Membership:</label>
															<div class="col-md-9">
																<p class="form-control-static">
																	 Free
																</p>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<h3 class="form-section">Address</h3>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Address:</label>
															<div class="col-md-9">
																<p class="form-control-static">
																	 #24 Sun Park Avenue, Rolton Str
																</p>
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">City:</label>
															<div class="col-md-9">
																<p class="form-control-static">
																	 New York
																</p>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">State:</label>
															<div class="col-md-9">
																<p class="form-control-static">
																	 New York
																</p>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Post Code:</label>
															<div class="col-md-9">
																<p class="form-control-static">
																	 457890
																</p>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Country:</label>
															<div class="col-md-9">
																<p class="form-control-static">
																	 USA
																</p>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
											</div>
											<div class="form-actions">
												<div class="row">
													<div class="col-md-6">
														<div class="row">
															<div class="col-md-offset-3 col-md-9">
																<button type="submit" class="btn green"><i class="fa fa-pencil"></i> Edit</button>
																<button type="button" class="btn default">Cancel</button>
															</div>
														</div>
													</div>
													<div class="col-md-6">
													</div>
												</div>
											</div>
										</form>
										<!-- END FORM-->
									</div>
								</div>
							</div>
							<div class="tab-pane" id="tab_4">
								<div class="portlet box blue">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-gift"></i>Form Sample
										</div>
										<div class="tools">
											<a href="javascript:;" class="collapse">
											</a>
											<a href="#portlet-config" data-toggle="modal" class="config">
											</a>
											<a href="javascript:;" class="reload">
											</a>
											<a href="javascript:;" class="remove">
											</a>
										</div>
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="#" class="form-horizontal form-row-seperated">
											<div class="form-body">
												<div class="form-group">
													<label class="control-label col-md-3">First Name</label>
													<div class="col-md-9">
														<input type="text" placeholder="small" class="form-control"/>
														<span class="help-block">
														This is inline help </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Last Name</label>
													<div class="col-md-9">
														<input type="text" placeholder="medium" class="form-control"/>
														<span class="help-block">
														This is inline help </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Gender</label>
													<div class="col-md-9">
														<select class="form-control">
															<option value="">Male</option>
															<option value="">Female</option>
														</select>
														<span class="help-block">
														Select your gender. </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Date of Birth</label>
													<div class="col-md-9">
														<input type="text" class="form-control" placeholder="dd/mm/yyyy">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Category</label>
													<div class="col-md-9">
														<select class="form-control select2_category">
															<option value="Category 1">Category 1</option>
															<option value="Category 2">Category 2</option>
															<option value="Category 3">Category 5</option>
															<option value="Category 4">Category 4</option>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Multi-Value Select</label>
													<div class="col-md-9">
														<select class="form-control select2_sample1" multiple>
															<optgroup label="NFC EAST">
															<option>Dallas Cowboys</option>
															<option>New York Giants</option>
															<option>Philadelphia Eagles</option>
															<option>Washington Redskins</option>
															</optgroup>
															<optgroup label="NFC NORTH">
															<option>Chicago Bears</option>
															<option>Detroit Lions</option>
															<option>Green Bay Packers</option>
															<option>Minnesota Vikings</option>
															</optgroup>
															<optgroup label="NFC SOUTH">
															<option>Atlanta Falcons</option>
															<option>Carolina Panthers</option>
															<option>New Orleans Saints</option>
															<option>Tampa Bay Buccaneers</option>
															</optgroup>
															<optgroup label="NFC WEST">
															<option>Arizona Cardinals</option>
															<option>St. Louis Rams</option>
															<option>San Francisco 49ers</option>
															<option>Seattle Seahawks</option>
															</optgroup>
															<optgroup label="AFC EAST">
															<option>Buffalo Bills</option>
															<option>Miami Dolphins</option>
															<option>New England Patriots</option>
															<option>New York Jets</option>
															</optgroup>
															<optgroup label="AFC NORTH">
															<option>Baltimore Ravens</option>
															<option>Cincinnati Bengals</option>
															<option>Cleveland Browns</option>
															<option>Pittsburgh Steelers</option>
															</optgroup>
															<optgroup label="AFC SOUTH">
															<option>Houston Texans</option>
															<option>Indianapolis Colts</option>
															<option>Jacksonville Jaguars</option>
															<option>Tennessee Titans</option>
															</optgroup>
															<optgroup label="AFC WEST">
															<option>Denver Broncos</option>
															<option>Kansas City Chiefs</option>
															<option>Oakland Raiders</option>
															<option>San Diego Chargers</option>
															</optgroup>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Loading Data</label>
													<div class="col-md-9">
														<input type="hidden" class="form-control select2_sample2">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Tags Support List</label>
													<div class="col-md-9">
														<input type="hidden" class="form-control select2_sample3" value="red, blue">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Membership</label>
													<div class="col-md-9">
														<div class="radio-list">
															<label>
															<input type="radio" name="optionsRadios2" value="option1"/>
															Free </label>
															<label>
															<input type="radio" name="optionsRadios2" value="option2" checked/>
															Professional </label>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Street</label>
													<div class="col-md-9">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">City</label>
													<div class="col-md-9">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">State</label>
													<div class="col-md-9">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Post Code</label>
													<div class="col-md-9">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="form-group last">
													<label class="control-label col-md-3">Country</label>
													<div class="col-md-9">
														<select class="form-control">
														</select>
													</div>
												</div>
											</div>
											<div class="form-actions">
												<div class="row">
													<div class="col-md-offset-3 col-md-9">
														<button type="submit" class="btn green"><i class="fa fa-pencil"></i> 1Edit</button>
														<button type="button" class="btn default">Cancel</button>
													</div>
												</div>
											</div>
										</form>
										<!-- END FORM-->
									</div>
								</div>
								<div class="portlet light bordered form-fit">
									<div class="portlet-title">
										<div class="caption">
											<i class="icon-equalizer font-green-haze"></i>
											<span class="caption-subject font-green-haze bold uppercase">Form Sample</span>
											<span class="caption-helper">some info...</span>
										</div>
										<div class="actions">
											<a href="javascript:;" class="btn btn-circle btn-default btn-sm">
											<i class="fa fa-pencil"></i> Edit </a>
											<a href="javascript:;" class="btn btn-circle btn-default btn-sm">
											<i class="fa fa-plus"></i> Add </a>
										</div>
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="#" class="form-horizontal form-row-seperated">
											<div class="form-body">
												<div class="form-group">
													<label class="control-label col-md-3">First Name</label>
													<div class="col-md-9">
														<input type="text" placeholder="small" class="form-control"/>
														<span class="help-block">
														This is inline help </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Last Name</label>
													<div class="col-md-9">
														<input type="text" placeholder="medium" class="form-control"/>
														<span class="help-block">
														This is inline help </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Gender</label>
													<div class="col-md-9">
														<select class="form-control">
															<option value="">Male</option>
															<option value="">Female</option>
														</select>
														<span class="help-block">
														Select your gender. </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Date of Birth</label>
													<div class="col-md-9">
														<input type="text" class="form-control" placeholder="dd/mm/yyyy">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Category</label>
													<div class="col-md-9">
														<select class="form-control select2_category">
															<option value="Category 1">Category 1</option>
															<option value="Category 2">Category 2</option>
															<option value="Category 3">Category 5</option>
															<option value="Category 4">Category 4</option>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Multi-Value Select</label>
													<div class="col-md-9">
														<select class="form-control select2_sample1" multiple>
															<optgroup label="NFC EAST">
															<option>Dallas Cowboys</option>
															<option>New York Giants</option>
															<option>Philadelphia Eagles</option>
															<option>Washington Redskins</option>
															</optgroup>
															<optgroup label="NFC NORTH">
															<option>Chicago Bears</option>
															<option>Detroit Lions</option>
															<option>Green Bay Packers</option>
															<option>Minnesota Vikings</option>
															</optgroup>
															<optgroup label="NFC SOUTH">
															<option>Atlanta Falcons</option>
															<option>Carolina Panthers</option>
															<option>New Orleans Saints</option>
															<option>Tampa Bay Buccaneers</option>
															</optgroup>
															<optgroup label="NFC WEST">
															<option>Arizona Cardinals</option>
															<option>St. Louis Rams</option>
															<option>San Francisco 49ers</option>
															<option>Seattle Seahawks</option>
															</optgroup>
															<optgroup label="AFC EAST">
															<option>Buffalo Bills</option>
															<option>Miami Dolphins</option>
															<option>New England Patriots</option>
															<option>New York Jets</option>
															</optgroup>
															<optgroup label="AFC NORTH">
															<option>Baltimore Ravens</option>
															<option>Cincinnati Bengals</option>
															<option>Cleveland Browns</option>
															<option>Pittsburgh Steelers</option>
															</optgroup>
															<optgroup label="AFC SOUTH">
															<option>Houston Texans</option>
															<option>Indianapolis Colts</option>
															<option>Jacksonville Jaguars</option>
															<option>Tennessee Titans</option>
															</optgroup>
															<optgroup label="AFC WEST">
															<option>Denver Broncos</option>
															<option>Kansas City Chiefs</option>
															<option>Oakland Raiders</option>
															<option>San Diego Chargers</option>
															</optgroup>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Loading Data</label>
													<div class="col-md-9">
														<input type="hidden" class="form-control select2_sample2">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Tags Support List</label>
													<div class="col-md-9">
														<input type="hidden" class="form-control select2_sample3" value="red, blue">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Membership</label>
													<div class="col-md-9">
														<div class="radio-list">
															<label>
															<input type="radio" name="optionsRadios2" value="option1"/>
															Free </label>
															<label>
															<input type="radio" name="optionsRadios2" value="option2" checked/>
															Professional </label>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Street</label>
													<div class="col-md-9">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">City</label>
													<div class="col-md-9">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">State</label>
													<div class="col-md-9">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Post Code</label>
													<div class="col-md-9">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="form-group last">
													<label class="control-label col-md-3">Country</label>
													<div class="col-md-9">
														<select class="form-control">
														</select>
													</div>
												</div>
											</div>
											<div class="form-actions">
												<div class="row">
													<div class="col-md-offset-3 col-md-9">
														<button type="submit" class="btn green"><i class="fa fa-pencil"></i> 1Edit</button>
														<button type="button" class="btn default">Cancel</button>
													</div>
												</div>
											</div>
										</form>
										<!-- END FORM-->
									</div>
								</div>
							</div>
							<div class="tab-pane" id="tab_5">
								<div class="portlet box blue ">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-gift"></i>Form Sample
										</div>
										<div class="tools">
											<a href="javascript:;" class="collapse">
											</a>
											<a href="#portlet-config" data-toggle="modal" class="config">
											</a>
											<a href="javascript:;" class="reload">
											</a>
											<a href="javascript:;" class="remove">
											</a>
										</div>
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="#" class="form-horizontal form-bordered">
											<div class="form-body">
												<div class="form-group">
													<label class="control-label col-md-3">First Name</label>
													<div class="col-md-9">
														<input type="text" placeholder="small" class="form-control"/>
														<span class="help-block">
														This is inline help </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Last Name</label>
													<div class="col-md-9">
														<input type="text" placeholder="medium" class="form-control"/>
														<span class="help-block">
														This is inline help </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Gender</label>
													<div class="col-md-9">
														<select class="form-control">
															<option value="">Male</option>
															<option value="">Female</option>
														</select>
														<span class="help-block">
														Select your gender. </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Date of Birth</label>
													<div class="col-md-9">
														<input type="text" class="form-control" placeholder="dd/mm/yyyy">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Category</label>
													<div class="col-md-9">
														<select class="form-control select2_category">
															<option value="Category 1">Category 1</option>
															<option value="Category 2">Category 2</option>
															<option value="Category 3">Category 5</option>
															<option value="Category 4">Category 4</option>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Multi-Value Select</label>
													<div class="col-md-9">
														<select class="form-control select2_sample1" multiple>
															<optgroup label="NFC EAST">
															<option>Dallas Cowboys</option>
															<option>New York Giants</option>
															<option>Philadelphia Eagles</option>
															<option>Washington Redskins</option>
															</optgroup>
															<optgroup label="NFC NORTH">
															<option>Chicago Bears</option>
															<option>Detroit Lions</option>
															<option>Green Bay Packers</option>
															<option>Minnesota Vikings</option>
															</optgroup>
															<optgroup label="NFC SOUTH">
															<option>Atlanta Falcons</option>
															<option>Carolina Panthers</option>
															<option>New Orleans Saints</option>
															<option>Tampa Bay Buccaneers</option>
															</optgroup>
															<optgroup label="NFC WEST">
															<option>Arizona Cardinals</option>
															<option>St. Louis Rams</option>
															<option>San Francisco 49ers</option>
															<option>Seattle Seahawks</option>
															</optgroup>
															<optgroup label="AFC EAST">
															<option>Buffalo Bills</option>
															<option>Miami Dolphins</option>
															<option>New England Patriots</option>
															<option>New York Jets</option>
															</optgroup>
															<optgroup label="AFC NORTH">
															<option>Baltimore Ravens</option>
															<option>Cincinnati Bengals</option>
															<option>Cleveland Browns</option>
															<option>Pittsburgh Steelers</option>
															</optgroup>
															<optgroup label="AFC SOUTH">
															<option>Houston Texans</option>
															<option>Indianapolis Colts</option>
															<option>Jacksonville Jaguars</option>
															<option>Tennessee Titans</option>
															</optgroup>
															<optgroup label="AFC WEST">
															<option>Denver Broncos</option>
															<option>Kansas City Chiefs</option>
															<option>Oakland Raiders</option>
															<option>San Diego Chargers</option>
															</optgroup>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Loading Data</label>
													<div class="col-md-9">
														<input type="hidden" class="form-control select2_sample2">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Tags Support List</label>
													<div class="col-md-9">
														<input type="hidden" class="form-control select2_sample3" value="red, blue">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Membership</label>
													<div class="col-md-9">
														<div class="radio-list">
															<label>
															<input type="radio" name="optionsRadios2" value="option1"/>
															Free </label>
															<label>
															<input type="radio" name="optionsRadios2" value="option2" checked/>
															Professional </label>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Street</label>
													<div class="col-md-9">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">City</label>
													<div class="col-md-9">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">State</label>
													<div class="col-md-9">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Post Code</label>
													<div class="col-md-9">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="form-group last">
													<label class="control-label col-md-3">Country</label>
													<div class="col-md-9">
														<select class="form-control">
														</select>
													</div>
												</div>
											</div>
											<div class="form-actions">
												<div class="row">
													<div class="col-md-12">
														<div class="row">
															<div class="col-md-offset-3 col-md-9">
																<button type="submit" class="btn green"><i class="fa fa-check"></i> Submit</button>
																<button type="button" class="btn default">Cancel</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</form>
										<!-- END FORM-->
									</div>
								</div>
								<div class="portlet light bordered form-fit">
									<div class="portlet-title">
										<div class="caption">
											<i class="icon-equalizer font-blue-hoki"></i>
											<span class="caption-subject font-blue-hoki bold uppercase">Form Sample</span>
											<span class="caption-helper">demo form...</span>
										</div>
										<div class="actions">
											<a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
											<i class="icon-cloud-upload"></i>
											</a>
											<a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
											<i class="icon-wrench"></i>
											</a>
											<a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
											<i class="icon-trash"></i>
											</a>
										</div>
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="#" class="form-horizontal form-bordered">
											<div class="form-body">
												<div class="form-group">
													<label class="control-label col-md-3">First Name</label>
													<div class="col-md-9">
														<input type="text" placeholder="small" class="form-control"/>
														<span class="help-block">
														This is inline help </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Last Name</label>
													<div class="col-md-9">
														<input type="text" placeholder="medium" class="form-control"/>
														<span class="help-block">
														This is inline help </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Gender</label>
													<div class="col-md-9">
														<select class="form-control">
															<option value="">Male</option>
															<option value="">Female</option>
														</select>
														<span class="help-block">
														Select your gender. </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Date of Birth</label>
													<div class="col-md-9">
														<input type="text" class="form-control" placeholder="dd/mm/yyyy">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Category</label>
													<div class="col-md-9">
														<select class="form-control select2_category">
															<option value="Category 1">Category 1</option>
															<option value="Category 2">Category 2</option>
															<option value="Category 3">Category 5</option>
															<option value="Category 4">Category 4</option>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Multi-Value Select</label>
													<div class="col-md-9">
														<select class="form-control select2_sample1" multiple>
															<optgroup label="NFC EAST">
															<option>Dallas Cowboys</option>
															<option>New York Giants</option>
															<option>Philadelphia Eagles</option>
															<option>Washington Redskins</option>
															</optgroup>
															<optgroup label="NFC NORTH">
															<option>Chicago Bears</option>
															<option>Detroit Lions</option>
															<option>Green Bay Packers</option>
															<option>Minnesota Vikings</option>
															</optgroup>
															<optgroup label="NFC SOUTH">
															<option>Atlanta Falcons</option>
															<option>Carolina Panthers</option>
															<option>New Orleans Saints</option>
															<option>Tampa Bay Buccaneers</option>
															</optgroup>
															<optgroup label="NFC WEST">
															<option>Arizona Cardinals</option>
															<option>St. Louis Rams</option>
															<option>San Francisco 49ers</option>
															<option>Seattle Seahawks</option>
															</optgroup>
															<optgroup label="AFC EAST">
															<option>Buffalo Bills</option>
															<option>Miami Dolphins</option>
															<option>New England Patriots</option>
															<option>New York Jets</option>
															</optgroup>
															<optgroup label="AFC NORTH">
															<option>Baltimore Ravens</option>
															<option>Cincinnati Bengals</option>
															<option>Cleveland Browns</option>
															<option>Pittsburgh Steelers</option>
															</optgroup>
															<optgroup label="AFC SOUTH">
															<option>Houston Texans</option>
															<option>Indianapolis Colts</option>
															<option>Jacksonville Jaguars</option>
															<option>Tennessee Titans</option>
															</optgroup>
															<optgroup label="AFC WEST">
															<option>Denver Broncos</option>
															<option>Kansas City Chiefs</option>
															<option>Oakland Raiders</option>
															<option>San Diego Chargers</option>
															</optgroup>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Loading Data</label>
													<div class="col-md-9">
														<input type="hidden" class="form-control select2_sample2">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Tags Support List</label>
													<div class="col-md-9">
														<input type="hidden" class="form-control select2_sample3" value="red, blue">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Membership</label>
													<div class="col-md-9">
														<div class="radio-list">
															<label>
															<input type="radio" name="optionsRadios2" value="option1"/>
															Free </label>
															<label>
															<input type="radio" name="optionsRadios2" value="option2" checked/>
															Professional </label>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Street</label>
													<div class="col-md-9">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">City</label>
													<div class="col-md-9">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">State</label>
													<div class="col-md-9">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Post Code</label>
													<div class="col-md-9">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="form-group last">
													<label class="control-label col-md-3">Country</label>
													<div class="col-md-9">
														<select class="form-control">
														</select>
													</div>
												</div>
											</div>
											<div class="form-actions">
												<div class="row">
													<div class="col-md-offset-3 col-md-9">
														<button type="submit" class="btn green"><i class="fa fa-check"></i> Submit</button>
														<button type="button" class="btn default">Cancel</button>
													</div>
												</div>
											</div>
										</form>
										<!-- END FORM-->
									</div>
								</div>
							</div>
							<div class="tab-pane" id="tab_6">
								<div class="portlet box blue ">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-gift"></i>Form Sample
										</div>
										<div class="tools">
											<a href="javascript:;" class="collapse">
											</a>
											<a href="#portlet-config" data-toggle="modal" class="config">
											</a>
											<a href="javascript:;" class="reload">
											</a>
											<a href="javascript:;" class="remove">
											</a>
										</div>
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="#" class="form-horizontal form-bordered form-row-stripped">
											<div class="form-body">
												<div class="form-group">
													<label class="control-label col-md-3">First Name</label>
													<div class="col-md-9">
														<input type="text" placeholder="small" class="form-control"/>
														<span class="help-block">
														This is inline help </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Last Name</label>
													<div class="col-md-9">
														<input type="text" placeholder="medium" class="form-control"/>
														<span class="help-block">
														This is inline help </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Gender</label>
													<div class="col-md-9">
														<select class="form-control">
															<option value="">Male</option>
															<option value="">Female</option>
														</select>
														<span class="help-block">
														Select your gender. </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Date of Birth</label>
													<div class="col-md-9">
														<input type="text" class="form-control" placeholder="dd/mm/yyyy">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Category</label>
													<div class="col-md-9">
														<select class="form-control select2_category">
															<option value="Category 1">Category 1</option>
															<option value="Category 2">Category 2</option>
															<option value="Category 3">Category 5</option>
															<option value="Category 4">Category 4</option>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Multi-Value Select</label>
													<div class="col-md-9">
														<select class="form-control select2_sample1" multiple>
															<optgroup label="NFC EAST">
															<option>Dallas Cowboys</option>
															<option>New York Giants</option>
															<option>Philadelphia Eagles</option>
															<option>Washington Redskins</option>
															</optgroup>
															<optgroup label="NFC NORTH">
															<option>Chicago Bears</option>
															<option>Detroit Lions</option>
															<option>Green Bay Packers</option>
															<option>Minnesota Vikings</option>
															</optgroup>
															<optgroup label="NFC SOUTH">
															<option>Atlanta Falcons</option>
															<option>Carolina Panthers</option>
															<option>New Orleans Saints</option>
															<option>Tampa Bay Buccaneers</option>
															</optgroup>
															<optgroup label="NFC WEST">
															<option>Arizona Cardinals</option>
															<option>St. Louis Rams</option>
															<option>San Francisco 49ers</option>
															<option>Seattle Seahawks</option>
															</optgroup>
															<optgroup label="AFC EAST">
															<option>Buffalo Bills</option>
															<option>Miami Dolphins</option>
															<option>New England Patriots</option>
															<option>New York Jets</option>
															</optgroup>
															<optgroup label="AFC NORTH">
															<option>Baltimore Ravens</option>
															<option>Cincinnati Bengals</option>
															<option>Cleveland Browns</option>
															<option>Pittsburgh Steelers</option>
															</optgroup>
															<optgroup label="AFC SOUTH">
															<option>Houston Texans</option>
															<option>Indianapolis Colts</option>
															<option>Jacksonville Jaguars</option>
															<option>Tennessee Titans</option>
															</optgroup>
															<optgroup label="AFC WEST">
															<option>Denver Broncos</option>
															<option>Kansas City Chiefs</option>
															<option>Oakland Raiders</option>
															<option>San Diego Chargers</option>
															</optgroup>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Loading Data</label>
													<div class="col-md-9">
														<input type="hidden" class="form-control select2_sample2">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Tags Support List</label>
													<div class="col-md-9">
														<input type="hidden" class="form-control select2_sample3" value="red, blue">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Membership</label>
													<div class="col-md-9">
														<div class="radio-list">
															<label>
															<input type="radio" name="optionsRadios2" value="option1"/>
															Free </label>
															<label>
															<input type="radio" name="optionsRadios2" value="option2" checked/>
															Professional </label>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Street</label>
													<div class="col-md-9">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">City</label>
													<div class="col-md-9">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">State</label>
													<div class="col-md-9">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Post Code</label>
													<div class="col-md-9">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="form-group last">
													<label class="control-label col-md-3">Country</label>
													<div class="col-md-9">
														<select class="form-control">
														</select>
													</div>
												</div>
											</div>
											<div class="form-actions">
												<div class="row">
													<div class="col-md-offset-3 col-md-9">
														<button type="submit" class="btn green"><i class="fa fa-check"></i> Submit</button>
														<button type="button" class="btn default">Cancel</button>
													</div>
												</div>
											</div>
										</form>
										<!-- END FORM-->
									</div>
								</div>
								<div class="portlet light bordered form-fit">
									<div class="portlet-title">
										<div class="caption">
											<i class="icon-user font-blue-hoki"></i>
											<span class="caption-subject font-blue-hoki bold uppercase">Form Sample</span>
											<span class="caption-helper">demo form...</span>
										</div>
										<div class="actions">
											<a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
											<i class="icon-cloud-upload"></i>
											</a>
											<a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
											<i class="icon-wrench"></i>
											</a>
											<a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
											<i class="icon-trash"></i>
											</a>
										</div>
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="#" class="form-horizontal form-bordered form-row-stripped">
											<div class="form-body">
												<div class="form-group">
													<label class="control-label col-md-3">First Name</label>
													<div class="col-md-9">
														<input type="text" placeholder="small" class="form-control"/>
														<span class="help-block">
														This is inline help </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Last Name</label>
													<div class="col-md-9">
														<input type="text" placeholder="medium" class="form-control"/>
														<span class="help-block">
														This is inline help </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Gender</label>
													<div class="col-md-9">
														<select class="form-control">
															<option value="">Male</option>
															<option value="">Female</option>
														</select>
														<span class="help-block">
														Select your gender. </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Date of Birth</label>
													<div class="col-md-9">
														<input type="text" class="form-control" placeholder="dd/mm/yyyy">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Category</label>
													<div class="col-md-9">
														<select class="form-control select2_category">
															<option value="Category 1">Category 1</option>
															<option value="Category 2">Category 2</option>
															<option value="Category 3">Category 5</option>
															<option value="Category 4">Category 4</option>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Multi-Value Select</label>
													<div class="col-md-9">
														<select class="form-control select2_sample1" multiple>
															<optgroup label="NFC EAST">
															<option>Dallas Cowboys</option>
															<option>New York Giants</option>
															<option>Philadelphia Eagles</option>
															<option>Washington Redskins</option>
															</optgroup>
															<optgroup label="NFC NORTH">
															<option>Chicago Bears</option>
															<option>Detroit Lions</option>
															<option>Green Bay Packers</option>
															<option>Minnesota Vikings</option>
															</optgroup>
															<optgroup label="NFC SOUTH">
															<option>Atlanta Falcons</option>
															<option>Carolina Panthers</option>
															<option>New Orleans Saints</option>
															<option>Tampa Bay Buccaneers</option>
															</optgroup>
															<optgroup label="NFC WEST">
															<option>Arizona Cardinals</option>
															<option>St. Louis Rams</option>
															<option>San Francisco 49ers</option>
															<option>Seattle Seahawks</option>
															</optgroup>
															<optgroup label="AFC EAST">
															<option>Buffalo Bills</option>
															<option>Miami Dolphins</option>
															<option>New England Patriots</option>
															<option>New York Jets</option>
															</optgroup>
															<optgroup label="AFC NORTH">
															<option>Baltimore Ravens</option>
															<option>Cincinnati Bengals</option>
															<option>Cleveland Browns</option>
															<option>Pittsburgh Steelers</option>
															</optgroup>
															<optgroup label="AFC SOUTH">
															<option>Houston Texans</option>
															<option>Indianapolis Colts</option>
															<option>Jacksonville Jaguars</option>
															<option>Tennessee Titans</option>
															</optgroup>
															<optgroup label="AFC WEST">
															<option>Denver Broncos</option>
															<option>Kansas City Chiefs</option>
															<option>Oakland Raiders</option>
															<option>San Diego Chargers</option>
															</optgroup>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Loading Data</label>
													<div class="col-md-9">
														<input type="hidden" class="form-control select2_sample2">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Tags Support List</label>
													<div class="col-md-9">
														<input type="hidden" class="form-control select2_sample3" value="red, blue">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Membership</label>
													<div class="col-md-9">
														<div class="radio-list">
															<label>
															<input type="radio" name="optionsRadios2" value="option1"/>
															Free </label>
															<label>
															<input type="radio" name="optionsRadios2" value="option2" checked/>
															Professional </label>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Street</label>
													<div class="col-md-9">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">City</label>
													<div class="col-md-9">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">State</label>
													<div class="col-md-9">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Post Code</label>
													<div class="col-md-9">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="form-group last">
													<label class="control-label col-md-3">Country</label>
													<div class="col-md-9">
														<select class="form-control">
														</select>
													</div>
												</div>
											</div>
											<div class="form-actions">
												<div class="row">
													<div class="col-md-offset-3 col-md-9">
														<button type="submit" class="btn green"><i class="fa fa-check"></i> Submit</button>
														<button type="button" class="btn default">Cancel</button>
													</div>
												</div>
											</div>
										</form>
										<!-- END FORM-->
									</div>
								</div>
							</div>
							<div class="tab-pane" id="tab_7">
								<div class="portlet box blue ">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-gift"></i>Form Sample
										</div>
										<div class="tools">
											<a href="javascript:;" class="collapse">
											</a>
											<a href="#portlet-config" data-toggle="modal" class="config">
											</a>
											<a href="javascript:;" class="reload">
											</a>
											<a href="javascript:;" class="remove">
											</a>
										</div>
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="#" class="form-horizontal form-bordered form-label-stripped">
											<div class="form-body">
												<div class="form-group">
													<label class="control-label col-md-3">First Name</label>
													<div class="col-md-9">
														<input type="text" placeholder="small" class="form-control"/>
														<span class="help-block">
														This is inline help </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Last Name</label>
													<div class="col-md-9">
														<input type="text" placeholder="medium" class="form-control"/>
														<span class="help-block">
														This is inline help </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Gender</label>
													<div class="col-md-9">
														<select class="form-control">
															<option value="">Male</option>
															<option value="">Female</option>
														</select>
														<span class="help-block">
														Select your gender. </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Date of Birth</label>
													<div class="col-md-9">
														<input type="text" class="form-control" placeholder="dd/mm/yyyy">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Category</label>
													<div class="col-md-9">
														<select class="form-control select2_category">
															<option value="Category 1">Category 1</option>
															<option value="Category 2">Category 2</option>
															<option value="Category 3">Category 5</option>
															<option value="Category 4">Category 4</option>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Multi-Value Select</label>
													<div class="col-md-9">
														<select class="form-control select2_sample1" multiple>
															<optgroup label="NFC EAST">
															<option>Dallas Cowboys</option>
															<option>New York Giants</option>
															<option>Philadelphia Eagles</option>
															<option>Washington Redskins</option>
															</optgroup>
															<optgroup label="NFC NORTH">
															<option>Chicago Bears</option>
															<option>Detroit Lions</option>
															<option>Green Bay Packers</option>
															<option>Minnesota Vikings</option>
															</optgroup>
															<optgroup label="NFC SOUTH">
															<option>Atlanta Falcons</option>
															<option>Carolina Panthers</option>
															<option>New Orleans Saints</option>
															<option>Tampa Bay Buccaneers</option>
															</optgroup>
															<optgroup label="NFC WEST">
															<option>Arizona Cardinals</option>
															<option>St. Louis Rams</option>
															<option>San Francisco 49ers</option>
															<option>Seattle Seahawks</option>
															</optgroup>
															<optgroup label="AFC EAST">
															<option>Buffalo Bills</option>
															<option>Miami Dolphins</option>
															<option>New England Patriots</option>
															<option>New York Jets</option>
															</optgroup>
															<optgroup label="AFC NORTH">
															<option>Baltimore Ravens</option>
															<option>Cincinnati Bengals</option>
															<option>Cleveland Browns</option>
															<option>Pittsburgh Steelers</option>
															</optgroup>
															<optgroup label="AFC SOUTH">
															<option>Houston Texans</option>
															<option>Indianapolis Colts</option>
															<option>Jacksonville Jaguars</option>
															<option>Tennessee Titans</option>
															</optgroup>
															<optgroup label="AFC WEST">
															<option>Denver Broncos</option>
															<option>Kansas City Chiefs</option>
															<option>Oakland Raiders</option>
															<option>San Diego Chargers</option>
															</optgroup>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Loading Data</label>
													<div class="col-md-9">
														<input type="hidden" class="form-control select2_sample2">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Tags Support List</label>
													<div class="col-md-9">
														<input type="hidden" class="form-control select2_sample3" value="red, blue">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Membership</label>
													<div class="col-md-9">
														<div class="radio-list">
															<label>
															<input type="radio" name="optionsRadios2" value="option1"/>
															Free </label>
															<label>
															<input type="radio" name="optionsRadios2" value="option2" checked/>
															Professional </label>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Street</label>
													<div class="col-md-9">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">City</label>
													<div class="col-md-9">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">State</label>
													<div class="col-md-9">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Post Code</label>
													<div class="col-md-9">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="form-group last">
													<label class="control-label col-md-3">Country</label>
													<div class="col-md-9">
														<select class="form-control">
														</select>
													</div>
												</div>
											</div>
											<div class="form-actions">
												<div class="row">
													<div class="col-md-offset-3 col-md-9">
														<button type="submit" class="btn green"><i class="fa fa-check"></i> Submit</button>
														<button type="button" class="btn default">Cancel</button>
													</div>
												</div>
											</div>
										</form>
										<!-- END FORM-->
									</div>
								</div>
								<div class="portlet light bordered form-fit">
									<div class="portlet-title">
										<div class="caption">
											<i class="icon-user font-blue-hoki"></i>
											<span class="caption-subject font-blue-hoki bold uppercase">Form Sample</span>
											<span class="caption-helper">demo form...</span>
										</div>
										<div class="actions">
											<a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
											<i class="icon-cloud-upload"></i>
											</a>
											<a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
											<i class="icon-wrench"></i>
											</a>
											<a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
											<i class="icon-trash"></i>
											</a>
										</div>
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="#" class="form-horizontal form-bordered form-label-stripped">
											<div class="form-body">
												<div class="form-group">
													<label class="control-label col-md-3">First Name</label>
													<div class="col-md-9">
														<input type="text" placeholder="small" class="form-control"/>
														<span class="help-block">
														This is inline help </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Last Name</label>
													<div class="col-md-9">
														<input type="text" placeholder="medium" class="form-control"/>
														<span class="help-block">
														This is inline help </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Gender</label>
													<div class="col-md-9">
														<select class="form-control">
															<option value="">Male</option>
															<option value="">Female</option>
														</select>
														<span class="help-block">
														Select your gender. </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Date of Birth</label>
													<div class="col-md-9">
														<input type="text" class="form-control" placeholder="dd/mm/yyyy">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Category</label>
													<div class="col-md-9">
														<select class="form-control select2_category">
															<option value="Category 1">Category 1</option>
															<option value="Category 2">Category 2</option>
															<option value="Category 3">Category 5</option>
															<option value="Category 4">Category 4</option>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Multi-Value Select</label>
													<div class="col-md-9">
														<select class="form-control select2_sample1" multiple>
															<optgroup label="NFC EAST">
															<option>Dallas Cowboys</option>
															<option>New York Giants</option>
															<option>Philadelphia Eagles</option>
															<option>Washington Redskins</option>
															</optgroup>
															<optgroup label="NFC NORTH">
															<option>Chicago Bears</option>
															<option>Detroit Lions</option>
															<option>Green Bay Packers</option>
															<option>Minnesota Vikings</option>
															</optgroup>
															<optgroup label="NFC SOUTH">
															<option>Atlanta Falcons</option>
															<option>Carolina Panthers</option>
															<option>New Orleans Saints</option>
															<option>Tampa Bay Buccaneers</option>
															</optgroup>
															<optgroup label="NFC WEST">
															<option>Arizona Cardinals</option>
															<option>St. Louis Rams</option>
															<option>San Francisco 49ers</option>
															<option>Seattle Seahawks</option>
															</optgroup>
															<optgroup label="AFC EAST">
															<option>Buffalo Bills</option>
															<option>Miami Dolphins</option>
															<option>New England Patriots</option>
															<option>New York Jets</option>
															</optgroup>
															<optgroup label="AFC NORTH">
															<option>Baltimore Ravens</option>
															<option>Cincinnati Bengals</option>
															<option>Cleveland Browns</option>
															<option>Pittsburgh Steelers</option>
															</optgroup>
															<optgroup label="AFC SOUTH">
															<option>Houston Texans</option>
															<option>Indianapolis Colts</option>
															<option>Jacksonville Jaguars</option>
															<option>Tennessee Titans</option>
															</optgroup>
															<optgroup label="AFC WEST">
															<option>Denver Broncos</option>
															<option>Kansas City Chiefs</option>
															<option>Oakland Raiders</option>
															<option>San Diego Chargers</option>
															</optgroup>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Loading Data</label>
													<div class="col-md-9">
														<input type="hidden" class="form-control select2_sample2">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Tags Support List</label>
													<div class="col-md-9">
														<input type="hidden" class="form-control select2_sample3" value="red, blue">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Membership</label>
													<div class="col-md-9">
														<div class="radio-list">
															<label>
															<input type="radio" name="optionsRadios2" value="option1"/>
															Free </label>
															<label>
															<input type="radio" name="optionsRadios2" value="option2" checked/>
															Professional </label>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Street</label>
													<div class="col-md-9">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">City</label>
													<div class="col-md-9">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">State</label>
													<div class="col-md-9">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Post Code</label>
													<div class="col-md-9">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="form-group last">
													<label class="control-label col-md-3">Country</label>
													<div class="col-md-9">
														<select class="form-control">
														</select>
													</div>
												</div>
											</div>
											<div class="form-actions">
												<div class="row">
													<div class="col-md-offset-3 col-md-9">
														<button type="submit" class="btn green"><i class="fa fa-check"></i> Submit</button>
														<button type="button" class="btn default">Cancel</button>
													</div>
												</div>
											</div>
										</form>
										<!-- END FORM-->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
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
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="../../assets/global/plugins/select2/select2.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../../assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="../../assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="../../assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<script src="../../assets/admin/pages/scripts/form-samples.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {    
   // initiate layout and plugins
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
   FormSamples.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>