<div class="container">
	<div class="row">
        <div class="col-sm-3 col-md-2 sidebar sidebar-collapse collapse">
          <?php $this->load->view('includes/sidebar-left');?>
        </div>
        
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <?php
		$this->db->where('status','publish');
		$this->db->where('article_id',$_GET['ref']);
		$article = $this->db->get('article');
		if($article->num_rows() == 0){ echo '<h3>No Article to show yet</h3>';}
		else
		{
		foreach($article->result() as $row){	
		?>
        	<div class="col-sm-12" style="background: #fff;border: 1px solid #eee">
            
           		<div class="article-heading col-lg-12" style="margin-top: 30px">
                    <div class="article-image col-lg-3" style="padding-left: 0">
                        <img class="img-responsive img-thumbnail thumb" src="assets/images/article_images/<?php echo $row->cover_img;?>"/>
                    </div>
                    
                    <div class="article-info col-lg-9">
                        <div class="col-lg-12">
                            <h2>
                                <?php echo $row->title;?>
                            </h2>	
                        </div>
                        
                        <div class="article-meta col-lg-12">
                            <span class="fa fa-clock-o" style="padding-right: 20px">
                                <a href="in"> 
                                <small>
								<?php
								$a = strtotime($row->date_modified);
								echo date("F j,Y",$a);
								?>
                                </small>
                                </a>
                            </span>
                            <span class="fa fa-folder-o" style="padding-right: 20px">
                                <a href="in"> 
                                <small>
                                <?php 
								$this->db->where('category_post',$row->article_id);
								$category_rel = $this->db->get('category_relationships');
								foreach($category_rel->result() as $row2)
								{
									$this->db->where('category_id',$row2->category_id);
									$category = $this->db->get('category');
									foreach($category->result() as $row3)
									{
								?>
									<a href="">
										<?php echo $row3->category_name;?>,
									</a>
								<?php 
									}
								}
								;?>
                                </small>
                                </a>
                            </span>
                            <span class="fa fa-comments-o" style="padding-right: 20px">
                                <a href="in"> <small><?php echo $row->comment_count;?></small></a>
                            </span>
                            <span class="fa fa-smile-o" style="padding-right: 20px">
                                <a href="in"> <small><?php echo $row->reader_count;?></small></a>
                            </span>
                        </div>
                        
                    </div>
                </div>
                
                <div class="article-body col-lg-9" style="margin-top: 20px">
                	<div class="article-story" style="text-align: justify">
                    	 <?php echo $row->content;?>
                    </div>
                    
                    <div class="article-menu col-lg-12" style="margin-top: 40px">
                        <span class="text-muted">
                            <button class="btn btn-info btn-lg">Take Exam Now and grab .12 BTC <i class="fa fa-check"></i></button>
                        </span>
                    </div>
                    
                </div>
                
                <div class="col-lg-3" style="padding: 0px;margin: 0;margin-bottom: 20px">
                	<div class="adds-thumb-first" style="border: 1px solid #eee;height: 305px;margin-bottom: 20px">
                        <img class="img-responsive" src="assets/images/ads_images/ads-1-side.jpg"/>
                    </div>
                    <div class="adds-thumb-first" style="border: 1px solid #eee;height: 305px;">
                    	<img class="img-responsive" src="assets/images/ads_images/ads-2-side.jpg"/>
                    </div>
                </div>
                
            </div>
            
            <div class="fb-comments col-lg-12" style="background: #fff;margin-top: 20px;padding-top: 20">
                <div class="fb-comments" data-href="http://example.com/comments" data-numposts="5" data-colorscheme="light"></div>
            </div>
            
        <?php } } ?>
        </div>
	</div>
</div>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-543ab0832fde63e9" async></script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=151550335046016&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
