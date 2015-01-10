<div class="container">
    <div class="grid fluid">
        <div class="row">
            <?php $this->load->view('includes/sidebar-left');?>
            <?php $this->load->view('includes/content-nav');?>
            <div class="span7" id="article-list" style="margin: 0px">
            <?php foreach($articles->result() as $row){?>
            	<div class="span11 padding10 bg-white" style="border: 1px solid #ccc;margin-left: 20px;margin-top: 10px">
                    <div class="span6 image-container">
                        <img src="assets/images/article_images/<?php echo $row->cover_img;?>" class="span12" style="width: 282px;height: 188px" />
                        <div class="overlay-fluid">
                            Sample Description here................
                        </div>
                        <div class="brand margin5 fg-white" style="border: 1px solid #fff;position: absolute">
                            <div class="badge bg-blue" style="padding: 5px">PHP 99</div>
                        </div>
                    </div>
                    
                    <div class="offset6" style="padding: 0px;margin: 0px">
                        <div style="font-size: 30px;padding: 0px">
                            <div class="article-title" style="height: 80px">
                                <?php echo $row->title;?>
                                <p style="font-size: 12px">
                                <?php echo $row->content;?>
                                Description : dklwjdlqldjqlkdjldklwjdlqldjqlkdjl
                                dklwjdlqldjqlkdjl
                                dklwjdlqldjqlkdjl
                                dklwjdlqldjqlkdjl
                                dklwjdlqldjqlkdjl
                                Description : dklwjdlqldjqlkdjldklwjdlqldjqlkdjl
                                dklwjdlqldjqlkdjl
                                dklwjdlqldjqlkdjl
                                dklwjdlqldjqlkdjl
                                dklwjdlqldjqlkdjl
                                Description : dklwjdlqldjqlkdjldklwjdlqldjqlkdjl
                                dklwjdlqldjqlkdjl
                                dklwjdlqldjqlkdjl
                                dklwjdlqldjqlkdjl
                                dklwjdlqldjqlkdjl
                                </p>
                            </div>
                        </div>
                        
                        <h1 style="font-size: 20px;color: #666;margin-top: -px">
                            <font color="#09f">104</font> taken this article
                        </h1>
                        
                        <div class="no-phone button-groups" style="cursor:pointer;color: #777;margin-top: -20px">
                            <button class="image-button success" data-hint="Take this course." data-hint-position="top">
                                Take now!
                                <i class="icon-checkmark bg-cobalt"></i>
                            </button>
                            <button class="image-button default" data-hint="Reserve to list | Add to your list." data-hint-position="top">
                                Add to list
                                <i class="icon-cabinet bg-cobalt"></i>
                            </button>
                            <div  style="margin-top: 5px">
                                <div class="button-dropdown place-left">
                                    <button class="dropdown-toggle link info" data-hint="Share article to social websites." data-hint-position="bottom">Share</button>
                                    <ul class="dropdown-menu" data-role="dropdown">
                                        <li><a href="#">Facebook <i class="icon-facebook place-right"></i></a></li>
                                        <li><a href="#">Twitter <i class="icon-twitter place-right"></i></a></li>
                                    </ul>
                                </div>
                                <button class="primary link" data-hint="Love this article." data-hint-position="bottom">
                                    Love
                                </button>
                                <button class="link warning" data-hint="Report this article." data-hint-position="bottom">
                                    Report
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            	<?php 
					for($a = 1;$a<=20;$a++)
					{
						echo 
						'
						<!--<div class="span11 padding10 bg-white" style="border: 1px solid #ccc;margin-left: 20px;margin-top: 10px">
							<div class="span6 image-container">
								<img src="assets/css/images/10_Toyota_GT861.jpg" class="span12" style="width: 282px;height: 188px" />
								<div class="overlay-fluid">
									Sample Description here................
								</div>
								<div class="brand margin5 fg-white" style="border: 1px solid #fff;position: absolute">
									<div class="badge bg-blue" style="padding: 5px">PHP 99</div>
								</div>
							</div>
							
							<div class="offset6" style="padding: 0px;margin: 0px">
								<div style="font-size: 30px;padding: 0px">
									<div class="article-title" style="height: 80px">
										Sample title ....
										<p style="font-size: 12px">
										Description : dklwjdlqldjqlkdjldklwjdlqldjqlkdjl
										dklwjdlqldjqlkdjl
										dklwjdlqldjqlkdjl
										dklwjdlqldjqlkdjl
										dklwjdlqldjqlkdjl
										Description : dklwjdlqldjqlkdjldklwjdlqldjqlkdjl
										dklwjdlqldjqlkdjl
										dklwjdlqldjqlkdjl
										dklwjdlqldjqlkdjl
										dklwjdlqldjqlkdjl
										Description : dklwjdlqldjqlkdjldklwjdlqldjqlkdjl
										dklwjdlqldjqlkdjl
										dklwjdlqldjqlkdjl
										dklwjdlqldjqlkdjl
										dklwjdlqldjqlkdjl
										</p>
									</div>
								</div>
								
								<h1 style="font-size: 20px;color: #666;margin-top: -px">
									<font color="#09f">104</font> taken this article
								</h1>
								
								<div class="no-phone button-groups" style="cursor:pointer;color: #777;margin-top: -20px">
									<button class="image-button success" data-hint="Take this course." data-hint-position="top">
										Take now!
										<i class="icon-checkmark bg-cobalt"></i>
									</button>
									<button class="image-button default" data-hint="Reserve to list | Add to your list." data-hint-position="top">
										Add to list
										<i class="icon-cabinet bg-cobalt"></i>
									</button>
									<div  style="margin-top: 5px">
										<div class="button-dropdown place-left">
											<button class="dropdown-toggle link info" data-hint="Share article to social websites." data-hint-position="bottom">Share</button>
											<ul class="dropdown-menu" data-role="dropdown">
												<li><a href="#">Facebook <i class="icon-facebook place-right"></i></a></li>
												<li><a href="#">Twitter <i class="icon-twitter place-right"></i></a></li>
											</ul>
										</div>
										<button class="primary link" data-hint="Love this article." data-hint-position="bottom">
											Love
										</button>
										<button class="link warning" data-hint="Report this article." data-hint-position="bottom">
											Report
										</button>
									</div>
								</div>
							</div>
						</div>-->
						';
					}
				;?>
            </div>
            <?php $this->load->view('includes/sidebar-right');?>
        </div>
    </div>
</div>