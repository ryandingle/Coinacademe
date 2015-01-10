<?php
	if($this->session->userdata('logged_in'))
	{
		echo
		'
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0;background-color:#1ba1e2;border-bottom: 1px solid #428bca">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="'.base_url().'worker" style="color: #fff">Worker Dashboard</a>
				</div>
				
				<ul class="nav navbar-top-links navbar-left">
					<span class="divider"></span>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: #000">
							New <i class="fa fa-plus fa-fw"></i></i>
						</a>
						<ul class="dropdown-menu">
							<li>
								<a href="worker/in/menu?tab=new_article">
									Article <i class="fa fa-book fa-fw pull-right"></i>
								</a>
							</li>
						</ul>
					<li>
				</ul>
				
				<ul class="nav navbar-top-links navbar-right">
					<span class="divider"></span>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: #000">
							<b>'.$this->session->userdata('email').'</b>&nbsp;  <i class="fa fa-caret-down"></i>
						</a>
						<ul class="dropdown-menu dropdown-user">
							<li>
								<a href="worker/in/menu?tab=settings"><i class="fa fa-gear fa-fw"></i> Settings</a>
							</li>
							<li>
								<a href="home/acounts/logout?key='.sha1($this->session->userdata('login_key')+microtime()).'&user=worker"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
							</li>
						</ul>
					</li>
					
				</ul>
	
<!--Left Sidebar---->
				<div class="navbar-default navbar-static-side" role="navigation">
					<div class="sidebar-collapse">
						<ul class="nav" id="side-menu">
							<li>
								<a href="worker">
								<i class="fa fa-dashboard fa-fw"></i> Dashboard
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-book fa-fw"></i> Articles<span class="fa arrow"></span>
								</a>
								<ul class="nav nav-second-level collapse">
									<li>
										<a href="worker/in/menu?tab=published">
										<i class="fa fa-check fa-fw"></i> Published Articles
										</a>
									</li>
									<li>
										<a href="worker/in/menu?tab=drafts">
										<i class="fa fa-save fa-fw"></i> Drafts Articles
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="worker/in/menu?tab=new_article">
								<i class="fa fa-plus fa-fw"></i> New Article
								</a>
							</li>
							<li>
								<a href="worker/in/menu?tab=categories">
								<i class="fa fa-folder-o fa-fw"></i> Article Categories
								</a>
							</li>
							<li>
								<a href="worker/in/menu?tab=statistics">
								<i class="fa fa-bar-chart-o fa-fw"></i> Statistics</span>
								</a>
							</li>
							<li>
								<a href="worker/in/menu?tab=settings">
								<i class="fa fa-wrench fa-fw"></i> Settings</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		';
	}
	else
	{
		echo
		'
			<div class="navigation-bar">
				<div class="navigation-bar-content container">
					<a href="'.base_url().'" class="element bg-hover-transparent">
						COINACADEME <sup><span class="icon-coins"></span></sup>
					</a>
					<a class="element1 pull-menu" href="#"></a>
					<ul class="element-menu place-right">
						<li>
							<a title="Register" href="'.base_url().'worker/register" class="element place-right bg-hover-white fg-hover-dark">
							Register <span class="icon-checkmark"></span>
							</a>
						</li>
						<li>
						   <a title="Login" href="'.base_url().'worker/login" class="element place-right bg-hover-white fg-hover-dark">
						   Login <span class="icon-enter"></span>
						   </a>
						</li>
						
					</ul>
				</div>
			</div>
		';
	}
?>