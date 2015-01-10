<div class="navbar navbar-fixed-top navbar-default" role="navigation">
	<div class="container">
    	<div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo base_url();?>">Coinacademe</a>
    	</div>
    
        <ul class="nav navbar-top-links navbar-right navbar-collapse">
            <span class="divider"></span>
        	<li class="name-nav-link">
            	<a href="javascript:void(0)">
                	<i class="fa fa-search"></i>
                </a>
            </li>
            <li class="identity name-nav-link">
                <a href="<?php echo base_url().''.$this->session->userdata('username');?>">
                    <?php 
					if($this->session->userdata('f_name') != '' && $this->session->userdata('l_name') != '') 
						echo '<b>'.ucfirst($this->session->userdata('f_name')).'</b>';
					else
					 	echo '<b>'.ucfirst($this->session->userdata('email')).'</b>';
					?>
                </a>
            </li>
            <li class="identity">
                <a class="home-nav-link" href="<?php echo base_url();?>">
                    <b>Home</b>
                </a>
            </li>
            <li class="dropdown some-nav-link">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-envelope-o fa-fw"></i>
                    <!--<i class="fa fa-caret-down"></i>-->
                </a>
                <ul class="dropdown-menu dropdown-messages">
                    <li>
                        <a href="#">
                            <div>
                                <strong>John Smith</strong>
                                <span class="pull-right text-muted">
                                    <em>Yesterday</em>
                                </span>
                            </div>
                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                        </a>
                    </li>
                    
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>Read All Messages</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </li>
            
            <li class="dropdown some-nav-link">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell-o fa-fw"></i>
                    <!--<i class="fa fa-caret-down"></i>-->
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i> New Comment
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                <span class="pull-right text-muted small">12 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-envelope fa-fw"></i> Message Sent
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-tasks fa-fw"></i> New Task
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </li>
            
            <li class="dropdown some-nav-link">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-gear fa-fw"></i>
                    <!--<i class="fa fa-caret-down"></i>-->
                </a>
                <ul class="dropdown-menu dropdown-user right-nav">
                    <li>
                        <a href="<?php echo base_url();?>in/profile?tab=default">
                        <i class="fa fa-user fa-fw"></i> User Profile
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>in/settings?tab=default">
                        <i class="fa fa-wrench fa-fw"></i> Settings
                        </a>
                    </li>
                    <li>
                        <a href="home/acounts/logout?key=<?php echo sha1($this->session->userdata('login_key')+microtime());?>&user=user">
                        <i class="fa fa-sign-out fa-fw"></i> Logout
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
	</div>
 </div>
