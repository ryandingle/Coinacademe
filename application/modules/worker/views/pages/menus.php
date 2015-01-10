<div id="wrapper" style="background-color:#1ba1e2">
    <div id="page-wrapper">
        <div class="row">
            <?php
				if($_GET['tab'] == 'published')
				{
					echo 
					'
					<div class="col-lg-12">
						<h3 class="page-header" style="margin-top: 20px">
							<div class="row">
								<div class="col-lg-9"><i class="fa fa-book"></i> Published Articles </div>
								<form method="GET">
								<div class="input-group col-lg-3">
									<input type="hidden" name="tab" value="published">
									<input name="search" value="'.$_GET['search'].'" id="btn-input" type="text" class="form-control input-sm" placeholder="Search title keywork..">
									<span class="input-group-btn">
										<button class="btn btn-default btn-sm">
											<i class="fa fa-search fw"></i>&nbsp;
										</button>
									</span>
								</div>
								</form>
							</div>
						</h3>
					</div>
					';
					$this->load->view('menus/published');
				}
				if($_GET['tab'] == 'drafts')
				{
					echo 
					'
					<div class="col-lg-12">
						<h3 class="page-header" style="margin-top: 20px">
							<div class="row">
								<div class="col-lg-9"><i class="fa fa-save"></i> Drafts Articles </div>
								<form method="GET">
								<div class="input-group col-lg-3">
										<input type="hidden" name="tab" value="drafts">
										<input name="search" value="'.$_GET['search'].'" id="btn-input" type="text" class="form-control input-sm" placeholder="Search title keywork..">
									<span class="input-group-btn">
										<button class="btn btn-default btn-sm">
											<i class="fa fa-search fw"></i>&nbsp;
										</button>
									</span>
								</div>
								</form>
							</div>
						</h3>
					</div>
					';

					$this->load->view('menus/drafts');
				}
				if($_GET['tab'] == 'new_article' || $_GET['command'] == 'insert')
				{
					echo 
					'
					<div class="col-lg-12">
						<h3 class="page-header" style="margin-top: 20px">
						<i class="fa fa-book"></i> New Article 
						</h3>
					</div>
					';
					$this->load->view('menus/new_article');
				}
				if($_GET['tab'] == 'edit_article' || $_GET['command'] == 'update')
				{
					echo 
					'
					<div class="col-lg-12">
						<h3 class="page-header" style="margin-top: 20px">
						<i class="fa fa-book"></i> Edit Article 
						</h3>
					</div>
					';
					$this->load->view('menus/edit_article');
				}
				if($_GET['tab'] == 'categories')
				{
					echo 
					'
					<div class="col-lg-12">
						<h3 class="page-header" style="margin-top: 20px">
						<i class="fa fa-folder"></i> Categories 
						</h3>
					</div>
					';
					$this->load->view('menus/categories');
				}
				if($_GET['tab'] == 'tags')
				{
					echo 
					'
					<div class="col-lg-12">
						<h3 class="page-header" style="margin-top: 20px">
						<i class="fa fa-tag"></i> Tags 
						</h3>
					</div>
					';
					$this->load->view('menus/tags');
				}
				if($_GET['tab'] == 'statistics')
				{
					echo 
					'
					<div class="col-lg-12">
						<h3 class="page-header" style="margin-top: 20px">
						<i class="fa fa-bar-chart-o"></i> Statistics
						</h3>
					</div>
					';
					$this->load->view('menus/statistics');
				}
				if($_GET['tab'] == 'settings')
				{
					echo 
					'
					<div class="col-lg-12">
						<h3 class="page-header" style="margin-top: 20px"> 
						<i class="fa fa-wrench"></i> Settings 
						</h3>
					</div>
					';
					$this->load->view('menus/settings');
				}
				?>
        </div>
        
        
        <div style="border-top: 1px solid #ccc;width: 100%;padding-top: 10px">
            <small>Thank you for using <a href="<?php echo base_url();?>">coinacademe</a>. <i class="fa fa-like fw"></i></small>
        </div>
	</div>
</div>