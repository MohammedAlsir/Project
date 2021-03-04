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
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Metronic | Admin Dashboard Template</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
@include('css.main')
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
<body class="page-md page-header-fixed page-sidebar-closed-hide-logo page-sidebar-closed-hide-logo">
<!-- BEGIN HEADER -->
<div class="page-header md-shadow-z-1-i navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="index.html">
			<img src="../../assets/admin/layout4/img/logo-light." alt="logo" class="logo-default"/>
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
		<!-- BEGIN PAGE TOP -->
		<div class="page-top">
			<!-- BEGIN TOP NAVIGATION MENU -->
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">
					<li class="separator hide">
					</li>
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
					<li class="dropdown dropdown-user dropdown-dark">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<span class="username username-hide-on-mobile">
						عبدالله خالد </span>
						<!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
						<img alt="" class="img-circle" src="../../assets/admin/layout4/img/avatar9.jpg"/>
						</a>
						<ul class="dropdown-menu dropdown-menu-default">
							

							<li>
								<a href="login.html">
								<i class="icon-key"></i>تسجيل الخروج</a>
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
	@include('layout.sidebar_record')
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEAD -->
			<div class="page-head">
				<!-- BEGIN PAGE TITLE -->
				<div class="page-title">
					<h1>لوحة التحكم  <span style="font-size: 15px;
                        font-weight: bold;
                        color: red;margin-right: 10px;">قسم التأمينات</span></h1>
				</div>
				<!-- END PAGE TITLE -->
				
			</div>
			<!-- END PAGE HEAD -->
			<!-- BEGIN PAGE BREADCRUMB -->
			<ul class="page-breadcrumb breadcrumb hide">
				<li>
					<a href="javascript:;">Home</a><i class="fa fa-circle"></i>
				</li>
				<li class="active">
					 Dashboard
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
			
			<!-- END PAGE CONTENT INNER -->
			{{-- BIGIN CHART --}}
			<div class="row margin-top-10">
				<div class="portlet box red">
					<div class="portlet-title">
						<div class="caption">
							<i class="fa fa-cogs"></i>Simple Table
						</div>
						
					</div>
					<div class="portlet-body">
						<div class="table-scrollable">
							<table class="table table-hover">
							<thead>
							<tr>
								<th>
									 #
								</th>
								<th>
									  الاسم
								</th>
								<th>
									 اسم الوالدة
								</th>
								<th>
									 رقم التأمين
								</th>
								<th>
									 المزيد
								</th>
								<th>
									العمليات
							   </th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>
									1
								</td>
								<td>
									 محمد سراج
								</td>
								<td>
									 مقبولة فارس
								</td>
								<td>
									 124558751
								</td>
								<td>
									<button>المزيد</button>	
								</td>
								<td>
									<span class="label label-sm label-success">
									موافقة </span>
									<span class="label label-sm label-danger">
										رفض </span>
								</td>
							</tr>
							<tr>
								<td>
									1
								</td>
								<td>
									 محمد سراج
								</td>
								<td>
									 مقبولة فارس
								</td>
								<td>
									 124558751
								</td>
								<td>
									<button>المزيد</button>	
								</td>
								<td>
									<span class="label label-sm label-success">
									موافقة </span>
									<span class="label label-sm label-danger">
										رفض </span>
								</td>
							</tr>
							<tr>
								<td>
									1
								</td>
								<td>
									 محمد سراج
								</td>
								<td>
									 مقبولة فارس
								</td>
								<td>
									 124558751
								</td>
								<td>
									<button>المزيد</button>	
								</td>
								<td>
									<span class="label label-sm label-success">
									موافقة </span>
									<span class="label label-sm label-danger">
										رفض </span>
								</td>
							</tr>
							<tr>
								<td>
									1
								</td>
								<td>
									 محمد سراج
								</td>
								<td>
									 مقبولة فارس
								</td>
								<td>
									 124558751
								</td>
								<td>
									<button>المزيد</button>	
								</td>
								<td>
									<span class="label label-sm label-success">
									موافقة </span>
									<span class="label label-sm label-danger">
										رفض </span>
								</td>
							</tr>
							<tr>
								<td>
									1
								</td>
								<td>
									 محمد سراج
								</td>
								<td>
									 مقبولة فارس
								</td>
								<td>
									 124558751
								</td>
								<td>
									<button>المزيد</button>	
								</td>
								<td>
									<span class="label label-sm label-success">
									موافقة </span>
									<span class="label label-sm label-danger">
										رفض </span>
								</td>
							</tr>
						
						
							</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			{{-- END   CHART --}}
		</div>
	</div>
	
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="page-footer-inner">
		 2021 &copy; كل الحقوق محفوظة.
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>
<!-- END FOOTER -->
@include('js.main')

</body>
<!-- END BODY -->
</html>