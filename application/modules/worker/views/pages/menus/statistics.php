<div class="row">
	<div class="col-lg-12">
    	<div class="col-lg-6">
        	<div class="panel panel-info">
            	<div class="panel-heading">
                	Published Article
                </div>
                <div class="panel-body">
                	<?php 
						$this->db->where('author',$this->session->userdata('id'));
						$this->db->where('status','publish');
						$articles = $this->db->get('article');
					?>
                	<h1 style="width: 120px;margin: 0 auto;margin-bottom: 90px;margin-top: 50px"><?php echo $articles->num_rows();?> <small>Articles</small></h1>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
        	<div class="panel panel-success">
            	<div class="panel-heading">
                	Equivalent Earned Payout<button class="btn btn-default btn-xs pull-right">Request for payout <i class="fa fa-money"></i></button>
                </div>
                <div class="panel-body">
                    <div class="col-lg-12">
                    	<h1 style="width: 120px;margin: 0 auto;margin-bottom: 90px;margin-top: 50px">
                        Php <?php echo ($articles->num_rows()*20);?>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>