<?php
	$attributes = array('class'=>'article-form');
	echo form_open_multipart('worker/ajax/is_ajax_validation/?define=article',$attributes);?>
<div class="row">
    <div class="col-lg-9" style="margin-bottom: 100px;">
    <?php
		if($_GET['term'] == 'done'){
			echo 
			'
				<div class="alert alert-success">
					<strong>Successfully published!</strong>
				</div>
			';
		}
		if($_GET['term'] == 'none'){
			echo 
			'
				<div class="alert alert-info">
					<strong>Successfully Published!</strong><br />
					<p>
						* Please upload article featured image as article cover on your added article.<br>
					   	* You can edit|update your lastly published article on your published article menu page.
					</p>
				</div>
			';
		}
		echo $validation;
	?>
    	<div id="error" style="display: none"></div>
    	<div class="form-group">
            <h4>Article Title</h4>
            <input name="article-title" type="text" value="<?php echo set_value('article-title');?>" class="form-control article-title" placeholder="Enter Title here..." autofocus="autofocus" style="font-weight: bold;font-size: 16px">
        </div>
        <div class="form-group">
            <textarea name="article-content" id="article-content" class="form-control article-content" rows="15" placeholder="Enter Article Content here....">
           	<?php echo set_value('article-content');?>
            </textarea>
        </div>
        <div class="form-group">
            <label>Featured Image</label>
            <input type="file" name="userfile" value="<?php echo set_value('userfile');?>" class="userfile form-control" />
        </div>
        <div class="form-group" style="width: 100%">
            <label>Preffered no. of questions (Minimum 20 ,Maximum 30)</label><br />
            <input style="width:30%;float: left" name="question-count" type="text" value="<?php echo set_value('question-count');?>" class="question-count form-control" placeholder="Put a number">
            <button style="float: left;margin-left: 20px;" class="q-show btn btn-outline btn-sm btn-default pull-left">Proceed</button>
        </div>
        <br />
        
        <div class="question_area" style="margin-top: 20px">
        </div>
        
    </div>
    
    <div class="col-lg-3">
    	<div class="panel panel-info">
            <div class="panel-heading">
                Publish
            </div>
            <div class="panel-body">
                <div style="border-bottom: 1px solid #ccc;padding: 2px">
                	Status : <label>On Draft</label>
                </div>
                <div style="border-bottom: 1px solid #ccc;padding: 2px">
                	Visibility : <label>hidden</label>
                </div>
				 <div class="form-group" style="padding: 0px;padding-top: 10px">
                    <button class="to-add btn btn-primary btn-xs pull-right subs" data-action="insert" data-status="publish" style="margin-left: 20px">Publish 
                    <i class="fa fa-check fa-fw"></i></button>
                    <button class="to-add btn btn-outline btn-xs btn-default pull-left subs" data-action="insert" data-status="draft">Save Draft 
                    <i class="fa fa-save fa-fw"></i></button>
                </div>                
            </div>
        </div>
        
        <div class="panel panel-info">
            <div class="panel-heading">
                Category
            </div>
            <div class="panel-body">
                <div>
                	<small>All Categories</small>
                    <ul class="category_list cats_panel" style="list-style: none;max-height: 200px;overflow-y: auto;">
                    	<?php
						$this->db->order_by('category_id','ASC');
						$category = $this->db->get('category');
						if($category->num_rows() == 0)
						{
							echo '<small>No Preffered Categories yet</small>';
						}
						else{
						foreach($category->result() as $row){?>
                        <div class="checkbox" style="margin: 0;padding-left: 0;">
                            <label>
                                <input name="category[]" type="checkbox" value="<?php echo $row->category_id;?>"><?php echo $row->category_name;?>
                            </label>
                        </div>
						<?php }
						}?>
                    </ul>
                </div>
                <div>
                	<small>
                    	<a class="add_category_link" href="#" style="text-decoration: underline"><b>Add Category</b></a>
                        <div class="form-group parent_selector category_box_input" style="display:none">
                            <select class="form-control input-sm parent_category" style="margin-bottom: 2px;">
                                <option value="0">Parent______</option>
                                <?php 
								$this->db->order_by('category_name','ASC');
                                $parent_category = $this->db->get('category');
                                foreach($parent_category->result() as $row){?>
                                <option value="<?php echo $row->category_id;?>"><?php echo $row->category_name;?></option>
                                <?php };?>
                            </select>
                        </div>
                        <div class="input-group category_box_input" style="display:none">
                            <input type="text" id="category" class="category-input-enter form-control input-sm" placeholder="Put new category.." \>
                            <span class="input-group-btn">
                                <button class="category-input-click btn btn-warning btn-sm" data-tab="none">
                                    Add
                                </button>
                            </span>
                        </div>
                    </small>
                </div>
            </div>
        </div>
        
    </div>
</div>
<?php echo form_close();?>