<!--
<header>
	<div class="navigation-bar" style="background-color: #563e7d">
    <div class="navigation-bar-content container">
        <a href="" class="element bg-hover-transparent fg-hover-white">COINACADEME <sup><span class="icon-coins"></span></sup></a>
        <a class="element1 pull-menu" href="#"></a>
        
        <ul class="element-menu place-right">
        	<li style="padding-right: 20px;display: none">
            	<ul class="element-menu">
                    <li style="margin-left: 40px;top: 5px" class="bg-hover-transparent">
                        <div class="input-control text">
                            <input class="size7" type="text" placeholder="search"/>
                            <button class="btn-search"></button>
                        </div>
                    </li>
                </ul>
            </li>
            <span class="element-divider place-left"></span>
        	<li style="padding-right: 10px" data-hint="Search" data-hint-position="bottom">
            	<a href="javascript:void(0)">
                	<i class="icon-search"></i>
                </a>
            </li>
        	<span class="element-divider place-left"></span>
        	<li style="padding-right: 10px">
            	<a class="dropdown-toggle" href="#" data-hint="Messages" data-hint-position="bottom">
                	<i class="icon-mail"></i>
                </a>
                <div class="dropdown-menu place-right fg-hover-black fg-black" data-role="dropdown">
                        <div class="listview small messages"  style="max-height: 300px;padding:0px">
                            <a href="#" class="list" style="padding:0px;margin:0px">
                                <div class="list-content">
                                    <img src="assets/css/images/android_vs_apple-wallpaper-1366x768.jpg" class="icon">
                                    <div class="data">
                                        <span class="list-title"><small>from : </small>Justin Babaero</span>
                                        <span class="list-title"><small>We sa we asdadada aad...</small></span>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list" style="padding:0px;margin:0px">
                                <div class="list-content">
                                    <img src="assets/css/images/android_vs_apple-wallpaper-1366x768.jpg" class="icon">
                                    <div class="data">
                                        <span class="list-title"><small>from : </small>Justin Babaero</span>
                                        <span class="list-title"><small>We sa we asdadada aad...</small></span>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list selected" style="padding:0px;margin:0px">
                                <div class="list-content">
                                    <img src="assets/css/images/android_vs_apple-wallpaper-1366x768.jpg" class="icon">
                                    <div class="data">
                                        <span class="list-title"><small>from : </small>Justin Babaero</span>
                                        <span class="list-title"><small>We sa we asdadada aad...</small></span>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list">
                                <div class="list-content" style="padding:0px;margin:0px">
                                    <img src="assets/css/images/android_vs_apple-wallpaper-1366x768.jpg" class="icon">
                                    <div class="data">
                                        <span class="list-title"><small>from : </small>Justin Babaero</span>
                                        <span class="list-title"><small>We sa we asdadada aad...</small></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="fg-hover-blue text-center"><p><a>See all</a></p></div>
                </div>
            </li>
            <span class="element-divider place-left"></span>
        	<li style="padding-right: 10px">
            	<a class="dropdown-toggle place-right" href="#" data-hint="Notifications" data-hint-position="bottom">
                	<i class="icon-bell"></i>
                </a>
                <div class="dropdown-menu place-right fg-hover-black fg-black" data-role="dropdown">
                        <div class="listview-outlook notification" style="max-height: 300px" data-role="listview">
                            <a href="#" class="list">
                                <div class="list-content">
                                    <span class="list-title">subscribe@metroui.net</span>
                                    <span class="list-subtitle">MetroUI: News on 26/10/2013</span>
                                    <span class="list-remark">Hello friend! Newest for Metro UI CSS</span>
                                </div>
                            </a>
                            <a href="#" class="list">
                                <div class="list-content">
                                    <span class="list-title">subscribe@metroui.net</span>
                                    <span class="list-subtitle">MetroUI: News on 26/10/2013</span>
                                    <span class="list-remark">Hello friend! Newest for Metro UI CSS</span>
                                </div>
                            </a>
                            <a href="#" class="list">
                                <div class="list-content">
                                    <span class="list-title">subscribe@metroui.net</span>
                                    <span class="list-subtitle">MetroUI: News on 26/10/2013</span>
                                    <span class="list-remark">Hello friend! Newest for Metro UI CSS</span>
                                </div>
                            </a>
                            <a href="#" class="list">
                                <div class="list-content">
                                    <span class="list-title">subscribe@metroui.net</span>
                                    <span class="list-subtitle">MetroUI: News on 26/10/2013</span>
                                    <span class="list-remark">Hello friend! Newest for Metro UI CSS</span>
                                </div>
                            </a>
                            <a href="#" class="list">
                                <div class="list-content">
                                    <span class="list-title">subscribe@metroui.net</span>
                                    <span class="list-subtitle">MetroUI: News on 26/10/2013</span>
                                    <span class="list-remark">Hello friend! Newest for Metro UI CSS</span>
                                </div>
                            </a>
                            <a href="#" class="list">
                                <div class="list-content">
                                    <span class="list-title">subscribe@metroui.net</span>
                                    <span class="list-subtitle">MetroUI: News on 26/10/2013</span>
                                    <span class="list-remark">Hello friend! Newest for Metro UI CSS</span>
                                </div>
                            </a>
                        </div>
                    <div class="fg-hover-blue text-center"><p><a>See all</a></p></div>
                </div>
            </li>
            <span class="element-divider place-left"></span>
           	<li>
            	<a class="dropdown-toggle place-right" style="padding-top: 0;padding-bottom: 0;padding-left: 1px" href="#">
                	<button class="element image-button bg-hover-transparent image-left place-right">
                    <?php 
					if($this->session->userdata('fname') != '' && $this->session->userdata('lname') != '') 
						echo ucfirst($this->session->userdata('fname')).' '.ucfirst($this->session->userdata('lname'));
					else
					 	echo ucfirst($this->session->userdata('email'));
					?>
                    <img src="assets/css/images/img.jpg"/>
                	</button>
                </a>
                <ul class="dropdown-menu place-right opacity" data-role="dropdown">
                	<li><a href="<?php echo base_url();?>in/profile?tab=default">Profile <i class="icon-user place-right"></i></a></li>
                	<li><a href="<?php echo base_url();?>in/settings?tab=default">Settings <i class="icon-tools place-right"></i></a></li>
                	<li><a href="home/acounts/logout?key=<?php echo sha1($this->session->userdata('login_key')+microtime());?>&user=user">Logout <i class="icon-switch place-right"></i></a></li>
            	</ul>
           </li>
        </ul>
    </div>
</div>
</header>
--->