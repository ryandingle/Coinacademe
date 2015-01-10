<?php
	//error_reporting(E_ALL);

	if($_GET['show_date'] != '')
	{
		$config['base_url'] = base_url().'worker/in/menu?tab=drafts&show_date='.$_GET['show_date'].'';
		$this->db->like('date_modified',$_GET['show_date']);
		$this->db->where('author',$this->session->userdata('id'));
		$this->db->where('status','draft');
		$config['total_rows'] = $this->db->get('article')->num_rows();
		$config['per_page'] = 20;
		$config['page_query_string'] = TRUE;
		$config['num_links'] = 4;
		$this->db->like('date_modified',$_GET['show_date']);
		$this->db->where('author',$this->session->userdata('id'));
		$this->db->where('status','draft');
		$published = $this->db->get('article',$config['per_page'],$_GET['per_page']);
		$this->pagination->initialize($config); 
		$links =  $this->pagination->create_links();
	}
	elseif($_GET['search'] != '')
	{
		$config['base_url'] = base_url().'worker/in/menu?tab=drafts&search='.$_GET['search'].'';
		$this->db->like('title',$_GET['search']);
		$this->db->where('author',$this->session->userdata('id'));
		$this->db->where('status','draft');
		$config['total_rows'] = $this->db->get('article')->num_rows();
		$config['per_page'] = 20;
		$config['page_query_string'] = TRUE;
		$config['num_links'] = 4;
		$this->db->like('title',$_GET['search']);
		$this->db->where('author',$this->session->userdata('id'));
		$this->db->where('status','draft');
		$published = $this->db->get('article',$config['per_page'],$_GET['per_page']);
		$this->pagination->initialize($config); 
		$links =  $this->pagination->create_links();
	}
	else
	{
		$config['base_url'] = base_url().'worker/in/menu?tab=drafts';
		$this->db->where('author',$this->session->userdata('id'));
		$this->db->where('status','draft');
		$config['total_rows'] = $this->db->get('article')->num_rows();
		$config['per_page'] = 20;
		$config['page_query_string'] = TRUE;
		$config['num_links'] = 4;
		$this->db->where('author',$this->session->userdata('id'));
		$this->db->where('status','draft');
		$published = $this->db->get('article',$config['per_page'],$_GET['per_page']);
		$this->pagination->initialize($config); 
		$links =  $this->pagination->create_links();
	}
	$this->db->where('author',$this->session->userdata('id'));
	$this->db->where('status','draft');
	$published2 = $this->db->get('article');
	$categories = $this->db->get('category');
?>
<div class="row" id="old">
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
        <input type="hidden" name="tab" value="drafts">
        <input type="hidden" class="s_date_hidden" name="show_date">
        <!--<input type="hidden" class="s_category_hidden" name="show_category" value="">-->
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
        <!--<div class="col-lg-2" style="padding-right: 0;padding-left: 0">
            <div class="form-group">
                 <select class="form-control input-sm show_by s_category" data-show-by="category">
                    <option value="">Show all categories</option>
                    <?php foreach($categories->result() as $cats){?>
                    <option value="<?php echo $cats->category_id;?>"><?php echo $cats->category_name;?></option>
                    <?php };?>
                </select>
            </div>
        </div>
        -->
        <div class="col-lg-1" style="padding-left: 5px">
            <button type="submit" class="btn btn-outline btn-default btn-sm">Apply</button>
        </div>
        </form>
        <div class="pull-right" style="line-height: 3em">
            <small>Showing: <code>
			<?php if($published < 5) echo $published->num_rows();
				  else echo '5';
			?>
             Items</code> 
             of <?php echo $all_category;?> Drafts Articles
             </small>
        </div>
        <table class="table table-hover" id="old" style="border: 1px solid #ccc">
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
				if($published->num_rows() == 0) echo '<tr>
                    <td>No Dratfs Article !</td></tr>';
				foreach($published->result() as $row){?>
                <tr>
                    <td>
                    <div>
                        <a href="javascript:void(0)">
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
                        <a href="javascript:void(0)">
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
                <?php };?>
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
        <div class="pagination" style="margin-left: 20px;margin-top: -25px;margin-bottom: -45px">
	        <ul class="pagination pagination-">
    	        <?php echo $links;?>
        	</ul>
        </div>
        <div style="line-height: 3em">
            <small class="pull-right">Showing: <code>
			<?php if($published < 5) echo $published->num_rows();
				  else echo '5';
			?>
             Items</code> 
             of <?php echo $all_category;?> Drafts Articles
             </small>
        </div>
	</div>
</div>