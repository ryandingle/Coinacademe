<div class="row">
    <div class="col-lg-12">
        <div class="col-lg-2" style="padding-right: 0;padding-left: 0">
            <div class="form-group">
                <select class="form-control input-sm action" data-selection="article">
                    <option value="none">Actions</option>
                    <option value="delete">Move to trash</option>
                </select>
            </div>
        </div>
        <form method="GET">
        <input type="hidden" name="tab" value="published">
        <input type="hidden" class="s_date_hidden" name="show_date" value="">
        <input type="hidden" class="s_category_hidden" name="show_category" value="">
        <div class="col-lg-2">
            <div class="form-group">
                <select class="form-control input-sm show_by s_date" data-show-by="date">
                    <option value="">Show all dates</option>
                    <?php foreach($published2->result() as $row){
					$a = strtotime($row->date_modified);
					$date = date("F j, Y",$a);
					?>
                    <option value="<?php echo date($row->date_modified);?>"><?php echo $date;?></option>
                    <?php };?>
                </select>
            </div>
        </div>
        <div class="col-lg-2" style="padding-right: 0;padding-left: 0">
            <div class="form-group">
                 <select class="form-control input-sm show_by s_category" data-show-by="category">
                    <option value="">Show all categories</option>
                    <?php foreach($categories2->result() as $cats){?>
                    <option value="<?php echo $cats->category_id;?>"><?php echo $cats->category_name;?></option>
                    <?php };?>
                </select>
            </div>
        </div>
        <div class="col-lg-1" style="padding-left: 5px">
            <button type="submit" class="btn btn-outline btn-default btn-sm">Apply</button>
        </div>
        </form>
        <div class="pull-right" style="line-height: 3em">
            <small>Showing: <code>
			<?php if($published < 5) echo '<p class="num_rows"></p>';
				  else echo '5';
			?>
             Items</code> 
             of <?php echo $all_category;?> Published Articles
             </small>
        </div>
        <table class="table table-hover" class="table_no_" style="border: 1px solid #ccc">
            <thead style="background: #f5f5f5">
                <tr>
                    <th><input type="checkbox" class="check_all">  Title</th>
                    <th>Author</th>
                    <th>Categories</th>
                    <th><i class="fa fa-comments"></i></th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
            <?php 
			foreach($b->result() as $rows){
				$this->db->where('article_id',$rows->category_post);
				$this->db->where('status','publish');
				$this->db->where('author',$this->session->userdata('id'));
				$published = $this->db->get('article');
				$categories = $this->db->get('category',10);
					
				if($published->num_rows() == 0) echo '<tr>
                    <td>No Published Article !</td></tr>';
				foreach($published->result() as $row){?>
                <input type="hidden" class="all" value="<?php echo $published->num_rows();?>" />
                <tr>
                    <td>
                    <div>
                        <a href="">
                            <input type="checkbox" class="checker" name="article_checker[]" value="<?php echo $row->article_id;?>">
                            <label><?php echo character_limiter($row->title,70);?></label>
                        </a>
                    <div>
                    <div>
                        <div class="action-links" style="height: 20px;width: 100%">
                            <small style="display: non">
                            <a href="javascript:void(0)" class="quick_action" data-item-id="<?php echo $row->article_id;?>" data-action="edit" data-selection="article">Edit</a>
                             | 
                            <a href="javascript:void(0)" class="quick_action" data-item-id="<?php echo $row->article_id;?>" data-action="delete" data-selection="article">Trash</a>
                            </small>
                        </div>
                    </div>
                    </td>
                    <td>
                        <label><?php echo $this->session->userdata('email');?></label>
                    </td>
                    <td>
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
                    </td>
                    <td>
                        <code><?php echo $row->comment_count;?></code>
                    </td>
                    <td>
                        <small>
                            <?php 
							$a = strtotime($row->date_modified);
							echo date("F j, Y",$a);
							?>
                            <br>
                            <?php echo $row->status;?>
                        </small>
                    </td>
                </tr>
                <?php }};?>
            </tbody>
            <tfooter>
                <tr style="background: #f5f5f5">
                    <th>Title</th>
                    <th>Author</th>
                    <th>Categories</th>
                    <th><i class="fa fa-comments"></i></th>
                    <th>Date</th>
                </tr>
            </tfooter>
        </table>
        <div class="col-lg-2" style="padding-right: 0;padding-left: 0">
            <div class="form-group">
                <select class="form-control input-sm action_bottom" data-selection="article">
                    <option value="none">Actions</option>
                    <option value="delete">Move to trash</option>
                </select>
            </div>
        </div>
        <div style="line-height: 3em">
            <small class="pull-right">Showing: <code>
			<?php if($published < 5) echo $published->num_rows();
				  else echo '5';
			?>
             Items</code> 
             of <?php echo $all_category;?> Published Articles
             </small>
        </div>
	</div>
</div>

<script src="assets/admin/js/jquery-1.10.2.js"></script>
<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
<script src="assets/admin/js/bootstrap.min.js"></script>
<script src="assets/admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="assets/admin/js/plugins/morris/raphael-2.1.0.min.js"></script>
<script src="assets/admin/js/plugins/morris/morris.js"></script>
<script src="assets/admin/js/sb-admin.js"></script>
<script src="assets/admin/nicedit/nicEdit.js" type="text/javascript"></script>
<script src="assets/admin/nicedit/do.js" type="text/javascript"></script>
<script src="assets/js/site/global_config.js"></script>
<script src="assets/admin/js/back-end-prototype.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#old').hide();
		$('.num_rows').html($('.all').val());
	});
</script>