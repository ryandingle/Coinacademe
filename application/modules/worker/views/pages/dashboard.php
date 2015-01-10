<div id="wrapper" style="background-color:#1ba1e2">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header" style="margin-top: 20px"><i class="fa fa-dashboard"></i> Dashboard </h3>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
        	<div class="col-lg-12">
            	<div class="jumbotron" style="text-align: center">
                	<h1>COINACADEME INC.</h1>
                    <h3>Coinacademe is source of educational porposes that help's users to enhance thier skills and knowledge<br />about the things that they want to know.</h3>
                </div>
            	
            </div>
        	
            <div class="col-lg-8">
                <!--<div class="panel panel-info">
                    <div class="panel-heading">
                        Quick Run
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                        	<label>Title</label>
                            <input type="text" class="form-control input-sm" placeholder="Enter article title here..">
                        </div>
                        <div class="form-group">
                        	<label>Content</label>
                            <textarea class="form-control" placeholder="Enter article content here..."></textarea>
                        </div>
                        <div class="form-group" style="padding-left: 0px">
                        	<label>Image Cover</label>
                            <input type="file" class="form-control input-sm" placeholder="Enter article title here..">
                        </div>
                        <div class="form-group">
                        	<button type="button" class="btn btn-primary pull-right" style="margin-left: 20px">Publish <i class="fa fa-check fa-fw"></i></button>
                        	<button type="button" class="btn btn-outline btn-default pull-right">Save Draft <i class="fa fa-save fa-fw"></i></button>
                        </div>
                    </div>
                </div>--->
                <div class="alert alert-info alert-dismissable">
                   <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>-->
                    <h4>Welcome to Coinacademe <?php echo $this->session->userdata('email');?></h4>
                    <p>We’ve assembled some links to get you started:</p><br /><br />
                    <div class="row">
                    	<div class="col-lg-12" style="margin-bottom: 40px;border-bottom: 1px solid #ccc;padding-bottom:20px">
                            <h4>Next Steps</h4>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="worker/in/menu?tab=new_article" style="color: #000;text-decoration: underline;padding:0;margin-bottom: 10px;margin-top:10px">
                                    <i class="fa fa-file fa-fw"></i> Write your first article
                                    </a>
                                </li>
                                <li>
                                    <a href="worker/in/menu?tab=articles" style="color: #000;text-decoration: underline;padding:0;margin-bottom: 10px">
                                    <i class="fa fa-list fa-fw"></i> Show all published article
                                    </a>
                                </li>
                                <li>
                                    <a href="worker/in/menu?tab=drafts" style="color: #000;text-decoration: underline;padding:0">
                                    <i class="fa fa-save fa-fw"></i> Show all drafts articles
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-12" style="margin-bottom: 40px;border-bottom: 1px solid #ccc;padding-bottom:20px">
                        	<h4>Other Steps</h4>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="worker/in/menu?tab=categories" style="color: #000;text-decoration: underline;padding:0;margin-bottom: 10px;margin-top:10px">
                                    <i class="fa fa-folder-o fa-fw"></i> Add Category
                                    </a>
                                </li>
                                <li>
                                    <a href="worker/in/menu?tab=tags" style="color: #000;text-decoration: underline;padding:0;margin-bottom: 10px">
                                    <i class="fa fa-tag fa-fw"></i> Add tags
                                    </a>
                                </li>
                            </ul>
                    	</div>
                        <div class="col-lg-12" style="margin-bottom: 40px;padding-bottom:20px">
                        	<h4>Important</h4>
                            <ul class="nav nav-second-level col-lg-8">
                                <li>
                                    <a href="worker/in/menu?tab=statistics" style="color: #000;text-decoration: underline;padding:0;margin-bottom: 10px;margin-top:10px">
                                    <i class="fa fa-bar-chart-o fa-fw"></i> Show acount statistics
                                    </a>
                                </li>
                                <li>
                                    <a href="worker/in/menu?tab=settings" style="color: #000;text-decoration: underline;padding:0;margin-bottom: 10px">
                                    <i class="fa fa-user fa-fw"></i> Update your acount
                                    </a>
                                </li>
                                <li>
                                    <a href="worker/in/menu?tab=learnmore" style="color: #000;text-decoration: underline;padding:0">
                                    <i class="fa fa-info fa-fw"></i> Learn more getting started.
                                    </a>
                                </li>
                            </ul>
                    	</div>
                    </div>
                </div>
           	</div>
           
           	<div class="col-lg-4">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Right Now
                    </div>
                    <div class="panel-body">
                    
                        <div class="col-lg-6">
                        	<h4>Count</h4>
                            <ul class="nav nav-second-level col-lg-8">
                                <li>
                                <?php 
									$this->db->where('author',$this->session->userdata('id'));
									$this->db->where('status','publish');
									$articles = $this->db->get('article');
								?>
                                    <a href="worker/in/menu?tab=published" style="color: #000;text-decoration: underline;padding:0;margin-bottom: 10px;margin-top:10px">
                                    <?php echo $articles->num_rows();?> Article
                                    </a>
                                </li>
                            </ul>
                    	</div>
                        
                        <div class="col-lg-6" style="margin-bottom: 20px">
                        	<h4>points</h4>
                            <ul class="nav nav-second-level col-lg-8">
                                <li>
                                    <a href="worker/in/menu?tab=statistics" style="color: #000;text-decoration: underline;padding:0;margin-bottom: 10px;margin-top:10px">
                                    Php <?php echo ($articles->num_rows()*20);?>
                                    </a>
                                </li>
                            </ul>
                    	</div>
                        <small>You are using coinacademe as worker.</small>
                    </div>
                </div>
                
            </div>
        </div>
        
	<div style="border-top: 1px solid #ccc;width: 100%;padding-top: 10px">
		<small>Thank you for using <a href="<?php echo base_url();?>">coinacademe</a>. <i class="fa fa-like fw"></i></small>
    </div>
    </div>
</div>