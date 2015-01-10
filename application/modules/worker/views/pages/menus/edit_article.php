<?php
	$this->db->where('article_id',$_GET['id']);
	$this->db->where('author',$this->session->userdata('id'));
	$this->db->where('status',$_GET['status']);
	$to_edit = $this->db->get('article');

	$attributes = array('class'=>'article-form');
	echo form_open_multipart('worker/ajax/is_ajax_validation/?define=article',$attributes);
?>
<div class="row">
    <div class="col-lg-9" style="margin-bottom: 100px;">
    <?php
    	echo $validation;
	?>
    	<div id="error" style="display: none"></div>
        <?php 
		if($to_edit->num_rows() == 0) echo '<div class="alert alert-danger"><h1>Article Not Found !</h1></div>';
		foreach($to_edit->result() as $rows)
		{
		?>
    	<div class="form-group">
            <h4>Article Title</h4>
            <input name="article-title" type="text" value="<?php echo $rows->title;?>" class="form-control article-title" placeholder="Enter Title here..." style="font-weight: bold;font-size: 16px">
        </div>
        <div class="form-group">
            <textarea name="article-content" id="article-content" class="form-control article-content" rows="15" placeholder="Enter Article Content here....">
           	<?php echo $rows->content;?>
            </textarea>
        </div>
        <div class="form-group">
            <label>Featured Image</label>
            <input type="file" name="userfile" class="userfile form-control" />
        </div>
        <?php
			$this->db->where('article_id',$rows->article_id);
			$questions = $this->db->get('exam_questions');
		?>
        <div class="form-group" style="width: 100%">
            <label>No. of Questions : <?php echo $questions->num_rows();?></label> <button type="button" class="btn btn-default btn-xs pull-right">Add Question <i class="glyphicon glyphicon-plus"></i></button><br />
            <input type="hidden" value="<?php echo $questions->num_rows();?>" name="q_coun" class="q_count" />
            <input type="hidden" value="<?php echo $questions->num_rows();?>" name="question-count" class="question-count" />
        </div>
        <?php foreach($questions->result() as $q_ex){?>
        <div class="panel panel-info questions_list">
        	<?php for($c=1;$c<=$questions->num_rows();$c++){?>
    		<div class="panel-heading">Quesion #: <?php echo $c;?></div>
			<div class="panel-body">
				<div class="form-group">
					<label>Question</label>
					<textarea class="form-control" name="question_<?php echo $c;?>" rows="5"><?php echo $q_ex->q1;?></textarea>
				</div>
				<div class="form-group">
					<label>Choice A</label>
					<textarea class="form-control" name="question_choice_a<?php echo $c;?>" rows="2"><?php echo $q_ex->q1a;?></textarea>
				</div>
				<div class="form-group">
                    <label>Choice B</label>
                    <textarea class="form-control" name="question_choice_b<?php echo $c;?>" rows="2"><?php echo $q_ex->q1b;?></textarea>
				</div>
				<div class="form-group">
                	<label>Choice C</label>
                	<textarea class="form-control" name="question_choice_c<?php echo $c;?>" rows="2"><?php echo $q_ex->q1c;?></textarea>
				</div>
                <div class="form-group">
                	<label>Choice D</label>
                	<textarea class="form-control" name="question_choice_d<?php echo $c;?>'" rows="2"><?php echo $q_ex->q1d;?></textarea>
                </div>
                <div class="form-group" style="width: 27%">
                	<label>Real Choice Answer (A/B/C/D)</label>
                	<input type="text" class="form-control answer" name="real_answer_<?php echo $c;?>" value="<?php echo $q_ex->qans;?>" />
				</div>
			</div>
            <?php }?>
		</div>
		<?php }?>
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
                	Status : <label><?php echo $rows->status;?></label>
                </div>
                <div style="border-bottom: 1px solid #ccc;padding: 2px">
                	Visibility : 
                    <label>
                    	<?php if($rows->status == 'publish') echo 'Public';else echo 'hidden';?>
                    </label>
                </div>
				 <div class="form-group" style="padding: 0px;padding-top: 10px">
                    <button class="to-add btn btn-primary btn-xs pull-right subs" data-action="update" data-status="publish" style="margin-left: 20px">Publish 
                    <i class="fa fa-check fa-fw"></i></button>
                    <button class="to-add btn btn-outline btn-xs btn-default pull-left subs" data-action="update" data-status="draft">Save Draft 
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
						foreach($category->result() as $row){
						?>
                        <div class="checkbox" style="margin: 0;padding-left: 0;">
                            <label>
                                <input name="category[]" type="checkbox" value="<?php echo $row->category_id;?>"
                                <?php
									$this->db->where('category_id',$row->category_id);
									$this->db->where('category_post',$rows->article_id);
									$categoryrel = $this->db->get('category_relationships');
									foreach($categoryrel->result() as $row3)
									{
									if($row->category_id == $row3->category_id) echo 'checked="checked"';
									}?>
                                ><?php echo $row->category_name;?>
                            </label>
                        </div>
						<?php 
						}
						}
						?>
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
        <?php };?>
    </div>
</div>
<?php echo form_close();?>
<script>
	$('.nicEdit-main').html($('#article-content').html());
</script>