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
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
				<!-- Page Content -->
                <div class="content container-fluid">
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">@yield('content')</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item active">Dashboard</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
				
					<div class="row">
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="card dash-widget">
								<div class="card-body">
									<span class="dash-widget-icon"><i class="fa fa-cubes"></i></span>
									<div class="dash-widget-info">
										<h3>112</h3>
										<span>Projects</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="card dash-widget">
								<div class="card-body">
									<span class="dash-widget-icon"><i class="fa fa-usd"></i></span>
									<div class="dash-widget-info">
										<h3>44</h3>
										<span>Clients</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="card dash-widget">
								<div class="card-body">
									<span class="dash-widget-icon"><i class="fa fa-diamond"></i></span>
									<div class="dash-widget-info">
										<h3>37</h3>
										<span>Tasks</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="card dash-widget">
								<div class="card-body">
									<span class="dash-widget-icon"><i class="fa fa-user"></i></span>
									<div class="dash-widget-info">
										<h3>218</h3>
										<span>Employees</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6 text-center">
									<div class="card">
										<div class="card-body">
											<h3 class="card-title">Total Revenue</h3>
											<div id="bar-charts"></div>
										</div>
									</div>
								</div>
								<div class="col-md-6 text-center">
									<div class="card">
										<div class="card-body">
											<h3 class="card-title">Sales Overview</h3>
											<div id="line-charts"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-12">
							<div class="card-group m-b-30">
								<div class="card">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-3">
											<div>
												<span class="d-block">New Employees</span>
											</div>
											<div>
												<span class="text-success">+10%</span>
											</div>
										</div>
										<h3 class="mb-3">10</h3>
										<div class="progress mb-2" style="height: 5px;">
											<div class="progress-bar bg-primary" role="progressbar" style="width: 70%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<p class="mb-0">Overall Employees 218</p>
									</div>
								</div>
							
								<div class="card">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-3">
											<div>
												<span class="d-block">Earnings</span>
											</div>
											<div>
												<span class="text-success">+12.5%</span>
											</div>
										</div>
										<h3 class="mb-3">$1,42,300</h3>
										<div class="progress mb-2" style="height: 5px;">
											<div class="progress-bar bg-primary" role="progressbar" style="width: 70%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<p class="mb-0">Previous Month <span class="text-muted">$1,15,852</span></p>
									</div>
								</div>
							
								<div class="card">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-3">
											<div>
												<span class="d-block">Expenses</span>
											</div>
											<div>
												<span class="text-danger">-2.8%</span>
											</div>
										</div>
										<h3 class="mb-3">$8,500</h3>
										<div class="progress mb-2" style="height: 5px;">
											<div class="progress-bar bg-primary" role="progressbar" style="width: 70%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<p class="mb-0">Previous Month <span class="text-muted">$7,500</span></p>
									</div>
								</div>
							
								<div class="card">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-3">
											<div>
												<span class="d-block">Profit</span>
											</div>
											<div>
												<span class="text-danger">-75%</span>
											</div>
										</div>
										<h3 class="mb-3">$1,12,000</h3>
										<div class="progress mb-2" style="height: 5px;">
											<div class="progress-bar bg-primary" role="progressbar" style="width: 70%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<p class="mb-0">Previous Month <span class="text-muted">$1,42,000</span></p>
									</div>
								</div>
							</div>
						</div>	
					</div>
					
					<!-- Statistics Widget -->
					<div class="row">
						<div class="col-md-12 col-lg-12 col-xl-4 d-flex">
							<div class="card flex-fill dash-statistics">
								<div class="card-body">
									<h5 class="card-title">Statistics</h5>
									<div class="stats-list">
										<div class="stats-info">
											<p>Today Leave <strong>4 <small>/ 65</small></strong></p>
											<div class="progress">
												<div class="progress-bar bg-primary" role="progressbar" style="width: 31%" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
										<div class="stats-info">
											<p>Pending Invoice <strong>15 <small>/ 92</small></strong></p>
											<div class="progress">
												<div class="progress-bar bg-warning" role="progressbar" style="width: 31%" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
										<div class="stats-info">
											<p>Completed Projects <strong>85 <small>/ 112</small></strong></p>
											<div class="progress">
												<div class="progress-bar bg-success" role="progressbar" style="width: 62%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
										<div class="stats-info">
											<p>Open Tickets <strong>190 <small>/ 212</small></strong></p>
											<div class="progress">
												<div class="progress-bar bg-danger" role="progressbar" style="width: 62%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
										<div class="stats-info">
											<p>Closed Tickets <strong>22 <small>/ 212</small></strong></p>
											<div class="progress">
												<div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-md-12 col-lg-6 col-xl-4 d-flex">
							<div class="card flex-fill">
								<div class="card-body">
									<h4 class="card-title">Task Statistics</h4>
									<div class="statistics">
										<div class="row">
											<div class="col-md-6 col-6 text-center">
												<div class="stats-box mb-4">
													<p>Total Tasks</p>
													<h3>385</h3>
												</div>
											</div>
											<div class="col-md-6 col-6 text-center">
												<div class="stats-box mb-4">
													<p>Overdue Tasks</p>
													<h3>19</h3>
												</div>
											</div>
										</div>
									</div>
									<div class="progress mb-4">
										<div class="progress-bar bg-purple" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
										<div class="progress-bar bg-warning" role="progressbar" style="width: 22%" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">22%</div>
										<div class="progress-bar bg-success" role="progressbar" style="width: 24%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100">24%</div>
										<div class="progress-bar bg-danger" role="progressbar" style="width: 26%" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100">21%</div>
										<div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100">10%</div>
									</div>
									<div>
										<p><i class="fa fa-dot-circle-o text-purple mr-2"></i>Completed Tasks <span class="float-right">166</span></p>
										<p><i class="fa fa-dot-circle-o text-warning mr-2"></i>Inprogress Tasks <span class="float-right">115</span></p>
										<p><i class="fa fa-dot-circle-o text-success mr-2"></i>On Hold Tasks <span class="float-right">31</span></p>
										<p><i class="fa fa-dot-circle-o text-danger mr-2"></i>Pending Tasks <span class="float-right">47</span></p>
										<p class="mb-0"><i class="fa fa-dot-circle-o text-info mr-2"></i>Review Tasks <span class="float-right">5</span></p>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-md-12 col-lg-6 col-xl-4 d-flex">
							<div class="card flex-fill">
								<div class="card-body">
									<h4 class="card-title">Today Absent <span class="badge bg-inverse-danger ml-2">5</span></h4>
									<div class="leave-info-box">
										<div class="media align-items-center">
											<a href="/backend/profile" class="avatar"><img alt="" src="https://smarthr.dreamguystech.com/smarthr-laravel/smarthr-orange/public/img/user.jpg"></a>
											<div class="media-body">
												<div class="text-sm my-0">Martin Lewis</div>
											</div>
										</div>
										<div class="row align-items-center mt-3">
											<div class="col-6">
												<h6 class="mb-0">4 Sep 2019</h6>
												<span class="text-sm text-muted">Leave Date</span>
											</div>
											<div class="col-6 text-right">
												<span class="badge bg-inverse-danger">Pending</span>
											</div>
										</div>
									</div>
									<div class="leave-info-box">
										<div class="media align-items-center">
											<a href="/backend/profile" class="avatar"><img alt="" src="https://smarthr.dreamguystech.com/smarthr-laravel/smarthr-orange/public/img/user.jpg"></a>
											<div class="media-body">
												<div class="text-sm my-0">Martin Lewis</div>
											</div>
										</div>
										<div class="row align-items-center mt-3">
											<div class="col-6">
												<h6 class="mb-0">4 Sep 2019</h6>
												<span class="text-sm text-muted">Leave Date</span>
											</div>
											<div class="col-6 text-right">
												<span class="badge bg-inverse-success">Approved</span>
											</div>
										</div>
									</div>
									<div class="load-more text-center">
										<a class="text-dark" href="javascript:void(0);">Load More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Statistics Widget -->
					
					<div class="row">
						<div class="col-md-6 d-flex">
							<div class="card card-table flex-fill">
								<div class="card-header">
									<h3 class="card-title mb-0">Invoices</h3>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-nowrap custom-table mb-0">
											<thead>
												<tr>
													<th>Invoice ID</th>
													<th>Client</th>
													<th>Due Date</th>
													<th>Total</th>
													<th>Status</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><a href="/backend/invoice-view">#INV-0001</a></td>
													<td>
														<h2><a href="#">Global Technologies</a></h2>
													</td>
													<td>11 Mar 2019</td>
													<td>$380</td>
													<td>
														<span class="badge bg-inverse-warning">Partially Paid</span>
													</td>
												</tr>
												<tr>
													<td><a href="/backend/invoice-view">#INV-0002</a></td>
													<td>
														<h2><a href="#">Delta Infotech</a></h2>
													</td>
													<td>8 Feb 2019</td>
													<td>$500</td>
													<td>
														<span class="badge bg-inverse-success">Paid</span>
													</td>
												</tr>
												<tr>
													<td><a href="/backend/invoice-view">#INV-0003</a></td>
													<td>
														<h2><a href="#">Cream Inc</a></h2>
													</td>
													<td>23 Jan 2019</td>
													<td>$60</td>
													<td>
														<span class="badge bg-inverse-danger">Unpaid</span>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="card-footer">
									<a href="/backend/invoices">View all invoices</a>
								</div>
							</div>
						</div>
						<div class="col-md-6 d-flex">
							<div class="card card-table flex-fill">
								<div class="card-header">
									<h3 class="card-title mb-0">Payments</h3>
								</div>
								<div class="card-body">
									<div class="table-responsive">	
										<table class="table custom-table table-nowrap mb-0">
											<thead>
												<tr>
													<th>Invoice ID</th>
													<th>Client</th>
													<th>Payment Type</th>
													<th>Paid Date</th>
													<th>Paid Amount</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><a href="/backend/invoice-view">#INV-0001</a></td>
													<td>
														<h2><a href="#">Global Technologies</a></h2>
													</td>
													<td>Paypal</td>
													<td>11 Mar 2019</td>
													<td>$380</td>
												</tr>
												<tr>
													<td><a href="/backend/invoice-view">#INV-0002</a></td>
													<td>
														<h2><a href="#">Delta Infotech</a></h2>
													</td>
													<td>Paypal</td>
													<td>8 Feb 2019</td>
													<td>$500</td>
												</tr>
												<tr>
													<td><a href="/backend/invoice-view">#INV-0003</a></td>
													<td>
														<h2><a href="#">Cream Inc</a></h2>
													</td>
													<td>Paypal</td>
													<td>23 Jan 2019</td>
													<td>$60</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="card-footer">
									<a href="/backend/payments">View all payments</a>
								</div>
							</div>
						</div>
					</div>			
					<div class="row">
						<div class="col-md-6 d-flex">
							<div class="card card-table flex-fill">
								<div class="card-header">
									<h3 class="card-title mb-0">Clients</h3>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table custom-table mb-0">
											<thead>
												<tr>
													<th>Name</th>
													<th>Email</th>
													<th>Status</th>
													<th class="text-right">Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="#" class="avatar"><img alt="" src="https://smarthr.dreamguystech.com/smarthr-laravel/smarthr-orange/public/img/profiles/avatar-19.jpg"></a>
															<a href="/backend/client-profile">Barry Cuda <span>CEO</span></a>
														</h2>
													</td>
													<td>barrycuda@example.com</td>
													<td>
														<div class="dropdown action-label">
															<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
																<i class="fa fa-dot-circle-o text-success"></i> Active
															</a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
																<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
															</div>
														</div>
													</td>
													<td class="text-right">
														<div class="dropdown dropdown-action">
															<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-pencil m-r-5"></i> Edit</a>
																<a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="#" class="avatar"><img alt="" src="https://smarthr.dreamguystech.com/smarthr-laravel/smarthr-orange/public/img/profiles/avatar-19.jpg"></a>
															<a href="/backend/client-profile">Tressa Wexler <span>Manager</span></a>
														</h2>
													</td>
													<td>tressawexler@example.com</td>
													<td>
														<div class="dropdown action-label">
															<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
																<i class="fa fa-dot-circle-o text-danger"></i> Inactive
															</a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
																<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
															</div>
														</div>
													</td>
													<td class="text-right">
														<div class="dropdown dropdown-action">
															<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-pencil m-r-5"></i> Edit</a>
																<a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="/backend/client-profile" class="avatar"><img alt="" src="https://smarthr.dreamguystech.com/smarthr-laravel/smarthr-orange/public/img/profiles/avatar-07.jpg"></a>
															<a href="/backend/client-profile">Ruby Bartlett <span>CEO</span></a>
														</h2>
													</td>
													<td>rubybartlett@example.com</td>
													<td>
														<div class="dropdown action-label">
															<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
																<i class="fa fa-dot-circle-o text-danger"></i> Inactive
															</a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
																<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
															</div>
														</div>
													</td>
													<td class="text-right">
														<div class="dropdown dropdown-action">
															<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-pencil m-r-5"></i> Edit</a>
																<a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="/backend/client-profile" class="avatar"><img alt="" src="https://smarthr.dreamguystech.com/smarthr-laravel/smarthr-orange/public/img/profiles/avatar-06.jpg"></a>
															<a href="/backend/client-profile"> Misty Tison <span>CEO</span></a>
														</h2>
													</td>
													<td>mistytison@example.com</td>
													<td>
														<div class="dropdown action-label">
															<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
																<i class="fa fa-dot-circle-o text-success"></i> Active
															</a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
																<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
															</div>
														</div>
													</td>
													<td class="text-right">
														<div class="dropdown dropdown-action">
															<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-pencil m-r-5"></i> Edit</a>
																<a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="/backend/client-profile" class="avatar"><img alt="" src="https://smarthr.dreamguystech.com/smarthr-laravel/smarthr-orange/public/img/profiles/avatar-14.jpg"></a>
															<a href="/backend/client-profile"> Daniel Deacon <span>CEO</span></a>
														</h2>
													</td>
													<td>danieldeacon@example.com</td>
													<td>
														<div class="dropdown action-label">
															<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
																<i class="fa fa-dot-circle-o text-danger"></i> Inactive
															</a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
																<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
															</div>
														</div>
													</td>
													<td class="text-right">
														<div class="dropdown dropdown-action">
															<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-pencil m-r-5"></i> Edit</a>
																<a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
															</div>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="card-footer">
									<a href="/backend/clients">View all clients</a>
								</div>
							</div>
						</div>
						<div class="col-md-6 d-flex">
							<div class="card card-table flex-fill">
								<div class="card-header">
									<h3 class="card-title mb-0">Recent Projects</h3>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table custom-table mb-0">
											<thead>
												<tr>
													<th>Project Name </th>
													<th>Progress</th>
													<th class="text-right">Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<h2><a href="/backend/project-view">Office Management</a></h2>
														<small class="block text-ellipsis">
															<span>1</span> <span class="text-muted">open tasks, </span>
															<span>9</span> <span class="text-muted">tasks completed</span>
														</small>
													</td>
													<td>
														<div class="progress progress-xs progress-striped">
															<div class="progress-bar" role="progressbar" data-toggle="tooltip" title="65%" style="width: 65%"></div>
														</div>
													</td>
													<td class="text-right">
														<div class="dropdown dropdown-action">
															<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-pencil m-r-5"></i> Edit</a>
																<a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2><a href="/backend/project-view">Project Management</a></h2>
														<small class="block text-ellipsis">
															<span>2</span> <span class="text-muted">open tasks, </span>
															<span>5</span> <span class="text-muted">tasks completed</span>
														</small>
													</td>
													<td>
														<div class="progress progress-xs progress-striped">
															<div class="progress-bar" role="progressbar" data-toggle="tooltip" title="15%" style="width: 15%"></div>
														</div>
													</td>
													<td class="text-right">
														<div class="dropdown dropdown-action">
															<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-pencil m-r-5"></i> Edit</a>
																<a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2><a href="/backend/project-view">Video Calling App</a></h2>
														<small class="block text-ellipsis">
															<span>3</span> <span class="text-muted">open tasks, </span>
															<span>3</span> <span class="text-muted">tasks completed</span>
														</small>
													</td>
													<td>
														<div class="progress progress-xs progress-striped">
															<div class="progress-bar" role="progressbar" data-toggle="tooltip" title="49%" style="width: 49%"></div>
														</div>
													</td>
													<td class="text-right">
														<div class="dropdown dropdown-action">
															<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-pencil m-r-5"></i> Edit</a>
																<a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2><a href="/backend/project-view">Hospital Administration</a></h2>
														<small class="block text-ellipsis">
															<span>12</span> <span class="text-muted">open tasks, </span>
															<span>4</span> <span class="text-muted">tasks completed</span>
														</small>
													</td>
													<td>
														<div class="progress progress-xs progress-striped">
															<div class="progress-bar" role="progressbar" data-toggle="tooltip" title="88%" style="width: 88%"></div>
														</div>
													</td>
													<td class="text-right">
														<div class="dropdown dropdown-action">
															<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-pencil m-r-5"></i> Edit</a>
																<a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2><a href="/backend/project-view">Digital Marketplace</a></h2>
														<small class="block text-ellipsis">
															<span>7</span> <span class="text-muted">open tasks, </span>
															<span>14</span> <span class="text-muted">tasks completed</span>
														</small>
													</td>
													<td>
														<div class="progress progress-xs progress-striped">
															<div class="progress-bar" role="progressbar" data-toggle="tooltip" title="100%" style="width: 100%"></div>
														</div>
													</td>
													<td class="text-right">
														<div class="dropdown dropdown-action">
															<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-pencil m-r-5"></i> Edit</a>
																<a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
															</div>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="card-footer">
									<a href="/backend/projects">View all projects</a>
								</div>
							</div>
						</div>
					</div>
				
				</div>
				<!-- /Page Content -->

            </div>
			<!-- /Page Wrapper -->
			
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