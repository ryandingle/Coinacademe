<div class="row">
    <div class="col-lg-12">  
        <div class="col-lg-5" style="margin-bottom: 40px">
        	<header style="margin-bottom: 40px">
                <h4>Acount Information 
                	<a href="javascript:void(0)" style="font-size: 14px;color: #999" data-toggle="modal" data-target=".editmodal">  
                    <i class="fa fa-pencil"></i>Edit </a>
                </h4>
            </header>
            <div style="margin-left: 20px">
                <label>Name :</label> <font color="#09f"><?php echo $this->session->userdata('f_name').' '.$this->session->userdata('l_name');?></font><br />
                <label>Role :</label> <font color="#09f"><?php if($this->session->userdata('user_type') == 22) echo 'Worker';?></font><br />
                <label>Email Address :</label> <font color="#09f"><?php echo $this->session->userdata('email');?></font><br />
                <label>Password :</label> <font color="#09f">**************</font><br />
                <label>Status :</label> <font color="#09f"><?php if($this->session->userdata('status') == 11) echo 'Active'; else echo 'Not Active';?></font><br />
            </div>
        </div>
	</div>
</div>

<div class="editmodal modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
            <div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            	<h4 class="modal-title">Edit Acount</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                    <?php
						$attributes = array('class'=>'updatesettings-form'); 
						echo form_open('worker/ajax/action_request/?action=update&define=w_settings',$attributes);?>
                    	<div class="update_acount_validation_message">
                        </div>
                        <div class="form-group">
                        	<label>First Name</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                
                            <input type="text" name="f_name" class="form-control" value="<?php echo $this->session->userdata('f_name');?>" />
                            </div>
                        </div>
                        <div class="form-group">
                        	<label>Last Name</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                
                            <input type="text" name="l_name" class="form-control" value="<?php echo $this->session->userdata('l_name');?>" />
                            </div>
                        </div>
                        <div class="form-group">
                        	<label>Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                
                            <input type="email" name="email" class="form-control" value="<?php echo $this->session->userdata('email');?>"  />
                            </div>
                        </div>
                        <div class="form-group">
                        	<label>Password</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                
                            <input type="password" name="password" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                        	<label>Repeat Password</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                
                            <input type="password" name="password2" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                        	<button type="submit" class="pull-right btn btn-info">Update <i class="fa fa-save"></i></button>
                        </div>
                        <?php echo form_close();?>
                    </div>
                </div>
            </div>
		</div>
	</div>
</div>