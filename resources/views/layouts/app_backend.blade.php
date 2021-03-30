<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from smarthr.dreamguystech.com/smarthr-laravel/smarthr-orange/public/index by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Feb 2021 11:48:37 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Dashboard - HRMS admin template</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('/backend/img/favicon.png')}}">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('/backend/css/bootstrap.min.css')}}">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{asset('/backend/css/font-awesome.min.css')}}">
		
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="{{asset('/backend/css/line-awesome.min.css')}}">
		
		<!-- Chart CSS -->
		<link rel="stylesheet" href="{{asset('/backend/css/morris.css')}}">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="{{asset('/backend/css/style.css')}}">
	
    </head>
	
    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <div class="header">
			
				<!-- Logo -->
                <div class="header-left">
                    <a href="/backend/index" class="logo">
						<img src="https://smarthr.dreamguystech.com/smarthr-laravel/smarthr-orange/public/img/logo.png" width="40" height="40" alt="">
					</a>
                </div>
				<!-- /Logo -->
				
				<a id="toggle_btn" href="javascript:void(0);">
					<span class="bar-icon">
						<span></span>
						<span></span>
						<span></span>
					</span>
				</a>
				
				<!-- Header Title -->
                <div class="page-title-box">
					<h3>Dreamguy's Technologies</h3>
                </div>
				<!-- /Header Title -->
				
				<a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>
				
				<!-- Header Menu -->
				<ul class="nav user-menu">
				
					<!-- Search -->
					<li class="nav-item">
						<div class="top-nav-search">
							<a href="javascript:void(0);" class="responsive-search">
								<i class="fa fa-search"></i>
						   </a>
							<form action="https://smarthr.dreamguystech.com/smarthr-laravel/smarthr-orange/public/search">
								<input class="form-control" type="text" placeholder="Search here">
								<button class="btn" type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
					</li>
					<!-- /Search -->
				
					<!-- Flag -->
					<li class="nav-item dropdown has-arrow flag-nav">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">
							<img src="https://smarthr.dreamguystech.com/smarthr-laravel/smarthr-orange/public/img/flags/us.png" alt="" height="20"> <span>English</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="https://smarthr.dreamguystech.com/smarthr-laravel/smarthr-orange/public/img/flags/us.png" alt="" height="16"> English
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="https://smarthr.dreamguystech.com/smarthr-laravel/smarthr-orange/public/img/flags/fr.png" alt="" height="16"> French
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="https://smarthr.dreamguystech.com/smarthr-laravel/smarthr-orange/public/img/flags/es.png" alt="" height="16"> Spanish
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="https://smarthr.dreamguystech.com/smarthr-laravel/smarthr-orange/public/img/flags/de.png" alt="" height="16"> German
							</a>
						</div>
					</li>
					<!-- /Flag -->
				
					<!-- Notifications -->
					<li class="nav-item dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<i class="fa fa-bell-o"></i> <span class="badge badge-pill">3</span>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Notifications</span>
								<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="/backend/activities">
											<div class="media">
												<span class="avatar">
													<img alt="" src="https://smarthr.dreamguystech.com/smarthr-laravel/smarthr-orange/public/img/profiles/avatar-02.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
													<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="/backend/activities">
											<div class="media">
												<span class="avatar">
													<img alt="" src="https://smarthr.dreamguystech.com/smarthr-laravel/smarthr-orange/public/img/profiles/avatar-03.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
													<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="/backend/activities">
											<div class="media">
												<span class="avatar">
													<img alt="" src="https://smarthr.dreamguystech.com/smarthr-laravel/smarthr-orange/public/img/profiles/avatar-06.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
													<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="/backend/activities">
											<div class="media">
												<span class="avatar">
													<img alt="" src="https://smarthr.dreamguystech.com/smarthr-laravel/smarthr-orange/public/img/profiles/avatar-17.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
													<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="/backend/activities">
											<div class="media">
												<span class="avatar">
													<img alt="" src="https://smarthr.dreamguystech.com/smarthr-laravel/smarthr-orange/public/img/profiles/avatar-13.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
													<p class="noti-time"><span class="notification-time">2 days ago</span></p>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="/backend/activities">View all Notifications</a>
							</div>
						</div>
					</li>
					<!-- /Notifications -->
					
					<!-- Message Notifications -->
					<li class="nav-item dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<i class="fa fa-comment-o"></i> <span class="badge badge-pill">8</span>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Messages</span>
								<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="/backend/chat">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="https://smarthr.dreamguystech.com/smarthr-laravel/smarthr-orange/public/img/profiles/avatar-09.jpg">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author">Richard Miles </span>
													<span class="message-time">12:28 AM</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="/backend/chat">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="https://smarthr.dreamguystech.com/smarthr-laravel/smarthr-orange/public/img/profiles/avatar-02.jpg">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author">John Doe</span>
													<span class="message-time">6 Mar</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="/backend/chat">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="https://smarthr.dreamguystech.com/smarthr-laravel/smarthr-orange/public/img/profiles/avatar-03.jpg">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author"> Tarah Shropshire </span>
													<span class="message-time">5 Mar</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="/backend/chat">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="https://smarthr.dreamguystech.com/smarthr-laravel/smarthr-orange/public/img/profiles/avatar-05.jpg">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author">Mike Litorus</span>
													<span class="message-time">3 Mar</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="/backend/chat">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="https://smarthr.dreamguystech.com/smarthr-laravel/smarthr-orange/public/img/profiles/avatar-08.jpg">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author"> Catherine Manseau </span>
													<span class="message-time">27 Feb</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="/backend/chat">View all Messages</a>
							</div>
						</div>
					</li>
					<!-- /Message Notifications -->

					<li class="nav-item dropdown has-arrow main-drop">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img src="https://smarthr.dreamguystech.com/smarthr-laravel/smarthr-orange/public/img/profiles/avatar-21.jpg" alt="">
							<span class="status online"></span></span>
							<span>Admin</span>
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="/backend/profile">My Profile</a>
							<a class="dropdown-item" href="/backend/settings">Settings</a>
							<a class="dropdown-item" href="/backend/login">Logout</a>
						</div>
					</li>
				</ul>
				<!-- /Header Menu -->
				
				<!-- Mobile Menu -->
				<div class="dropdown mobile-user-menu">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="/backend/profile">My Profile</a>
						<a class="dropdown-item" href="/backend/settings">Settings</a>
						<a class="dropdown-item" href="/backend/login">Logout</a>
					</div>
				</div>
				<!-- /Mobile Menu -->
				
            </div>
			<!-- /Header -->
			
			<!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title"> 
								<span>Main</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-dashboard"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="active" href="/backend/index">Admin Dashboard</a></li>
									<li><a href="/backend/employee-dashboard">Employee Dashboard</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-cube"></i> <span> Apps</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="/backend/chat">Chat</a></li>
									<li class="submenu">
										<a href="#"><span> Calls</span> <span class="menu-arrow"></span></a>
										<ul style="display: none;">
											<li><a href="/backend/voice-call">Voice Call</a></li>
											<li><a href="/backend/video-call">Video Call</a></li>
											<li><a href="/backend/outgoing-call">Outgoing Call</a></li>
											<li><a href="/backend/incoming-call">Incoming Call</a></li>
										</ul>
									</li>
									<li><a href="/backend/events">Calendar</a></li>
									<li><a href="/backend/contacts">Contacts</a></li>
									<li><a href="/backend/inbox">Email</a></li>
									<li><a href="/backend/file-manager">File Manager</a></li>
								</ul>
							</li>
							
							<li class="menu-title"> 
								<span>Employees</span>
							</li>
							@foreach (config('nav.admin.top') as $item)
							<li> 
								<a href="{{route($item['route'])}}"><i class="la la-cube"></i> <span>{{$item['name']}}</span></a>
							</li>
							@endforeach
							<li class="submenu">
								<a href="#" class="noti-dot"><i class="la la-user"></i> <span> Employees</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="/backend/employees">All Employees</a></li>
									<li><a href="/backend/holidays">Holidays</a></li>
									<li><a href="/backend/leaves">Leaves (Admin) <span class="badge badge-pill bg-primary float-right">1</span></a></li>
									<li><a href="/backend/leaves-employee">Leaves (Employee)</a></li>
									<li><a href="/backend/leave-settings">Leave Settings</a></li>
									<li><a href="/backend/attendance">Attendance (Admin)</a></li>
									<li><a href="/backend/attendance-employee">Attendance (Employee)</a></li>
									<li><a href="/backend/departments">Departments</a></li>
									<li><a href="/backend/designations">Designations</a></li>
									<li><a href="/backend/timesheet">Timesheet</a></li>
									<li><a href="/backend/overtime">Overtime</a></li>
								</ul>
							</li>
							<li> 
								<a href="/backend/clients"><i class="la la-users"></i> <span>Clients</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-rocket"></i> <span> Projects</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="/backend/projects">Projects</a></li>
									<li><a href="/backend/tasks">Tasks</a></li>
									<li><a href="/backend/task-board">Task Board</a></li>
								</ul>
							</li>
							<li> 
								<a href="/backend/leads"><i class="la la-user-secret"></i> <span>Leads</span></a>
							</li>
							<li> 
								<a href="/backend/tickets"><i class="la la-ticket"></i> <span>Tickets</span></a>
							</li>
							<li class="menu-title"> 
								<span>HR</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-files-o"></i> <span> Accounts </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="/backend/estimates">Estimates</a></li>
									<li><a href="/backend/invoices">Invoices</a></li>
									<li><a href="/backend/payments">Payments</a></li>
									<li><a href="/backend/expenses">Expenses</a></li>
									<li><a href="/backend/provident-fund">Provident Fund</a></li>
									<li><a href="/backend/taxes">Taxes</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-money"></i> <span> Payroll </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="/backend/salary"> Employee Salary </a></li>
									<li><a href="/backend/salary-view"> Payslip </a></li>
									<li><a href="/backend/payroll-items"> Payroll Items </a></li>
								</ul>
							</li>
							<li> 
								<a href="/backend/policies"><i class="la la-file-pdf-o"></i> <span>Policies</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-pie-chart"></i> <span> Reports </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="/backend/expense-reports"> Expense Report </a></li>
									<li><a href="/backend/invoice-reports"> Invoice Report </a></li>
								</ul>
							</li>
							<li class="menu-title"> 
								<span>Performance</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-graduation-cap"></i> <span> Performance </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="/backend/performance-indicator"> Performance Indicator </a></li>
									<li><a href="/backend/performance"> Performance Review </a></li>
									<li><a href="/backend/performance-appraisal"> Performance Appraisal </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-crosshairs"></i> <span> Goals </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="/backend/goal-tracking"> Goal List </a></li>
									<li><a href="/backend/goal-type"> Goal Type </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-edit"></i> <span> Training </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="/backend/training"> Training List </a></li>
									<li><a href="/backend/trainers"> Trainers</a></li>
									<li><a href="/backend/training-type"> Training Type </a></li>
								</ul>
							</li>
							<li><a href="/backend/promotion"><i class="la la-bullhorn"></i> <span>Promotion</span></a></li>
							<li><a href="/backend/resignation"><i class="la la-external-link-square"></i> <span>Resignation</span></a></li>
							<li><a href="/backend/termination"><i class="la la-times-circle"></i> <span>Termination</span></a></li>
							<li class="menu-title"> 
								<span>Administration</span>
							</li>
							<li> 
								<a href="/backend/assets"><i class="la la-object-ungroup"></i> <span>Assets</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-briefcase"></i> <span> Jobs </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="/backend/jobs"> Manage Jobs </a></li>
									<li><a href="/backend/jobs-applicants"> Applied Candidates </a></li>
								</ul>
							</li>
							<li> 
								<a href="/backend/knowledgebase"><i class="la la-question"></i> <span>Knowledgebase</span></a>
							</li>
							<li> 
								<a href="/backend/activities"><i class="la la-bell"></i> <span>Activities</span></a>
							</li>
							<li> 
								<a href="/backend/users"><i class="la la-user-plus"></i> <span>Users</span></a>
							</li>
							<li> 
								<a href="/backend/settings"><i class="la la-cog"></i> <span>Settings</span></a>
							</li>
							<li class="menu-title"> 
								<span>Pages</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-user"></i> <span> Profile </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="/backend/profile"> Employee Profile </a></li>
									<li><a href="/backend/client-profile"> Client Profile </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-key"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="/backend/login"> Login </a></li>
									<li><a href="/backend/register"> Register </a></li>
									<li><a href="/backend/forgot-password"> Forgot Password </a></li>
									<li><a href="/backend/otp"> OTP </a></li>
									<li><a href="/backend/lock-screen"> Lock Screen </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-exclamation-triangle"></i> <span> Error Pages </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="/backend/error-404">404 Error </a></li>
									<li><a href="/backend/error-500">500 Error </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-hand-o-up"></i> <span> Subscriptions </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="/backend/subscriptions"> Subscriptions (Admin) </a></li>
									<li><a href="/backend/subscriptions-company"> Subscriptions (Company) </a></li>
									<li><a href="/backend/subscribed-companies"> Subscribed Companies</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-columns"></i> <span> Pages </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="/backend/search"> Search </a></li>
									<li><a href="/backend/faq"> FAQ </a></li>
									<li><a href="/backend/terms"> Terms </a></li>
									<li><a href="/backend/privacy-policy"> Privacy Policy </a></li>
									<li><a href="/backend/blank-page"> Blank Page </a></li>
								</ul>
							</li>
							<li class="menu-title"> 
								<span>UI Interface</span>
							</li>
							<li> 
								<a href="/backend/components"><i class="la la-puzzle-piece"></i> <span>Components</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-object-group"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="/backend/form-basic-inputs">Basic Inputs </a></li>
									<li><a href="/backend/form-input-groups">Input Groups </a></li>
									<li><a href="/backend/form-horizontal">Horizontal Form </a></li>
									<li><a href="/backend/form-vertical"> Vertical Form </a></li>
									<li><a href="/backend/form-mask"> Form Mask </a></li>
									<li><a href="/backend/form-validation"> Form Validation </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="/backend/tables-basic">Basic Tables </a></li>
									<li><a href="/backend/data-tables">Data Table </a></li>
								</ul>
							</li>
							<li class="menu-title"> 
								<span>Extras</span>
							</li>
							<li> 
								<a href="#"><i class="la la-file-text"></i> <span>Documentation</span></a>
							</li>
							<li> 
								<a href="javascript:void(0);"><i class="la la-info"></i> <span>Change Log</span> <span class="badge badge-primary ml-auto">v3.4</span></a>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);"><i class="la la-share-alt"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li class="submenu">
										<a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
										<ul style="display: none;">
											<li><a href="javascript:void(0);"><span>Level 2</span></a></li>
											<li class="submenu">
												<a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
												<ul style="display: none;">
													<li><a href="javascript:void(0);">Level 3</a></li>
													<li><a href="javascript:void(0);">Level 3</a></li>
												</ul>
											</li>
											<li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
										</ul>
									</li>
									<li>
										<a href="javascript:void(0);"> <span>Level 1</span></a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->
			
		@yield('content')
		
			
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="/backend/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="/backend/js/popper.min.js"></script>
        <script src="/backend/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="/backend/js/jquery.slimscroll.min.js"></script>
		
		<!-- Chart JS -->
		<script src="/backend/js/morris.min.js"></script>
		<script src="/backend/js/raphael.min.js"></script>
		<script src="/backend/js/chart.js"></script>
		
		<!-- Custom JS -->
		<script src="/backend/js/app.js"></script>
		
    </body>

<!-- Mirrored from smarthr.dreamguystech.com/smarthr-laravel/smarthr-orange/public/index by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Feb 2021 11:48:37 GMT -->
</html>