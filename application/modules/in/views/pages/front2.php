<div class="container">
  <div class="row">
    <div class="col-sm-3 col-md-2 sidebar sidebar-collapse collapse">
      <?php $this->load->view('includes/sidebar-left');?>
    </div>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="alert ads-section" role="alert">
      		<button title="Hide add" type="button" class="close" data-dismiss="alert" style="position: absolute;margin: 0px;padding: 0px">
            	<span aria-hidden="true">&nbsp;&times;</span><span class="sr-only">Close</span>
            </button>
            <img class="img-responsive" src="assets/images/ads_images/sample-ads.jpg"/>
        </div>
          
        <div class="row placeholders">
        <?php 
		$this->db->where('status','publish');
		$article = $this->db->get('article');
		if($article->num_rows() == 0){ echo '<h3>No Article to show yet</h3>';}
		else
		{
		foreach($article->result() as $row){
		?>
        <a href="in/article?ref=<?php echo $row->article_id;?>&action=img">
            <div class="col-xs-6 col-sm-3" style="margin-bottom: 50px">
            	<img class="img-thumbnail thumbs" alt="<?php echo $row->title;?>" src="assets/images/article_images/<?php echo $row->cover_img;?>">
           		<div class="links">
                	<h5 class="article-title">
                    	<a href="in/article?ref=<?php echo $row->article_id;?>&action=title"><b style="color: #555"><?php echo character_limiter($row->title,70);?></b></a>
                    </h5>
      				<span class="article-text-info text-muted">
                    	<font color="#09f" title="Article Readers"><?php echo $row->reader_count;?></font> users read this article<br />
                        <font color="#09f" title="Article Examinees"><?php echo $row->exam_count;?></font> users take exam this article<br />
                        <font color="#09f" title="Date Published">
							<?php
							$a = strtotime($row->date_modified);
							echo date("F j,Y",$a);
							?>
                            <i class="fa fa-watch"></i>
                        </font> 
                    </span>
                    <br />
                    <span class="text-muted">
                    	<a href="in/article?ref=4&action=read">
                        <button class="btn btn-info btn-xs">Read <i class="fa fa-book"></i></button>
                        </a>
                        <a href="in/article?ref=4&action=exam">
                        <button class="btn btn-info btn-xs">Exam <i class="fa fa-check"></i></button>
                        </a>
                    </span>
                </div>
            </div>
        </a>
        <?php }};?>
        </div>
	</div>
  </div>
</div>
