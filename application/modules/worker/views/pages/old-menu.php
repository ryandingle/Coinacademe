<div class="container padding10">
	<div class="grid">
    	<div class="row margin10">
        	<div class="span3 bg-blue no-tablet">
            	<nav class="sidebar light" style="border: 1px solid #E6E6E6">
                    <ul>
                        <li class="active"><a href="worker/in"><i class="icon-home"></i>Dashboard</a></li>
                        <li><a href="worker/in/menu?tab=articles"><i class="icon-list"></i>Articles</a></li>
                        <li><a href="worker/in/menu?tab=drafts"><i class="icon-files"></i>Drafts</a></li>
                        <li><a href="worker/in/menu?tab=new_article"><i class="icon-plus-2"></i>New</a></li>
                        <li><a href="worker/in/menu?tab=categories"><i class="icon-folder-2"></i>Categories</a></li>
                        <li><a href="worker/in/menu?tab=tags"><i class="icon-tag"></i>tags</a></li>
                        <li><a href="worker/in/menu?tab=statistics"><i class="icon-bars"></i>Statistic</a></li>
                        <li><a href="worker/in/menu?tab=settings"><i class="icon-tools"></i>Settings</a></li>
                    </ul>
                </nav>
            </div>
            <div class="span11">
            	<div>
                <h3 style="margin-top: 0px" class="subheader">Dashboard <i class="icon-home"></i>
                 <small>
                 	<?php
						if($_GET['tab'] == 'articles') echo '> Articles';
						if($_GET['tab'] == 'drafts') echo '> Drafts';
						if($_GET['tab'] == 'new_article') echo '> New Article';
						if($_GET['tab'] == 'categories') echo '> Categories';
						if($_GET['tab'] == 'tags') echo '> Tags';
						if($_GET['tab'] == 'statistics') echo '> Statistics';
						if($_GET['tab'] == 'settings') echo '> Settings';
					?>
                 </small>
                </h3>
                </div>
                <?php
					if($_GET['tab'] == 'articles') echo '> Articles';
					if($_GET['tab'] == 'drafts') echo '> Drafts';
					if($_GET['tab'] == 'new_article') 
					echo 
					'
						
					';
					if($_GET['tab'] == 'categories') echo '> Categories';
					if($_GET['tab'] == 'tags') echo '> Tags';
					if($_GET['tab'] == 'statistics') echo '> Statistics';
					if($_GET['tab'] == 'settings') echo '> Settings';
				?>
                <div class="grid bg-white padding5">
                	<div class="row">
                    	<div class="span8">
                        	<div class="new_artile_section">
								<?php echo form_open('');?>
                                <div class="input-control text">
                                    <input type="text" value="<?php echo set_value('article_title');?>" name="article_title" placeholder="Article Title Here" 
                                    required="required"
                                    
                                    />
                                    <button class="btn-clear"></button>
                                </div>
                                <?php echo form_close();?>
                            </div>
                        </div>
                        
                        <div class="span3">
                        	<div class="panel">
                                <div class="panel-header bg-blue bd-gray">
                                    <small class="fg-white">Status</small>
                                </div>
                                <div class="panel-content">
                                    <div class="input-control select">
                                        <select>
                                            <option>Value 1</option>
                                            <option>Value 2</option>
                                            <option>Value 3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                              
                <div><h3 class="subheader"><small>Thank you for using coinacademe. <i class="icon-thumbs-up"></i></small></h3></div>
            </div>
        </div>
    </div>
</div>