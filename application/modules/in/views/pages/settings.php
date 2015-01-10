<div class="container padding20 fg-black" style="border-right: 1px solid #ccc">
	<h3 class="padding20 subheader" style="padding-left: 0px;margin-bottom: 0px;border-bottom: 1px solid #ccc">
    	<a href="<?php echo base_url();?>"><i class="icon-arrow-left-3 fg-darker smaller"></i> </a>
        <?php 
		if($this->uri->segment(2) == 'settings') echo 'Acount';
		if($this->uri->segment(2) == 'profile') echo 'Profile';
		?> 
        <small>
        Settings 
        <?php 
			if($_GET['tab'] == 'myacount') echo '> My Acount';
			if($_GET['tab'] == 'payments') echo '> Payment Acount';
			if($_GET['tab'] == 'notifications') echo '> Notification Setting';
			if($_GET['tab'] == 'security') echo '> Security Setting';
			if($_GET['tab'] == 'feedback') echo '> Application Feedback';
		;?>
        </small>
    </h3>
    <div class="grid" style="margin-bottom: 200px">
    	<div class="row" style="margin-top: 0px">
        	<!--sidebar nav-->
        	<div class="span3" style="border-right: 1px solid #ccc">
                <nav class="vertical-menu compact">
                    <ul style="margin: 0px;padding: 0px;">
                    	<?php 
						if($this->uri->segment(2) == 'profile')
							echo'
							<li class="title" style="border-bottom: 1px solid #ccc;padding-bottom: 20px;padding-top: 10px">
								General <i class="place-right icon-user-3" style="margin-right: 10px"></i>
							</li>
							';
						else 
							echo '<li style="border-bottom: 1px solid #ccc;padding-bottom: 10px;padding-top: 0px">
								<a href="'.base_url().'in/profile?tab=default">General</a>
							</li>';
						?>
                        <?php 
						if($this->uri->segment(2) == 'settings')
							echo'
							<li class="title" style="border-bottom: 1px solid #ccc;padding-bottom: 20px;padding-top: 10px">
								Settings <i class="place-right icon-wrench" style="margin-right: 10px"></i>
							</li>
							';
						else 
							echo '<li style="border-bottom: 1px solid #ccc;padding-bottom: 10px;padding-top: 0px">
								<a href="'.base_url().'in/settings?tab=default">Settings</a>
							</li>';
						?>
                        <li>
                        	<a <?php if($_GET['tab'] == 'myacount') echo 'class="fg-blue"';?> href="<?php echo base_url();?>in/settings?tab=myacount">
                           		My Acount <i class="icon-arrow-right-4 place-right" style="margin-right: 20px"></i>
                            </a>
                       	</li>
                        <li>
                        	<a <?php if($_GET['tab'] == 'payments') echo 'class="fg-blue"';?> href="<?php echo base_url();?>in/settings?tab=payments">
                            	Payment Acount <i class="icon-arrow-right-4 place-right" style="margin-right: 20px"></i>
                            </a>
                       	</li>
                        <li>
                        	<a <?php if($_GET['tab'] == 'notifications') echo 'class="fg-blue"';?> href="<?php echo base_url();?>in/settings?tab=notifications">
                            	Notification setting <i class="icon-arrow-right-4 place-right" style="margin-right: 20px"></i>
                            </a>
                        </li>
                        <li>
                        	<a <?php if($_GET['tab'] == 'security') echo 'class="fg-blue"';?> href="<?php echo base_url();?>in/settings?tab=security">
                            	Security Setting <i class="icon-arrow-right-4 place-right" style="margin-right: 20px"></i>
                            </a>
                        </li>
                        <li>
                        	<a <?php if($_GET['tab'] == 'feedback') echo 'class="fg-blue"';?> href="<?php echo base_url();?>in/settings?tab=feedback">
                            	Application Feedback <i class="icon-arrow-right-4 place-right" style="margin-right: 20px"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!--end-->
            
            <!--GENERAL-->
            <?php 
			if($this->uri->segment(2) == 'profile')
			{
				echo
				'
					<div class="span10 margin20 no-tablet no-phone" style="margin-left: 50px;margin-top: 40px">
						<div class="span3">
							<div class="image-container" style="width: 200px;height: 150px">
								<img src="assets/css/images/gt86blackwarehousesmall.jpg" style="width: 200px;height: 150px" />
							</div>
							<div class="input-control file span2" style="margin-top: 10px">
								<input type="file" />
								<button class="btn-file"></button>
							</div>
							<br />
							<small style="margin-left: 10px">browse</small>
						</div>
						
						<div class="span7">
							<h3 class="subheader" style="border-bottom: 1px solid #ccc;padding-bottom: 10px;margin-bottom: 0px">
								<small>
								Primary Information
								</small>
							</h3>
							<div class="listview-outlook" data-role="listview">
								<div class="listview-outlook" data-role="listview">
									<a class="list" href="#">
										<div class="list-content">
											<span class="list-title">Ryan</span>
											<span class="list-remark">First Name</span>
										</div>
									</a>
									<a class="list" href="#">
										<div class="list-content">
											<span class="list-title">Lebrilla</span>
											<span class="list-remark">Middle Initial</span>
										</div>
									</a>
									<a class="list" href="#">
										<div class="list-content">
											<span class="list-title">Dingle</span>
											<span class="list-remark">Last Name</span>
										</div>
									</a>
									<a class="list" href="#">
										<div class="list-content">
											<span class="list-title">Male</span>
											<span class="list-remark">Gender</span>
										</div>
									</a>
									<a class="list" href="#">
										<div class="list-content">
											<span class="list-title">17</span>
											<span class="list-remark">Age</span>
											<i class="icon-pencil place-right" style="
											cursor: pointer;position: absolute;margin-top: -30px;margin-right: 10px;right: 0
											"
											data-hint="Edit Info" data-hint-position="top">
											<span class="list-remark">Edit</span>
											</i>
										</div>
									</a>
									<a class="list" href="#">
										<div class="list-content">
											<span class="list-title">Can Avid Eastern Samar</span>
											<span class="list-remark">Birth Place</span>
											<i class="icon-pencil place-right" style="
											cursor: pointer;position: absolute;margin-top: -30px;margin-right: 10px;right: 0
											"
											data-hint="Edit Info" data-hint-position="top">
											<span class="list-remark">Edit</span>
											</i>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				';
			}
			;?>
            <!--END-->
            
            <!--myacount-->
            <?php 
			if($this->uri->segment(2) == 'settings')
			{
				if($_GET['tab'] == 'myacount' || $_GET['tab'] == 'default')
				echo 
					'
					<div class="span10 margin20 no-tablet no-phone" style="margin-left: 50px">
						<h3 class="subheader" style="border-bottom: 1px solid #ccc;padding-bottom: 10px;margin-bottom: 0px">
							<small>
							Acount Information settings
							</small>
						</h3>
						<div class="listview-outlook" data-role="listview">
							<a class="list" href="#">
								<div class="list-content">
									<span class="list-title">'.$this->session->userdata('email').'</span>
									<span class="list-remark">Primary Email Address</span>
									<i class="icon-pencil place-right" style="
									cursor: pointer;position: absolute;margin-top: -30px;margin-right: 10px;right: 0
									"
									data-hint="Change Email" data-hint-position="top">
									<span class="list-remark">Edit</span>
									</i>
								</div>
							</a>
							<a class="list" href="#">
								<div class="list-content">
									<span class="list-title">Sample Username</span>
									<span class="list-remark">Username</span>
									<i class="icon-pencil place-right" style="
									cursor: pointer;position: absolute;margin-top: -30px;margin-right: 10px;right: 0
									"
									data-hint="Change Username" data-hint-position="top">
									<span class="list-remark">Edit</span>
									</i>
								</div>
							</a>
							<a class="list" href="#">
								<div class="list-content">
									<span class="list-title">******</span>
									<span class="list-remark">Password</span>
									<i class="icon-pencil place-right" style="
									cursor: pointer;position: absolute;margin-top: -30px;margin-right: 10px;right: 0
									"
									data-hint="Change Password" data-hint-position="top">
									<span class="list-remark">Edit</span>
									</i>
								</div>
							</a>
							<a class="list" href="#">
								<div class="list-content">
									<span class="list-title">09809</span>
									<span class="list-remark">Mobile</span>
									<i class="icon-pencil place-right" style="
									cursor: pointer;position: absolute;margin-top: -30px;margin-right: 10px;right: 0
									"
									data-hint="Change or add mobile Number" data-hint-position="top">
									<span class="list-remark">Edit</span>
									</i>
								</div>
							</a>
						</div>
						<div class="fb-comments" data-href="http://localhost/project1/in/settings" data-numposts="5" data-colorscheme="light"></div>
					</div>
					';
			}
			;?>
            <!--end-->
            
        </div>
    </div>
</div>